@extends('2016.layout.app')

@section('content')
    @include('2016.landing.includes.header')
    @include('2016.landing.includes.about')
    @include('2016.landing.includes.register')
{{--    @include('2016.landing.includes.special')--}}
    @include('2016.landing.includes.sections')
    @include('2016.landing.includes.presenters')
    @include('2016.landing.includes.sponsors')
    @include('2016.landing.includes.contact')
@endsection