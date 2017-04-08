<aside class="bg-dark-violet" id="workshops">
    @foreach($sections as $title=>$items)
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">{{$title}}</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                @foreach($items as $section)
                    <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                        <div class="thumbnail"
                             style="background-color: #636363; border: 1px solid #4b4850;padding: 10px">
                            <h2>
                                {{--<a href="{{route('app::section',[$section->id])}}" target="_blank">--}}
                                {{$section->title}}
                                {{--</a>--}}
                            </h2>

                            <div class="row" style="margin-top:20px;">
                                @if($section->presenter)
                                    <?php $p = App\models2016\Presenter::find($section->presenter); ?>
                                    <img style="max-height: 40px;" class="img-circle"
                                         src="{{$p->avatar}}">
                                    <span>{{$p->name}}</span>
                                @endif
                            </div>

                            <div class="row" style="margin-top:20px;">
                                <span class="badge">{{$section->level}}</span>
                                <span class="badge">{{$section->time}}</span>
                            </div>

                            <div style="text-align: center;margin-top:20px;">
                                <a href="{{route('app::section',[$section->id])}}"
                                   class="btn btn-info" target="_blank"
                                   style="background-color: #9591cc; border-color: #948fd8;">
                                    <span>مشاهده‌ی جزئیات</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    @endforeach

    <div class="col-lg-8 col-lg-offset-2 text-center">
        <a href="#presenters" class="page-scroll btn btn-default btn-xl text-center">
            کیا هستن؟
        </a>
    </div>

    <br>
    <br>

</aside>

