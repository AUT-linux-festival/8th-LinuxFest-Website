<section class="bg-white" id="presenters">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    ارائه‌دهندگان
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>

    <div class="container grid-wrap col-set-one-quarter tablet-col-set-one-half phone-col-set-full">
        <div class="row">
            @foreach($presenters as $presenter)

                <?php if ($presenter['display_on_first_page'] == true) : ?>
                    <div class="col-lg-3 col-md-6 col-rtl2 text-center wow fadeIn">
                        <a href="{{route('app::presenter',[$presenter->id])}}" class="profile grid-col" target="_blank">

                            <img style="max-height: 220px;" src="{{$presenter->avatar}}">

                            <h2><strong>{{$presenter->name}}</strong></h2>

                            <h5>{{$presenter->bio}}</h5>

                            <a href="{{$presenter->url}}" target="_blank"><h5>صفحه شخصی</h5></a>
                            <div class="clear"></div>
                            <br>

                        </a>
                    </div>
                <?php endif; ?>

            @endforeach
        </div>
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <a href="#contact" class="page-scroll btn btn-default btn-xl text-center" style="background-color: #93d3f0">
                کجاست؟
            </a>
        </div>
    </div>

</section>
