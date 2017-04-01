<?php

namespace App;
use App\Http\Controllers\SiteController;


/**
 * Class Submission
 *
 * @property array attendance
 * @property string subject
 * @property string abstract
 * @property string description
 * @property string resume
 * @property string abstract_file
 *
 * @package App
 */
class Submission extends \Moloquent
{

    protected $fillable = [
        'attendance_name',
        'attendance_phone',
        'attendance_email',
        'subject',
        'abstract',
        'description',
    ];

    public function getAbstractAttribute($value)
    {
        return SiteController::getHTML($value);
    }

    public function getDescriptionAttribute($value)
    {
        return SiteController::getHTML($value);
    }
}
