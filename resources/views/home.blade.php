@extends("layout.main_layout")

@section("content")
    <style>
        .text-black{
            color:#000000;
            font-weight: bold;

        }
    </style>
        <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 300, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }}">
                <ul>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="/photoo site/web/halghe.webp"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">


                        <div class="tp-caption font-weight-extra-bold text-color-light"
                             data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center" data-hoffset="['-155','-155','-155','-255']"
                             data-y="center"
                             data-fontsize="['145','145','145','250']"
                             data-lineheight="['150','150','150','260']">C</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                             data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center" data-hoffset="['-80','-80','-80','-130']"
                             data-y="center"
                             data-fontsize="['145','145','145','250']"
                             data-lineheight="['150','150','150','260']">O</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                             data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center"
                             data-y="center"
                             data-fontsize="['145','145','145','250']"
                             data-lineheight="['150','150','150','260']">U</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                             data-frames='[{"delay":1900,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center" data-hoffset="['65','65','65','115']"
                             data-y="center"
                             data-fontsize="['145','145','145','250']"
                             data-lineheight="['150','150','150','260']">P</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                             data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center" data-hoffset="['139','139','139','240']"
                             data-y="center"
                             data-fontsize="['145','145','145','250']"
                             data-lineheight="['150','150','150','260']">L</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                             data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center" data-hoffset="['200','200','200','320']"
                             data-y="center"
                             data-fontsize="['145','145','145','250']"
                             data-lineheight="['200','200','200','280']">E</div>

                        <a class="tp-caption btn btn-rounded-icon text-color-light"
                           style="display: inline-flex !important"
                           data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                           href="#section-main"
                           data-hash
                           data-hash-offset="150"
                           data-x="center"
                           data-y="bottom" data-voffset="['120','85','-150','-400']"
                           data-fontsize="['23','25','40','50']"><i class="icon-arrow-down icons"></i></a>



                        {{--                        <a class="tp-caption btn btn-primary font-weight-bold"--}}
                        {{--                           href="#"--}}
                        {{--                           data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
                        {{--                           data-x="center"--}}
                        {{--                           data-y="center" data-voffset="['65','65','65','210']"--}}
                        {{--                           data-paddingtop="['15','15','15','30']"--}}
                        {{--                           data-paddingbottom="['15','15','15','30']"--}}
                        {{--                           data-paddingleft="['33','33','33','50']"--}}
                        {{--                           data-paddingright="['33','33','33','50']"--}}
                        {{--                           data-fontsize="['20','20','20','35']"--}}
                        {{--                           data-lineheight="['20','20','20','25']">رزرو<i class="fas fa-arrow-right ml-1"></i></a>--}}

                    </li>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="/images/slide_1.jpg"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        <div class="tp-caption"
                             data-x="center" data-hoffset="['-165','-165','-165','-215']"
                             data-y="center" data-voffset="['-110','-110','-110','-135']"
                             data-start="1000"
                             data-transform_in="x:[-300%];opacity:0;s:500;"
                             data-transform_idle="opacity:0.2;s:500;"></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                             data-x="center"
                             data-y="center" data-voffset="['-110','-110','-110','-135']"
                             data-start="700"
                             data-fontsize="['22','22','22','40']"
                             data-lineheight="['25','25','25','45']"
                             data-transform_in="y:[-50%];opacity:0;s:500;">Wedding Photography</div>

                        <div class="tp-caption"
                             data-x="center" data-hoffset="['165','165','165','215']"
                             data-y="center" data-voffset="['-110','-110','-110','-135']"
                             data-start="1000"
                             data-transform_in="x:[300%];opacity:0;s:500;"
                             data-transform_idle="opacity:0.2;s:500;"></div>

                        <h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2 "
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['-40','-40','-40','-65']"
                            data-fontsize="['30','30','30','50']"
                            data-lineheight="['55','55','55','115']">برای مراسمت نیاز به عکاس یا فیلمبردار داری</h1>

                        <div class="tp-caption font-weight-light text-center"
                             data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-x="center"
                             data-y="center" data-voffset="['25','25','25','10']"
                             data-fontsize="['18','18','18','50']"
                             data-lineheight="['29','29','29','40']"
                             style="color: #b5b5b5;">همین الان روی دکمه رزرو کلیک کن</div>


                        <a class="tp-caption btn btn-primary font-weight-bold "
                           href="#"
                           data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                           data-x="center"
                           data-y="center" data-voffset="['80','80','80','170']"
                           data-paddingtop="['15','15','15','30']"
                           data-paddingbottom="['15','15','15','30']"
                           data-paddingleft="['33','33','33','50']"
                           data-paddingright="['33','33','33','50']"
                           data-fontsize="['13','13','13','50']"
                           data-lineheight="['20','20','20','25']">رزرو <i class="fas fa-arrow-down ml-1"></i></a>

                    </li>

                    <li class="slide-overlay" data-transition="fade">
                        <img src="/photoo site/web/dood.webp"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

{{--                        <div class="tp-caption"--}}
{{--                             data-x="center" data-hoffset="['-115','-115','-115','-185']"--}}
{{--                             data-y="center" data-voffset="['-110','-110','-110','-135']"--}}
{{--                             data-start="1000"--}}
{{--                             data-transform_in="x:[-300%];opacity:0;s:500;"--}}
{{--                             data-transform_idle="opacity:0.2;s:500;"></div>--}}

{{--                        <div class="tp-caption text-color-light font-weight-normal"--}}
{{--                             data-x="center"--}}
{{--                             data-y="center" data-voffset="['-110','-110','-110','-135']"--}}
{{--                             data-start="700"--}}
{{--                             data-fontsize="['22','22','22','40']"--}}
{{--                             data-lineheight="['25','25','25','45']"--}}
{{--                             data-transform_in="y:[-50%];opacity:0;s:500;">ثبت لحظات ناب بهترین</div>--}}

{{--                        <div class="tp-caption"--}}
{{--                             data-x="center" data-hoffset="['115','115','115','185']"--}}
{{--                             data-y="center" data-voffset="['-110','-110','-110','-135']"--}}
{{--                             data-start="1000"--}}
{{--                             data-transform_in="x:[300%];opacity:0;s:500;"--}}
{{--                             data-transform_idle="opacity:0.2;s:500;"></div>--}}

{{--                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2 mt-2 mb-2"--}}
{{--                             data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
{{--                             data-x="center"--}}
{{--                             data-y="center" data-voffset="['-40','-40','-40','-65']"--}}
{{--                             data-fontsize="['50','50','50','90']"--}}
{{--                             data-lineheight="['55','55','55','95']">روز زندگیتون رو به ما بسپارید</div>--}}



{{--                        <a class="tp-caption btn btn-primary font-weight-bold"--}}
{{--                           href="#"--}}
{{--                           data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
{{--                           data-x="center"--}}
{{--                           data-y="center" data-voffset="['65','65','65','210']"--}}
{{--                           data-paddingtop="['15','15','15','30']"--}}
{{--                           data-paddingbottom="['15','15','15','30']"--}}
{{--                           data-paddingleft="['33','33','33','50']"--}}
{{--                           data-paddingright="['33','33','33','50']"--}}
{{--                           data-fontsize="['20','20','20','35']"--}}
{{--                           data-lineheight="['20','20','20','25']">رزرو<i class="fas fa-arrow-right ml-1"></i></a>--}}

                    </li>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="/photoo site/web/1.webp"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        {{--                        <div class="tp-caption"--}}
                        {{--                             data-x="center" data-hoffset="['-115','-115','-115','-185']"--}}
                        {{--                             data-y="center" data-voffset="['-110','-110','-110','-135']"--}}
                        {{--                             data-start="1000"--}}
                        {{--                             data-transform_in="x:[-300%];opacity:0;s:500;"--}}
                        {{--                             data-transform_idle="opacity:0.2;s:500;"></div>--}}

                        {{--                        <div class="tp-caption text-color-light font-weight-normal"--}}
                        {{--                             data-x="center"--}}
                        {{--                             data-y="center" data-voffset="['-110','-110','-110','-135']"--}}
                        {{--                             data-start="700"--}}
                        {{--                             data-fontsize="['22','22','22','40']"--}}
                        {{--                             data-lineheight="['25','25','25','45']"--}}
                        {{--                             data-transform_in="y:[-50%];opacity:0;s:500;">ثبت لحظات ناب بهترین</div>--}}

                        {{--                        <div class="tp-caption"--}}
                        {{--                             data-x="center" data-hoffset="['115','115','115','185']"--}}
                        {{--                             data-y="center" data-voffset="['-110','-110','-110','-135']"--}}
                        {{--                             data-start="1000"--}}
                        {{--                             data-transform_in="x:[300%];opacity:0;s:500;"--}}
                        {{--                             data-transform_idle="opacity:0.2;s:500;"></div>--}}

                        {{--                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2 mt-2 mb-2"--}}
                        {{--                             data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
                        {{--                             data-x="center"--}}
                        {{--                             data-y="center" data-voffset="['-40','-40','-40','-65']"--}}
                        {{--                             data-fontsize="['50','50','50','90']"--}}
                        {{--                             data-lineheight="['55','55','55','95']">روز زندگیتون رو به ما بسپارید</div>--}}



{{--                        <a class="tp-caption btn btn-primary font-weight-bold"--}}
{{--                           href="#"--}}
{{--                           data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
{{--                           data-x="center"--}}
{{--                           data-y="center" data-voffset="['65','65','65','210']"--}}
{{--                           data-paddingtop="['15','15','15','30']"--}}
{{--                           data-paddingbottom="['15','15','15','30']"--}}
{{--                           data-paddingleft="['33','33','33','50']"--}}
{{--                           data-paddingright="['33','33','33','50']"--}}
{{--                           data-fontsize="['20','20','20','35']"--}}
{{--                           data-lineheight="['20','20','20','25']">رزرو<i class="fas fa-arrow-right ml-1"></i></a>--}}

                    </li>
                </ul>
            </div>
        </div>
        <div id="section-main" class="container">

            <div class="row text-center pt-3">
                <div class="col-md-10 mx-md-auto">
                    <h1 style="direction: rtl;font-family: Erfan" class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                        <span>گروه هنری نرگس </span>
                        <span class="word-rotator-words bg-dark">
									<b class="is-visible">صمیمانه</b>
									<b>پر انرژی</b>

								</span>
                        <span> در خدمت شماست</span>
                    </h1>

                </div>
            </div>

        </div>

        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <div class="home-concept mt-5">
                <div class="container">

                    <div class="row text-center">
                        <div class="col-lg-2 ml-lg-auto">
                            <div class="process-image">
                                <img src="/photoo site/web/date-icon.webp" alt="" />
                                <strong style="font-family: Erfan;">تاریخ مراسم شما</strong>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="process-image process-image-on-middle">
                                <img src="/photoo site/web/time-icon.webp" alt="" />
                                <strong style="font-family: Erfan;">ساعتش؟</strong>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="process-image">
                                <img src="/photoo site/web/loction-icon.webp" alt="" />
                                <strong style="font-family: Erfan;">آدرس</strong>
                            </div>
                        </div>
                        <div class="col-lg-4 ml-lg-auto">
                            <div class="project-image">
                                <div id="fcSlideshow" class="fc-slideshow">
                                    <ul class="fc-slides">

                                        <li><a href="portfolio-single-wide-slider.html"><img class="img-responsive" src="/photoo site/web/sabt sefaresh-icon.webp" alt="" /></a></li>

                                    </ul>
                                </div>
                                <strong style="font-family: Erfan;"  class="our-work">ثبت سفارش</strong>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <hr class="solid my-5">
                    <h4 class="text-center"> نمونه کار های ما</h4>
                </div>
            </div>
            <div class="image-gallery sort-destination full-width">
                @foreach($categories as $item)
                <div class="isotope-item">
                    <div class="image-gallery-item">
                        <a href="/portfolios#{{$item->slug}}" class="text-center">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders" class="text-center">
                                    <span class="text-black">{{str_replace("portfolio_category|","",$item->title)}}</span>
									<span class="thumb-info-wrapper">
										<img src="/uploads/images/tag/{{$item->image}}" class="img-fluid" alt="{{$item->alt_image}}">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">{{str_replace("portfolio_category|","",$item->title)}}</span>

										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
										</span>
									</span>
								</span>
                        </a>
                    </div>
                </div>
                @endforeach
{{--                <div class="isotope-item">--}}
{{--                    <div class="image-gallery-item text-center">--}}
{{--                        <a href="portfolio-single-wide-slider.html" class="text-center">--}}
{{--                            <span class="text-black" >عکاسی عقد</span>--}}

{{--                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">--}}
{{--									<span class="thumb-info-wrapper">--}}
{{--										<img src="/photoo site/k3.jpg" class="img-fluid" alt="">--}}
{{--										<span class="thumb-info-title">--}}

{{--											<span class="thumb-info-type">عکاسی عقد</span>--}}
{{--										</span>--}}
{{--										<span class="thumb-info-action">--}}
{{--											<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>--}}
{{--										</span>--}}
{{--									</span>--}}
{{--								</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="isotope-item">--}}
{{--                    <div class="image-gallery-item text-center">--}}
{{--                        <a href="portfolio-single-wide-slider.html" class="text-center">--}}
{{--                            <span class="text-black">عکاسی فرمالیته</span>--}}

{{--                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">--}}
{{--									<span class="thumb-info-wrapper">--}}
{{--										<img src="/photoo site/khn.jpg" class="img-fluid" alt="">--}}
{{--										<span class="thumb-info-title">--}}
{{--											<span class="thumb-info-type">عکاسی فرمالیته</span>--}}
{{--										</span>--}}
{{--										<span class="thumb-info-action">--}}
{{--											<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>--}}
{{--										</span>--}}
{{--									</span>--}}
{{--								</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="isotope-item">--}}
{{--                    <div class="image-gallery-item text-center">--}}
{{--                        <a href="portfolio-single-wide-slider.html">--}}
{{--                            <span class="text-black">عکاسی منزل</span>--}}
{{--								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">--}}
{{--									<span class="thumb-info-wrapper">--}}
{{--										<img src="/photoo site/khome.JPG" class="img-fluid" alt="">--}}
{{--										<span class="thumb-info-title">--}}

{{--											<span class="thumb-info-type">عکاسی منزل</span>--}}
{{--										</span>--}}
{{--										<span class="thumb-info-action">--}}
{{--											<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>--}}
{{--										</span>--}}
{{--									</span>--}}
{{--								</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="isotope-item">--}}
{{--                    <div class="image-gallery-item text-center">--}}
{{--                        <a href="portfolio-single-wide-slider.html" class="text-center">--}}
{{--                            <span class="text-black">عروسانه</span>--}}

{{--                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">--}}
{{--									<span class="thumb-info-wrapper">--}}
{{--										<img src="/photoo site/2a.jpg" class="img-fluid" alt="">--}}
{{--										<span class="thumb-info-title">--}}

{{--											<span class="thumb-info-type">عروسانه</span>--}}
{{--										</span>--}}
{{--										<span class="thumb-info-action">--}}
{{--											<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>--}}
{{--										</span>--}}
{{--									</span>--}}
{{--								</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="row mt-5">
                <div class="col">
                    <h4 class="text-center">چرا باید ما رو انتخاب کنید؟</h4>

                    <div class="process process-vertical py-4" dir="rtl">
                        <div dir="rtl" class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content">۱</strong>
                            </div>
                            <div dir="rtl" class="process-step-content">
                                <p class="mb-0 text-right">مشاوره رایگان در تمام زمینه های مراسم، مثل انتخاب لباس و انتخاب محضر ، انتخاب باغ </p>
                            </div>
                        </div>
                        <div dir="rtl" class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content">۲</strong>
                            </div>
                            <div dir="rtl" class="process-step-content">
                                <p class="mb-0 text-right">قیمت مناسب ، به دلیل حذف واسطه ها، و ارايه خدمات با کیفیت.</p>
                            </div>
                        </div>
                        <div dir="rtl" class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                            <div  class="process-step-circle">
                                <strong class="process-step-circle-content">۳</strong>
                            </div>
                            <div dir="rtl" class="process-step-content">
                                <p class="mb-0 text-right">تمامی اعضای گروه هنری نرگس خانم میباشند ، و شما میتونید با خیاله راحت تصویر برداری مراسمتون رو به ما بسپارید</p>
                            </div>
                        </div>
                        <div dir="rtl" class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content">۴</strong>
                            </div>
                            <div dir="rtl" class="process-step-content">
                                <p class="mb-0 text-right" >تحویل تمام عکس ها و فیلم ها به صورت آنلاین و  حضوری در محل شما به انتخاب شما </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>









        </div>


            <section class="section section-default section-footer">
                <div class="container">
                    <div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">

                        <div class="col-lg-12" style="">
                            <h2 class="font-weight-normal text-6 mb-4" ><strong class="font-weight-extra-bold">نظرات عروس هام </strong> </h2>
                            <div class="row">
                                <div class="owl-carousel owl-theme dots-title dots-title-pos-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true}">
                                    <div>
                                        <div class="col">
                                            <div class="testimonial testimonial-primary">
                                                <blockquote>
                                                    <p class="mb-0" style="text-align: right;direction: rtl">وای عزیزم عکس هامون خیلی عالی شدم ، واقعا ازت ممنونم هم خودم و هم همسرم ،‌ایشالا برای عکاسی های بعدی هم مزاحمت میشیم.</p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down"></div>
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-thumbnail">
                                                        <img src="/images/bridal-icon.png" class="rounded-circle" alt="">
                                                    </div>
                                                    <p><strong>زینب</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col">
                                            <div class="testimonial testimonial-primary">
                                                <blockquote>
                                                    <p class="mb-0" style="text-align: right;direction: rtl">عزیزم واقعا عالی بود هم ژست و هم ادیت ها ، کلا انرژی خوب تو باعث شد عکس هامون فوق العاده بشن. ممنونم</p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down"></div>
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-thumbnail">
                                                        <img src="/images/bridal-icon.png" class="rounded-circle" alt="">
                                                    </div>
                                                    <p><strong>میترا</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection
