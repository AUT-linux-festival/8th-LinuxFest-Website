@extends('layouts.app')

@section('content')
    <section class="container">
        <section class="session-container">
            <div style="text-align: center">
                <h1>
                    لیست ارائه دهندگان ثبت‌شده
                </h1>

            </div>
            <a href="{{route('admin::presenter.add')}}">
                <button type="button" class="btn-danger btn btn-lg" style="background-color: #435465" >
                    <i class="fa fa-close"></i>
                    +  اضافه کردن ارائه دهنده
                </button>
            </a>
            <hr>
            <div class="row">

                @foreach($presenters as $s)

                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                                <div class="col-sm-offset-10">
                                    {{$s->created_at}}

                                </div>

                                    <b>نام و نام خانوادگی:</b> {{$s->presenter_name}}
                                <img class="col-sm-offset-10" width=150 height=150 src={{asset('storage/presenter/' . $s->_id . '/'."presenter_avatar")}}><br>
                                    <b>ایمیل:</b> {{$s->presenter_email}} <br>
                                    <b>شماره تماس:</b> {{$s->presenter_phone}} <br>
                                    <b>توضیحات:</b> {!! $s->presenter_bio !!} <br>




                            </div>
                            <div class="col-sm-offset-11">
                                <a href="{{route('admin::presenter.edit', ['presenter' => $s])}}">ویرایش</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </section>
@endsection