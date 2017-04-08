<aside class="bg-mellow-yellow" id="sponsors" style="backgroung:#000">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    حامیان طلایی
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="call-to-action">
            <div class="row">
                 @foreach($sponsors as $sponsor)
                   <?php if( strstr($sponsor['type'], 'gold')) : ?>
                    <div class="col-md-6">
                        <a href="{{$sponsor->url}}" target="_blank">
                            <img src="{{$sponsor->logo}}" class="sponsor-img">
                        </a>
                    </div>
                    <?php endif; ?>
                 @endforeach
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    حامیان نقره‌ای
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="call-to-action">
            <div class="row">
                @foreach($sponsors as $sponsor)
                    <?php if( strstr($sponsor['type'], 'silver')) : ?>
                    <div class="col-md-12">
                        <a href="{{$sponsor->url}}" target="_blank">
                            <img src="{{$sponsor->logo}}" class="sponsor-img">
                        </a>
                    </div>
                    <?php endif; ?>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    حامیان برنزی
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="call-to-action">
            <div class="row">
                @foreach($sponsors as $sponsor)
                    <?php if( strstr($sponsor['type'], 'bronze')) : ?>
                    <div class="col-md-6">
                        <a href="{{$sponsor->url}}" target="_blank">
                            <img src="{{$sponsor->logo}}" class="sponsor-img">
                        </a>
                    </div>
                    <?php endif; ?>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    حامیان رسانه‌ای
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="call-to-action">
            <div class="row">
                @foreach($sponsors as $sponsor)
                    <?php if( strstr($sponsor['type'], 'press')) : ?>
                    <div class="col-md-4">
                        <a href="{{$sponsor->url}}" target="_blank">
                            <img src="{{$sponsor->logo}}" class="sponsor-img">
                        </a>
                    </div>
                    <?php endif; ?>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    برگزارکنندگان
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="call-to-action">
            <div class="row">
                @foreach($sponsors as $sponsor)
                    <?php if( strstr($sponsor['type'], 'founder')) : ?>
                    <div class="col-md-4">
                        <a href="{{$sponsor->url}}" target="_blank">
                            <img src="{{$sponsor->logo}}" class="sponsor-img">
                        </a>
                    </div>
                    <?php endif; ?>
                @endforeach
            </div>
        </div>
    </div>
</aside>