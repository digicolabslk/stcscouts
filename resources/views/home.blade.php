@extends('layouts.main_template')

@section('body_content')
<div role="main" class="main">
    <section class="section border-0 m-0" style="background-image: url(images/front_slide.jpg); background-size:
				cover; background-position: center; height: 542px;">
        <div class="container h-100">
            <div class="row align-items-end h-100">
                <div class="col">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                        <h1 class="position-relative text-color-light text-5 line-height-5
									font-weight-semibold px-4 mb-2 appear-animation"
                            data-appear-animation="fadeInDownShorterPlus"
                            data-plugin-options="{'minWindowWidth': 0}">
										<span class="position-absolute right-100pct top-50pct transform3dy-n50">
											<img src="img/slides/slide-title-border-light.png"
                                                 class="w-auto appear-animation"
                                                 data-appear-animation="fadeInRightShorter"
                                                 data-appear-animation-delay="250"
                                                 data-plugin-options="{'minWindowWidth': 0}" alt=""/>
										</span>

                            WELCOME
                            <span class="position-absolute left-100pct top-50pct transform3dy-n50">
											<img src="img/slides/slide-title-border-light.png"
                                                 class="w-auto appear-animation"
                                                 data-appear-animation="fadeInLeftShorter"
                                                 data-appear-animation-delay="250"
                                                 data-plugin-options="{'minWindowWidth': 0}" alt=""/>
										</span>
                        </h1>
                        <h1 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation"
                            data-appear-animation="bounceIn" data-appear-animation-delay="1000"
                            data-plugin-options="{'minWindowWidth': 0}">STC SCOUTS</h1>


                        <p class="text-4 text-color-light font-weight-light mb-0" style="text-align: center;
                            "
                           data-appear-animation="fadeInUp"
                           data-plugin-options="{'startDelay': 3000, 'minWindowWidth': 0}">
                            The Official Web Portal of the 16<sup>th</sup> Colombo Scout Group of S. Thomas'
                            College, Mount Lavinia
                        </p>

                        {{--									<p class="text-4 text-color-light font-weight-light mb-0"--}}
                        {{--									   data-plugin-animated-letters data-plugin-options="{'startDelay': 2000,--}}
                        {{--									   'minWindowWidth': 0}">--}}
                        {{--										The Official Web Portal of the 16<sup>th</sup> Colombo Scout Group of S. Thomas' College, Mount Lavinia--}}
                        {{--									</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--        <div class="home-intro light border border-bottom-0 mb-0">--}}
    {{--            <div class="container">--}}

    {{--                <div class="row align-items-center">--}}
    {{--                    <div class="col-lg-8">--}}
    {{--                        <p class="font-weight-bold text-color-dark">--}}
    {{--                            The fastest way to grow your business with the leader in <span--}}
    {{--                                    class="highlighted-word highlighted-word-animation-1 text-color-primary font-weight-semibold text-5">Technology</span>--}}
    {{--                            <span>Check out our options and features included.</span>--}}
    {{--                        </p>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-4">--}}
    {{--                        <div class="get-started text-start text-lg-end">--}}
    {{--                            <a href="#" class="btn btn-primary btn-lg text-3 font-weight-semibold btn-py-2 px-4">Get--}}
    {{--                                Started Now</a>--}}
    {{--                            <div class="learn-more">or <a href="index.html" class="font-weight-bold">learn more.</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--            </div>--}}
    {{--        </div>--}}

    <div class="container py-5" style="background-image: url(images/flames.jpg);  background-size: cover;
        background-position: center;">
        <div class="row text-center py-3">
            <div class="col-md-10 mx-md-auto">
                <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation"
                    data-appear-animation="fadeInUpShorter">
                    <span>Are you a </span>
                    <span class="word-rotator-words bg-primary">
									<b class="is-visible">Smart</b>
									<b>Courteous</b>
									<b>Obedient</b>
									<b>Useful</b>
									<b>Trustworthy</b>
								</span>
                    <span> Citizen? </span>
                </h1>

                <p class="text-dark lead appear-animation mb-0" data-appear-animation="fadeInUpShorter"
                   data-appear-animation-delay="300">
                    <br/>
                    Quite apart from all your books at home, school and the usual routine in your daily life
                    including surfing the net and playing computer games, here is a chance for you to try something
                    new in your life – a new avenue awaits you... Something which you have probably never dreamed
                    of...

                    <br/><br/>

                    Started in Sri Lanka with the prime objective of making "better use" of the free time of
                    boys, Scouting has grown to be a worldwide movement. The World Scout Movement is now the
                    biggest youth body in the world comprising more than 50 million members, boasting a history
                    of over a centenary, since its inception in 1907 as the brainchild of Lord Robert Baden-Powell.
                    <br/><br/>
                    Scouting is a worldwide movement for youth aimed at producing community-minded, independent
                    and abled individuals and young leaders who see beyond sectarianism and narrow self-interest in
                    the ordering of their lives and influencing the lives of people around them.
                    <br/><br/>

                    Among the many Scout Troops in Sri Lanka, the 16<sup>th</sup> Colombo Scout Group of S. Thomas’
                    College, Mount Lavinia has excelled exceptionally well for over 100 years, and earning the reputation as "The Model Scout Group" on the island.

                </p>
            </div>
        </div>
    </div>

    <section class="section section-height-5 bg-primary border-0 pt-5 m-0 appear-animation"
             data-appear-animation="fadeIn">
        <div class="container">
            <div class="row mt-4 mt-lg-5">
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter"
                     data-appear-animation-delay="200">
                    <div class="feature-box">
                        <div class="feature-box-icon feature-box-icon-large bg-light mt-1">
                            <i class="icons icon-support text-color-primary text-6"></i>
                        </div>
                        <div class="feature-box-info">
                            <h2 class="text-color-light font-weight-bold text-4 line-height-5 mb-1">CUSTOMER
                                SUPPORT</h2>
                            <p class="text-color-light opacity-7">Lorem ipsum dolor sit <span
                                        class="alternative-font text-color-light">amet</span>, consectetur
                                adipiscing elit. Praesent tincidunt pretium vulputate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="feature-box">
                        <div class="feature-box-icon feature-box-icon-large bg-light mt-1">
                            <i class="icons icon-layers text-color-primary text-6"></i>
                        </div>
                        <div class="feature-box-info">
                            <h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">SLIDERS</h2>
                            <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Sed eget pretium purus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="200">
                    <div class="feature-box">
                        <div class="feature-box-icon feature-box-icon-large bg-light mt-1">
                            <i class="icons icon-menu text-color-primary text-5"></i>
                        </div>
                        <div class="feature-box-info">
                            <h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">BUTTONS</h2>
                            <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Etiam vel magna fringilla.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-4">
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter"
                     data-appear-animation-delay="200">
                    <div class="feature-box">
                        <div class="feature-box-icon feature-box-icon-large bg-light mt-1">
                            <i class="icons icon-doc text-color-primary text-5"></i>
                        </div>
                        <div class="feature-box-info">
                            <h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">HTML5 / CSS3 /
                                JS</h2>
                            <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Duis dignissim ante eleifend.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="feature-box">
                        <div class="feature-box-icon feature-box-icon-large bg-light mt-1">
                            <i class="icons icon-user text-color-primary text-5"></i>
                        </div>
                        <div class="feature-box-info">
                            <h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">ICONS</h2>
                            <p class="text-color-light opacity-7">Lorem ipsum dolor sit <span
                                        class="alternative-font text-color-light">amet</span>, consectetur
                                adipiscing elit. Praesent consequat pharetra massa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="200">
                    <div class="feature-box">
                        <div class="feature-box-icon feature-box-icon-large bg-light mt-1">
                            <i class="icons icon-screen-desktop text-color-primary text-6"></i>
                        </div>
                        <div class="feature-box-info">
                            <h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">LIGHTBOX</h2>
                            <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Nulla condimentum aliquet erat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-color-grey border-0 pt-0 pt-md-5 m-0">
        <div class="container">
            <div class="row align-items-center justify-content-center pb-4 pb-lg-0">
                <div class="col-lg-6 order-2 order-lg-1 pe-5 pt-4 pt-lg-0 mt-md-5 mt-lg-0 appear-animation"
                     data-appear-animation="fadeInRightShorter">
                    <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Who</strong>
                        We Are</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa
                        enim. Nullam id valorem ipsum dolor sit amet, consectetur adipiscinorem ipsum dolor sit
                        amet, consectetur adipiscing elit.</p>
                    <p class="pb-2 mb-4">Phasellus blandit massa enim. Nullam id varius elit. blandit massa
                        enimariusius.</p>
                    <a href="#" class="btn btn-dark font-weight-semibold btn-py-2 px-5">Our History</a>
                </div>
                <div class="col-9 col-lg-6 order-1 order-lg-2 scale-6 pb-5 pb-lg-0 mt-0 mt-md-4 mb-5 mb-lg-0">
                    <img class="img-fluid appear-animation" src="img/desktop-device-1.png"
                         data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300"
                         data-plugin-options="{'accY': -400}" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="featured-boxes py-5 mt-5 mb-4">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="featured-box featured-box-primary featured-box-effect-1">
                        <div class="box-content">
                            <i class="icon-featured icons icon-people"></i>
                            <h3 class="text-color-primary font-weight-bold text-3 mb-2 mt-3">Loved by Customers</h3>
                            <p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p><a href="/" class="text-dark learn-more font-weight-bold text-2">VIEW MORE <i
                                            class="fas fa-chevron-right ms-2"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="featured-box featured-box-dark featured-box-effect-1">
                        <div class="box-content">
                            <i class="icon-featured icons icon-docs"></i>
                            <h3 class="font-weight-bold text-3 mb-2 mt-3">Well Documented</h3>
                            <p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p><a href="/" class="text-dark learn-more font-weight-bold text-2">VIEW MORE <i
                                            class="fas fa-chevron-right ms-2"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="featured-box featured-box-primary featured-box-effect-1">
                        <div class="box-content">
                            <i class="icon-featured icons icon-trophy"></i>
                            <h3 class="text-color-primary font-weight-bold text-3 mb-2 mt-3">Winner</h3>
                            <p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p><a href="/" class="text-dark learn-more font-weight-bold text-2">VIEW MORE <i
                                            class="fas fa-chevron-right ms-2"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="featured-box featured-box-dark featured-box-effect-1">
                        <div class="box-content">
                            <i class="icon-featured icons icon-equalizer"></i>
                            <h3 class="font-weight-bold text-3 mb-2 mt-3">Customizable</h3>
                            <p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p><a href="/" class="text-dark learn-more font-weight-bold text-2">VIEW MORE <i
                                            class="fas fa-chevron-right ms-2"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section section-height-3 section-background border-0 m-0 appear-animation"
             data-appear-animation="fadeIn"
             style="background-image: url(img/parallax/parallax-10.jpg); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col appear-animation" data-appear-animation="fadeInUpShorter"
                     data-appear-animation-delay="200">

                    <div class="owl-carousel owl-theme nav-bottom rounded-nav"
                         data-plugin-options="{'items': 1, 'loop': false}">
                        <div>
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                <div class="testimonial-author">
                                    <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <blockquote>
                                    <p class="text-color-dark text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at,
                                        interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non
                                        consectetur sed, pharetra nec ex.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                <div class="testimonial-author">
                                    <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <blockquote>
                                    <p class="text-color-dark text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at,
                                        interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row pt-5 mt-4">
            <div class="col">
                <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Latest</strong>
                    Posts</h2>
            </div>
        </div>
        <div class="row recent-posts pb-5 mb-4">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <article>
                    <div class="row">
                        <div class="col-auto pe-0">
                            <div class="date">
                                <span class="day text-color-dark font-weight-extra-bold">15</span>
                                <span class="month text-1">JAN</span>
                            </div>
                        </div>
                        <div class="col ps-1">
                            <h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum
                                    dolor sit amet, consectetur</a></h4>
                            <p class="line-height-5 pe-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</p>
                            <a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i
                                        class="fas fa-chevron-right text-1 ms-1"></i></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <article>
                    <div class="row">
                        <div class="col-auto pe-0">
                            <div class="date">
                                <span class="day text-color-dark font-weight-extra-bold">14</span>
                                <span class="month text-1">JAN</span>
                            </div>
                        </div>
                        <div class="col ps-1">
                            <h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum
                                    dolor sit amet, consectetur</a></h4>
                            <p class="line-height-5 pe-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</p>
                            <a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i
                                        class="fas fa-chevron-right text-1 ms-1"></i></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <article>
                    <div class="row">
                        <div class="col-auto pe-0">
                            <div class="date">
                                <span class="day text-color-dark font-weight-extra-bold">13</span>
                                <span class="month text-1">JAN</span>
                            </div>
                        </div>
                        <div class="col ps-1">
                            <h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum
                                    dolor sit amet, consectetur</a></h4>
                            <p class="line-height-5 pe-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</p>
                            <a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i
                                        class="fas fa-chevron-right text-1 ms-1"></i></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-3">
                <article>
                    <div class="row">
                        <div class="col-auto pe-0">
                            <div class="date">
                                <span class="day text-color-dark font-weight-extra-bold">12</span>
                                <span class="month text-1">JAN</span>
                            </div>
                        </div>
                        <div class="col ps-1">
                            <h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum
                                    dolor sit amet, consectetur</a></h4>
                            <p class="line-height-5 pe-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</p>
                            <a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i
                                        class="fas fa-chevron-right text-1 ms-1"></i></a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
@endsection