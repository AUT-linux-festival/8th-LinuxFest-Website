<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */
use App\models2016\Presenter;
use App\models2016\Section;
use App\models2016\Sponsor;
use Illuminate\Support\Facades\Route;

Route::group(
    ['middleware' => ['web']],
    function () {

        // Landing
        \App\Http\Controllers\SiteController::routes();

        //Admin
        \App\Http\Controllers\AdminController::routes();

    }
);
Route::auth();

Route::get('/home', 'HomeController@index');
Route::get(
    '/old_2016',
    function () {
        $presenters = Presenter::all();
        $workshops = Section::whereType('workshop')->get();
        $presentations = Section::whereType('presentation')->get();
        $sponsors = Sponsor::all();

        return view('2016.landing.landing', [
            'presenters' => $presenters,
            'sections' => [
                'کارگاه ها'=>$workshops,
                'ارائه ها'=>$presentations,
            ],
            'sponsors' => $sponsors,
        ]);
    }
);

Route::get('/2016/{section}', function ($section) {
    $presenters = [];

    if ($section->presenter) {
        $presenters[]=Presentesr::where('id', $section->presenter)->firstOrFail();
    }

    if ($section->presenters) {
        foreach ($section->presenters as $presenter) {
            $presenters[]=Presenter::where('id', $presenter)->firstOrFail();
        }
    }

    return view('section.section', [
        'section' => $section,
        'presenters' => $presenters,
    ]);
})->name('app::section');
