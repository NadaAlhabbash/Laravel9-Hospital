<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach($sliderdata as $rs)
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="{{Storage::url($rs->image)}}" alt="">
                        <div class="meta text-light">
                            <h1>{{$rs->title}}</h1>
{{--                            <a href="#"><span class="mai-call"></span></a>--}}
{{--                            <a href="#"><span class="mai-logo-whatsapp"></span></a>--}}
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0 ">{{$rs->title}}</p>
{{--                        <span class="text-sm text-grey">Cardiology</span>--}}
                    </div>
                </div>
            </div>
            @endforeach
>
        </div>
    </div>
</div>
