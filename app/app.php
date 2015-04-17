<?php
/*
 * Website Helper functions will be placed here
 */

function get_reg_data() {
    return [
        [
            'title' => 'روز اول - پنج شنبه ۲۴ اردیبهشت',
            'presentations' => [
                'CopyLeft','Presentation','MySQL NoSQL'
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
                'BigData','Presentation '
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

function get_presenters() {
    return [

        [
            'name'=>'جادی',
            'avatar'=>'//www.gravatar.com/avatar/a40fa5f4ed9c29dfbc3b6ec60509f587?s=200',
            'url'=>'https://jadi.net',
            'bio'=>'Linux geek'
        ],

        [
            'name'=>'بهادر بخشی',
            'avatar'=>'assets/img/bakhshi.jpg',
            'url'=>'http://ceit.aut.ac.ir/~bakhshis/',
            'bio'=>'PhD, Assistance Professor'
        ],

        [
            'name'=>'امیرحسین پی‌براه',
            'avatar'=>'assets/img/amir.jpg',
            'url'=>'https://www.sics.se/~amir/',
            'bio'=>'Swedish Institute of Computer Science'
        ],

        [
            'name'=>'فراز شمشیردار',
            'avatar'=>'//www.gravatar.com/avatar/c4baac2a7eb2c03feb46429904f7098e?s=200',
            'url'=>'https://ir.linkedin.com/in/shamshirdar',
            'bio'=>'Developer - FruitCraft'
        ],

        [
            'name'=>'محمدحسین حیدری',
            'avatar'=>'//www.gravatar.com/avatar/67a156a371ec4ffa39a37cfc4f824ee6?s=200',
            'url'=>'https://github.com/mdhheydari',
            'bio'=>'Software Developer'
        ],

        [
            'name'=>'سینا شیخ الاسلامی',
            'avatar'=>'//www.gravatar.com/avatar/9c773fbd22eab00f63f30a4b4a1f3a7a?s=200',
            'url'=>'http://sinash.ir/',
            'bio'=>'IT Advisor, Software Developer'
        ],

        [
            'name'=>'پویا پارسا',
            'avatar'=>'//www.gravatar.com/avatar/1fddd58251edc7bf16e279b8811cd327?s=200',
            'url'=>'http://pi0.ir/',
            'bio'=>'Software Developer'
        ],

       [
            'name'=>'پرهام الوانی',
            'avatar'=>'//www.gravatar.com/avatar/1347add4ae303c0258a3db358ed77c55?s=200',
            'url'=>'http://1995parham.github.io/about/',
            'bio'=>'OpenSource Developer'
        ],

    ];
}