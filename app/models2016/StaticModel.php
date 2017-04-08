<?php

namespace App\models2016;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/***
 * Class StaticModel
 * This Class binds static arrays to Eloquent readonly models
 * By Pooya Parsa <pooya@pi0.ir>
 * @package App
 *
 */
class StaticModel extends Model
{
    public static $data = [];

    /**
     * Get an attribute from the model.
     *
     * @param  string $key
     * @return mixed
     */
    public function getAttribute($key)
    {
        // Don't mutate id attr
        if (array_key_exists($key, $this->attributes) && $key == 'id')
            return $this->attributes['id'];

        if ((array_key_exists($key, $this->attributes) || $this->hasGetMutator($key))
            && !method_exists($this, $key)/*Bug fix: relation with same attr*/
        ) {
            return $this->getAttributeValue($key);
        }

        return $this->getRelationValue($key);
    }


    public function newEloquentBuilder($query)
    {
        return new StaticModelBuilder($query);
    }


}

/***
 * Class StaticModelBuilder
 * This Class binds static arrays to Eloquent readonly models
 * By Pooya Parsa <pooya@pi0.ir>
 * @package App
 *
 */
class StaticModelBuilder extends Builder
{

    /**
     * Get the hydrated models without eager loading.
     *
     * @param  array $columns
     * @return \Illuminate\Database\Eloquent\Model[]
     */
    public function getModels($columns = ['*'])
    {
        //$results = $this->query->get($columns);

        // Get class static data
        $class = get_class($this->model);
        $data = &$class::$data;
        $results = $class::$data; // Create a copy of original data

        // Now apply query bindings
        // TODO: add support for select,join,having,order and union bindings !

        // Filter where bindings
        foreach ($results as $index => &$result) {
            // Conditions have: type,column,operator,value and boolean
            if (is_array($this->query->wheres))
                foreach ($this->query->wheres as &$condition) {
                    if ($condition['type'] == 'Basic') {
                        // Check
                        $status = true; // Default is pass;
                        //Dot notation workaround
                        $column = explode('.', $condition['column']);
                        $column = end($column);
                        $attr = &$result[$column];

                        //TODO: add support for other operators:
                        //'between', 'ilike','&', '|', '^', '<<', '>>','rlike','~*',, '!~*'
                        switch ($condition['operator']) {
                            case '=':
                            case 'like': //TODO
                            case 'like binary': //TODO
                            case 'similar to': //TODO
                            case 'regexp': //TODO
                            case '~': //TODO
                                $status = $condition['value'] == $attr;
                                break;
                            case '!=':
                            case '<>':
                            case 'not like': //TODO
                            case 'not similar to': //TODO
                            case 'not regexp': //TODO
                            case '!~': //TODO
                                $status = $condition['value'] != $attr;
                                break;
                            case '>':
                                $status = $attr > $condition['value'];
                                break;
                            case '>=':
                                $status = $attr >= $condition['value'];
                                break;
                            case '<':
                                $status = $attr < $condition['value'];
                                break;
                            case '<=':
                                $status = $attr <= $condition['value'];
                                break;
                        }

                        // Chain
                        //TODO: add support for booleans other than 'and'
                        switch ($condition['boolean']) {
                            case 'and':
                                if ($status == false)
                                    unset($results[$index]);
                                break;
                        }

                    }
                }
        }

        $connection = $this->model->getConnectionName();
        return $this->model->hydrate($results, $connection)->all();
    }

}