@extends('layouts.app')

@section('content')
<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-gray-200" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
    <div class="container">
        <div class="row row-10 align-items-center">
            <div class="col-md-7 text-left">
                <div class="breadcrumbs-custom-title">Contacts</div>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contacts</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Contact form-->
<section class="section-lg bg-default section-decoration-2">
    <div class="container">
        <div class="row row-30 align-items-lg-center justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="animate-box">
                    <div class="wow slideInLeft" data-wow-delay="0.2s"><img src="images/home-1-499x550.png" alt="" width="499" height="550" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box-contact-form wow fadeIn" data-wow-delay="0.2s">
                    <h2>Get in touch with our team</h2>
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                        <div class="row row-20">
                            <div class="col-12">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                                    <label class="form-label" for="contact-name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
                                    <label class="form-label" for="contact-phone">Phone</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-message">Your Message</label>
                                    <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="button button-sm button-primary" type="submit">send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Subscribe section-->
<section class="section-md bg-gray-100 section-decoration-1" id="subscride">
    <div class="container">
        <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-lg-7 text-center">
                <div class="block-sm animate-box">
                    <h2 class="wow fadeInDown">Subscribe to our news and regular updates</h2>
                </div>
            </div>
            <div class="col-md-7 col-lg-6">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap">
                            <input class="form-input form-input-shadow" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">
                            <label class="form-label" for="subscribe-form-email">Your E-mail</label>
                        </div>
                        <div class="form-button">
                            <button class="button button-primary button-lg button-shadow" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection