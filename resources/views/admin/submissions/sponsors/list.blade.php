@extends('layouts.app')

@section('content')
    <section class="container">
        <section class="session-container">
            <div style="text-align: center">
                <h1>
                    لیست حامیان ثبت‌شده
                </h1>
            </div>
            <hr>
            <div class="row">
                @foreach($sponsors->sortByDesc('created_at') as $s)
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="col-sm-10">
                                    {!! $s->sponsor_name !!}
                                </div>
                                <div class="col-sm-offset-10">
                                    {{\Morilog\Jalali\Facades\jDate::forge($s->created_at)->format("%H:%M %y/%m/%d ")}}
                                </div>
                            </div>
                            <div class="panel-body" style="">
                                <div class="col-sm-5">
                                    <b>نام و نام خانوادگی:</b> {{$s->sponsor_person}} <br>
                                    <b>ایمیل:</b> {{$s->sponsor_email}} <br>
                                    <b>شماره تماس:</b> {{$s->sponsor_phone}} <br>
                                    <b>توضیحات:</b> {!! $s->description !!} <br>
                                </div>
                                <div class="col-sm-5">
                                    <a href="{{URL::asset($s->logo)}}" target="_blank">
                                        <img width="200" src="{{URL::asset($s->logo)}}">
                                    </a>
                                </div>
                                <div class="col-sm-offset-11">
                                    <form action="{{route('admin::mail.compose')}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="hidden" name="to" value="{{$s->sponsor_email}}">
                                        <button type="submit">
                                            ارسال ایمیل
                                        </button>
                                        <br>
                                    </form>
                                    <a href="{{route('admin::submissions.sponsor.edit', ['sponsor' => $s])}}">ویرایش</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </section>
@endsection