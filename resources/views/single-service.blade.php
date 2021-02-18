@extends('layouts.app')

@section('content')
<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-gray-200" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
    <div class="container">
        <div class="row row-10 align-items-center">
            <div class="col-md-7 text-left">
                <div class="breadcrumbs-custom-title">Single Service</div>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li class="active">Single Service</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section-lg bg-default section-decoration-1 section-decoration-1-mode">
    <div class="container">
        <div class="row row-50">
            <div class="col-md-5 col-lg-4 order-md-2">
                <ul class="aside-list">
                    <li><a href="#">Web design & Branding</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Full Optimization</a></li>
                    <li><a href="#">Research & Strategy</a></li>
                    <li><a href="#">Management & Marketing</a></li>
                    <li><a href="#">Free Support</a></li>
                </ul>
            </div>
            <div class="col-md-7 col-lg-8 order-md-1">
                <div class="text-center"><img src="images/single-service-1-499x404.png" alt="" width="499" height="404" />
                </div>
                <div class="row row-30">
                    <div class="col-12">
                        <h6>Providing efficient graphic design services to customers worldwide</h6>
                        <p>Our award-winning graphic design shows up in logos, business cards, infographics, tradeshow booths, outdoor signage, way-finding signage, vehicle wraps and more. It can also be found in the digital marketing world. We offer graphic design for Application and Website’s User Interface ( UI ), PSDs, eBooks, Twitter backgrounds, Facebook cover photos, PowerPoint slides, HTML email templates and beyond.</p>
                        <p>Our graphic design services can be found in videos from video entry and exit slides, lower thirds and 2D and 3D animations.</p>
                    </div>
                    <div class="col-12">
                        <h6>Our graphic design services include:</h6>
                        <ul class="list-marked list-md-marked">
                            <li>
                                <p class="font-weight-medium text-gray-800">Print, Brand & Digital Design</p>
                                <p>The experience of interacting with a printed piece of communication is a powerful and lasting way to convey your message. Print communications take several shapes and sizes.</p>
                            </li>
                            <li>
                                <p class="font-weight-medium text-gray-800">Brand & Logo Design</p>
                                <p>Brands are a powerful thing, comprised from the entire experience a person has with your organization. It is more than a logo or visual identity, however, your logo and identity design are the most recognizable elements of your brand.</p>
                            </li>
                            <li>
                                <p class="font-weight-medium text-gray-800">Website & UI/UX Design</p>
                                <p>Every website or application’s sole purpose is user interaction and engagement. Through our methodology, we are able to create a strategy and visual style that is unique and connects with your users.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <h6>We are ready to meet your needs.</h6>
                        <p>We help our clients thrive in a time of noise and distraction by creating compelling brand, print, and web experiences that compels people to act. We get behind their mission and help tell their story through strategy and creativity.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--section counter-->
<section class="section-md bg-secondary">
    <div class="container">
        <div class="row row-50 align-items-lg-center justify-content-lg-between">
            <div class="col-lg-6 col-xl-5 pl-lg-5">
                <h2>Why choose our company for your projects?</h2>
                <p>We are a team of professional and enthusiastic people, who like what they do and are always in the process of growing and improving their skills.</p><a class="button button-default-outline" href="services.html">Get a Quote</a>
            </div>
            <div class="col-lg-6">
                <div class="row row-30">
                    <div class="col-sm-6">
                        <!-- Counter-->
                        <div class="box-counter-classic">
                            <div class="box-counter-inner">
                                <div class="counter heading-1">1880</div>
                                <div class="counter-postfix heading-1">+</div>
                            </div>
                            <p>Projects completed by our team of web designers and developers</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Counter-->
                        <div class="box-counter-classic">
                            <div class="box-counter-inner">
                                <div class="counter heading-1">56</div>
                            </div>
                            <p>Experts in web design, branding, and digital marketing solutions.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Counter-->
                        <div class="box-counter-classic">
                            <div class="box-counter-inner">
                                <div class="counter heading-1">2000</div>
                                <div class="counter-postfix heading-1">+</div>
                            </div>
                            <p>Customers who were satisfied with our work.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Counter-->
                        <div class="box-counter-classic">
                            <div class="box-counter-inner">
                                <div class="counter heading-1">100</div>
                                <div class="counter-postfix heading-1">%</div>
                            </div>
                            <p>Positive reviews sent by our first-time and regular customers.</p>
                        </div>
                    </div>
                </div>
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
<!-- Subscribe section -->
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