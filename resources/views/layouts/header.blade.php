<!DOCTYPE html>
<html lang="fa">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="نهمین جشنواره‌ی لینوکس دانشگاه صنعتی امیرکبیر">

    <title>
        جشنواره‌ی لینوکس امیرکبیر
        <?php if (defined('title')) echo ' - ' . title ?>
    </title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">

    <!-- Include Editor style. -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.0/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.0/css/froala_style.min.css' rel='stylesheet' type='text/css' />
    @yield('styles')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- JQUERY -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Include JS file. -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.0/js/froala_editor.min.js'></script>
    @include('includes.analytics')

    @yield('scripts')

</head>

<body id="page-top" dir="rtl">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="/#page-top">
                جشنواره‌ی لینوکس امیرکبیر
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="/#about" data-target="#about">
                        درباره‌ی جشنواره
                    </a>
                </li>

                {{--<li>--}}
                    {{--<a class="page-scroll" href="/#register" data-target="#special">--}}
                       {{--ثبت‌نام--}}
                    {{--</a>--}}
                {{--</li>--}}

                {{--<li>--}}
                    {{--<a class="page-scroll" href="/#workshops" data-target="#workshops">--}}
                        {{--کارگاه ها و ارائه ها--}}
                    {{--</a>--}}
                {{--</li>--}}

                {{--<li>--}}
                    {{--<a class="page-scroll" href="/#presenters" data-target="#presenters">--}}
                        {{--ارائه‌دهندگان--}}
                    {{--</a>--}}
                {{--</li>--}}

                <li>
                    <a class="page-scroll" href="/#sponsors" data-target="#sponsors">
                        حامیان
                    </a>
                </li>

                <li>
                    <a class="page-scroll" href="/#contact" data-target="#contact">
                        محل جشنواره
                    </a>
                </li>

                <li>
                    <a class="page-scroll" href="{{url('/old_2016')}}">
                        دوره هشتم
                    </a>
                </li>

                @if(Auth::check())
                    <li>
                        <a class="page-scroll" href="{{url('/logout')}}">
                            {{Auth::user()->name}}
                            عزیز روز بخیر.
                            خروج از حساب کاربری
                        </a>
                    </li>
                @endif

                {{--<li>--}}
                    {{--<a class="page-scroll" href="/timeline">--}}
{{--جدول زمانی جشنواره--}}
                    {{--</a>--}}
                {{--</li>--}}


            </ul>

            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a>
                        <div id="top-left-container">

                        </div>
                    </a>
                </li>

            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
