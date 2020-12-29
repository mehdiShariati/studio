@extends("layout.main_layout")


@section("content")
{{--<div id="fh5co-contact-section" style="margin-top:6em;">--}}
{{--			<div class="container">--}}
{{--				<div class="row">--}}
{{--					<div class="col-md-3 col-md-push-1 animate-box">--}}
{{--                        <h3 class="text-center">تماس با ما </h3>--}}
{{--                        <p dir="rtl">در صورتی که نیاز به مشاوره دارید ، فرم  را پر کنید تا در سریع ترین زمان ممکن با شما تماس گرفته شود.</p>--}}
{{--						<ul class="contact-info">--}}
{{--							<li><i class="icon-location-pin"></i>تهران ، شهرک راه آهن ،سروستان دهم ، پلاک ۷۲، و۲</li>--}}
{{--							<li><i class="icon-phone2"></i>+982156348466 </li>--}}
{{--							<li><i class="icon-mail"></i><a href="#">info@yoursite.com</a></li>--}}
{{--							<li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>--}}
{{--						</ul>--}}
{{--					</div>--}}
{{--					<div class="col-md-7 col-md-push-1 animate-box">--}}
{{--						<div class="row">--}}
{{--							<div class="col-md-6">--}}
{{--                                <form action="/contact" method="POST">--}}
{{--                                @csrf--}}
{{--								<div class="form-group">--}}
{{--									<input type="text" class="form-control" name="full_name" placeholder="نام و نام خانوادگی">--}}
{{--								</div>--}}
{{--							</div>--}}
{{--							<div class="col-md-6">--}}
{{--								<div class="form-group">--}}
{{--									<input type="text" name="phoneNumber" class="form-control" placeholder="شماره موبایل">--}}
{{--								</div>--}}
{{--							</div>--}}
{{--							<div class="col-md-12">--}}
{{--								<div class="form-group">--}}
{{--									<textarea name="description" class="form-control" id="" cols="30" rows="7" placeholder="ضمینه مشاوره"></textarea>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--							<div class="col-md-12">--}}
{{--								<div class="form-group text-center">--}}
{{--									<input type="submit" value="ارسال درخواست تماس" class="btn btn-primary">--}}
{{--                                </div>--}}
{{--                                </form>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
<style>
    #container_contact{
        margin-top: 60px;
    }

    html #header.header-transparent{
        position: relative;
        background-color: #6c6b6b !important;

    }
</style>
<div id="container_contact" class="container" dir="rtl">

    <div class="row py-4">
        <div class="col-lg-6">

            <div class="overflow-hidden mb-1">
                <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation text-center" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">تماس با ما</strong> </h2>
            </div>
            <div class="overflow-hidden mb-4 pb-3">
                <p class="mb-0 appear-animation text-center" data-appear-animation="maskUp" data-appear-animation-delay="400">فرم زیر  را پر کنید تا با شما تماس بگیریم</p>
            </div>

            <form id="contactForm" class="contact-form" action="php/contact-form.php" method="POST">
                <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                </div>

                <div class="form-row">
                    <div class="form-group col-lg-6 text-right">
                        <label class="required font-weight-bold text-dark text-2">نام</label>
                        <input type="text" value="" data-msg-required="لطفا نام خود را وارد کنید" maxlength="100" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group col-lg-6 text-right">
                        <label class="required font-weight-bold text-dark text-2">شماره تماس</label>
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col text-right">
                        <label class="font-weight-bold text-dark text-2">موضوع</label>
                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col text-right" dir="rtl">
                        <label class="required font-weight-bold text-dark text-2 text-center">توضیحات</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" id="message" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col text-center">
                        <input type="submit" value="ثبت" style="background-color: #FFB5A7" class="btn btn-lg text-black  pr-5 pl-5" data-loading-text="Loading...">
                    </div>
                </div>
            </form>

        </div>
        <div class="col-lg-6">

            <h4 class="pt-5 text-center">نیاز به مشاوره دارید؟</h4>
            <p class="lead mb-0 text-4 text-center">خوش حال میشیم بتونیم کمکتون کنیم.</p>

        </div>

    </div>

</div>
@endsection
