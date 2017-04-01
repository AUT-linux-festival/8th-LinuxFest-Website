<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sposnsoring;
use Illuminate\Http\Request;
use App\LiveMessage;
use App\Presenter;
use App\Section;
use App\Sponsor;
use App\Submission;
use Illuminate\Support\Facades\Route;
use ReCaptcha\ReCaptcha;

class SiteController extends Controller{

    public static function routes()
    {
        // Landing page
        Route::get('/', 'SiteController@landing')->name('app::index');

        // Presenters
        Route::get('/presenter/{presenter}', 'SiteController@presenter')->name('app::presenter');

        // Timeline
//        Route::get('/timeline','SiteController@timeline');

        // Registeration
//        Route::get('/register','SiteController@register');

        // Live Blog
        Route::get('/live', 'SiteController@live')->name('app::live.index');

        // Sections
        // TODO: handle 2016 in a better way:D
        Route::get('/2016/{section}', 'SiteController@section')->name('app::section');

        //Submissions
        Route::get('/submissions', 'SiteController@showSubmissionForm')->name('app::submission.index');
        Route::get('/submissions/success', 'SiteController@showSuccessPage')->name('app::submission.success');
        Route::post('/submissions', 'SiteController@storeSubmission')->name('app::submission.submit');
        
        //Sponsors
        Route::get('/sponsoring', 'SiteController@showSponsoringForm')->name('app::sponsors.index');
        Route::post('/sponsoring', 'SiteController@storeSponsoringRequest')->name('app::sponsors.submit');

    }


    public static function getHTML($value)
    {
        return strip_tags($value, "<a><b><blockquote><code><del><dd><dl><dt><em><h1><h2><h3><h4><h5><h6><i><img><kbd><li><ol><p><pre><s><sup><sub><strong><strike><ul><br><hr>");
    }


    public function landing()
    {
//        $presenters = Presenter::all();
//        $workshops = Section::whereType('workshop')->get();
//        $presentations = Section::whereType('presentation')->get();
//        $sponsors = Sponsor::all();
        
        return view('landing.landing', [
//            'presenters' => $presenters,
//            'sections' => [
//                'کارگاه ها'=>$workshops,
//                'ارائه ها'=>$presentations,
//            ],
//            'sponsors' => $sponsors,
        ]);

    }

    public function timeline () {
        $sections = Section::all();
        return view('timeline.timeline', ['sections' => $sections]);
    }

    public function presenter(Presenter $presenter)
    {
        return view('presenter.presenter', [
            'presenter' => $presenter,
        ]);
    }

    public function section(Section $section)
    {
        $presenters = [];

        if($section->presenter)
            $presenters[]=Presenter::where('id',$section->presenter)->firstOrFail();

        if($section->presenters)
            foreach ($section->presenters as $presenter)
            $presenters[]=Presenter::where('id',$presenter)->firstOrFail();

        return view('section.section', [
            'section' => $section,
            'presenters' => $presenters,
        ]);
    }

    public function register() {
        return view('register.register');
    }

    public function live() {
        $msgs = LiveMessage::orderBy('published_at', 'desc')->get();
        return view('live.feed', [
            'messages' => $msgs,
        ]);
    }

    /**
     * Returns the proposal submission form
     *
     */
    public function showSubmissionForm(){
        return view('submissions.submission');
    }

    /**
     * Storing submission
     *
     * @param \App\Http\Requests\Submission|Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeSubmission(Request $request){
        //Validating Request
        $g_response = $this->validateRECAPTCHA($request);
        if (!$g_response["status"])
       return redirect()->back()->withErrors($g_response["res"]);
        $validator = \Validator::make($request->all(), \App\Http\Requests\Submission::getRules());
        if ($validator->fails())
            return redirect()->back()->withErrors($validator->errors());

        // Storing the data
        $s = new Submission($request->all());
        $s->save();
        foreach (['resume', 'abstract-file'] as $type){
            if ($request->hasFile($type))
                if ($request->file($type)->isValid()){
                    $directory = 'storage/submissions/' . $s->_id . '/';
                    $file_name = $type . '.pdf';
                    if ($type == 'resume')
                        $s->resume = $directory . $file_name;
                    else
                        $s->abstract_file = $directory . $file_name;
                    $s->save();
                    $request->file($type)->move($directory, $file_name);
                }
        }
        return view('submissions.success', ['data' => $request->all()]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showSponsoringForm(){
        return view('submissions.sponsors.sponsor');
    }

    public function storeSponsoringRequest(Request $request){
        $g_response = $this->validateRECAPTCHA($request);
        if (!$g_response["status"])
            return redirect()->back()->withErrors($g_response["res"]);
        $validator = \Validator::make($request->all(), Sposnsoring::getRules());
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        // Storing the data
        $s = new Sponsor($request->all());
        $s->save();
        if ($request->hasFile('logo'))
            if ($request->file('logo')->isValid()){
                $directory = 'storage/sponsors/' . $s->_id . '/';
                $file_name = 'logo' . $request->file('logo')->getClientOriginalExtension();
                $s->logo = $directory . $file_name;
                $s->save();
                $request->file('logo')->move($directory, $file_name);
            }
        return view('submissions.sponsors.success', ['data' => $request->all()]);
    }

    private function validateRECAPTCHA(Request $request) {
        if (!$request->has('g-recaptcha-response'))
            return ["status" => false, "res" => "Empty response"];
        $response = $request->get('g-recaptcha-response');
        $g_recaptcha = new ReCaptcha('6Lf_PxgUAAAAAANlAnqDiPGvvmotEk0DtgtJICIZ');
        $resp = $g_recaptcha->verify($response);
        if ($resp->isSuccess()) {
            return ["status" => true, "res" => "OK"];
        } else {
            $errors = $resp->getErrorCodes();
            return ["status" => false, "res" => $errors];
        }
    }

}
