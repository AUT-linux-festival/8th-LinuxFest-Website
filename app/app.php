<?php
/*
 * Website Helper functions will be placed here
 */

function get_reg_data()
{
    return [
        [
            'title' => 'روز اول - پنج شنبه ۲۴ اردیبهشت',
            'presentations' => [
                'CopyLeft', 'Presentation', 'MySQL NoSQL'
            ]
            ,
            'items' => [
                'no' => 'شرکت نمی کنم',
                'basic' => 'Linux intro',
                'python' => 'Python intro',
                'network' => 'Networking in linux',
                'kernel' => 'Kernel Part I',
            ]
        ],
        [
            'title' => 'روز دوم - جمعه ۲۵ اردیبهشت',
            'presentations' => [
                'BigData', 'Presentation '
            ],
            'items' => [
                'no' => 'شرکت نمی کنم',
                'basic' => 'Linux Intermediate + Presentation : How to survive in linux',
                'programming' => 'Programming',
                'python' => 'Python advanced',
                'web' => 'WebServer',
                'kernel' => 'Kernel Part II',
            ]
        ],
    ];
}

function get_presenters()
{
    return [
        [
            'name' => 'امیرحسین پی‌براه',
            'avatar' => 'assets/img/amir.jpg',
            'url' => 'https://www.sics.se/~amir/',
            'bio' => 'PhD,Senior researcher @SICS'
        ],

        [
            'name' => 'جادی',
            'avatar' => '//www.gravatar.com/avatar/a40fa5f4ed9c29dfbc3b6ec60509f587?s=200',
            'url' => 'https://jadi.net',
            'bio' => 'Linux geek'
        ],


        [
            'name' => 'بهادر بخشی',
            'avatar' => 'assets/img/bakhshi.jpg',
            'url' => 'http://ceit.aut.ac.ir/~bakhshis/',
            'bio' => 'PhD, Assistance Professor @AUT'
        ],

        [
            'name' => 'علی نادعلیزاده',
            'avatar' => '//www.gravatar.com/avatar/b048c6444f5618ca6ccd5dc33e125c10?s=200',
            'url' => 'http://ali.nadalizadeh.ir/',
            'bio' => 'CTO @Turned on Digital'
        ],

        [
            'name' => 'فراز شمشیردار',
            'avatar' => '//www.gravatar.com/avatar/c4baac2a7eb2c03feb46429904f7098e?s=200',
            'url' => 'http://shamshirdar.net/',
            'bio' => 'Programmer @Cnext'
        ],


        [
            'name' => 'محمدحسین حیدری',
            'avatar' => '//www.gravatar.com/avatar/67a156a371ec4ffa39a37cfc4f824ee6?s=200',
            'url' => 'https://github.com/mdhheydari',
            'bio' => 'Software Developer'
        ],

        [
            'name' => 'سینا شیخ الاسلامی',
            'avatar' => '//www.gravatar.com/avatar/9c773fbd22eab00f63f30a4b4a1f3a7a?s=200',
            'url' => 'http://sinash.ir/',
            'bio' => 'IT Advisor, Software Developer'
        ],
        [
            'name' => 'پرهام الوانی',
            'avatar' => '//www.gravatar.com/avatar/1347add4ae303c0258a3db358ed77c55?s=200',
            'url' => 'http://1995parham.github.io/about/',
            'bio' => 'OpenSource Developer'
        ],

        [
            'name' => 'پویا پارسا',
            'avatar' => '//www.gravatar.com/avatar/1fddd58251edc7bf16e279b8811cd327?s=200',
            'url' => 'http://pi0.ir/',
            'bio' => 'Software Developer'
        ],


    ];
}

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
use ReCaptcha\ReCaptcha;


function submit_reg_form()
{

    //ReCaptcha
    $recaptcha = new ReCaptcha(RECAPTCHA_SECRET);
    $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

    if (!$resp->isSuccess()) {
        throw new Exception('Invalid captcha!');
    }


    //Get & Process form data
    $form_data = getInputsWithKey('name|email|tel|inst|aut|std|day1|day2');

    if (isset($form_data['aut']))
        $form_data['aut'] = strlen($form_data['aut']) > 0 ? 'X' : '';
    if (isset($form_data['std']))
        $form_data['std'] = strlen($form_data['std']) > 0 ? 'X' : '';
    $form_data['tel'] = intval($form_data['tel']);

    $form_data['price'] = 40000;//TODO

    //Check Google Client Expired
    $token = json_decode(gapi_token, true);
    $client = new Google_Client();
    $client->setClientId(GAPI_CLIENT_ID);
    $client->setClientSecret(GAPI_CLIENT_SECRET);
    $client->setAccessToken(gapi_token);
    if ($client->isAccessTokenExpired()) {
        //Refresh on expire
        $client->refreshToken($client->getRefreshToken());
        foreach (json_decode($client->getAccessToken(), true) as $k => $v) {
            $token[$k] = $v;
        }
        file_put_contents(GAPI_TOKEN_LOCATION, "<?php define('gapi_token','" .
            json_encode($token) . "');");
    }


    //Get Registration sheet
    $serviceRequest = new DefaultServiceRequest($token['access_token']);
    ServiceRequestFactory::setInstance($serviceRequest);
    $spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
    $sheet = $spreadsheetService
        ->getSpreadsheets()
        ->getByTitle('linuxfest_2015')
        ->getWorksheets()
        ->getByTitle('List');

    //Insert Submitted data
    $sheet->getListFeed()->insert($form_data);

}