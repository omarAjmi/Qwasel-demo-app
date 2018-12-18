@extends('layouts.app')
@section('content')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(&quot;/images/img_bg_1.jpg&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="" data-thumb-alt="">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 col-xs-12 col-md-pull-1 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h2>You only have to know one thing</h2>
                                        <h1>Best Online Learning System</h1>
                                        <p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary btn-lg popup-vimeo"><span class="icon"><i class="icon-play3"></i></span> Start Learning Now!</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(&quot;/images/img_bg_5.jpg&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" data-thumb-alt="" class="flex-active-slide">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 col-xs-12 col-md-pull-1 slider-text animated fadeInUp">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h2>You only have to know one thing</h2>
                                        <h1>Online Free Course</h1>
                                        <p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary btn-lg popup-vimeo"><span class="icon"><i class="icon-play3"></i></span> Start Learning Now!</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(&quot;/images/img_bg_3.jpg&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" data-thumb-alt="">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 col-xs-12 col-md-pull-1 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h2>You only have to know one thing</h2>
                                        <h1>Education is a Key to Success</h1>
                                        <p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary btn-lg popup-vimeo"><span class="icon"><i class="icon-play3"></i></span> Start Leaning Now!</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(&quot;/images/img_bg_4.jpg&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" data-thumb-alt="">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 col-xs-12 col-md-pull-1 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h2>You only have to know one thing</h2>
                                        <h1>Best Online Learning Center</h1>
                                        <p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary btn-lg popup-vimeo"><span class="icon"><i class="icon-play3"></i></span> Start Learning Now!</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ol class="flex-control-nav flex-control-paging"><li><a href="#" class="">1</a></li><li><a href="#" class="flex-active">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
    </aside>

    <div class="colorlib-search">
        <div class="container">
            <div class="row">
                <div class="col-md-12 search-wrap">
                    <div class="search-wrap-2">
                        <form method="post" class="colorlib-form">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <!-- <label for="search">Search Course</label> -->
                                        <div class="form-field">
                                            <input type="text" id="search" class="form-control" placeholder="Keyword search">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <!-- <label for="course">Category Course</label> -->
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="people" id="people" class="form-control">
                                                <option value="#">WordPress</option>
                                                <option value="#">HTML/CSS</option>
                                                <option value="#">PHP</option>
                                                <option value="#">JavaScript</option>
                                                <option value="#">Python</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <!-- <label for="difficulty">Difficulty</label> -->
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="people" id="people" class="form-control">
                                                <option value="#">Difficulty</option>
                                                <option value="#">Beginner</option>
                                                <option value="#">Intermediate</option>
                                                <option value="#">Advance</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <input type="submit" name="submit" id="submit" value="Search course" class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 services-wrap">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 text-center animate-box fadeInUp animated-fast">
                            <a href="services.html" class="services">
									<span class="icon">
										<i class="flaticon-desktop"></i>
									</span>
                                <div class="desc">
                                    <h3>Web <br>Development</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-6 text-center animate-box fadeInUp animated-fast">
                            <a href="services.html" class="services">
									<span class="icon">
										<i class="flaticon-smartphone"></i>
									</span>
                                <div class="desc">
                                    <h3>Mobile <br>Development</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-6 text-center animate-box fadeInUp animated-fast">
                            <a href="services.html" class="services">
									<span class="icon">
										<i class="flaticon-laboratory"></i>
									</span>
                                <div class="desc">
                                    <h3>Science <br>Data</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-6 text-center animate-box fadeInUp animated-fast">
                            <a href="services.html" class="services">
									<span class="icon">
										<i class="flaticon-computer-graphic"></i>
									</span>
                                <div class="desc">
                                    <h3>Graphic <br>Design</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-6 text-center animate-box fadeInUp animated-fast">
                            <a href="services.html" class="services">
									<span class="icon">
										<i class="flaticon-video-player"></i>
									</span>
                                <div class="desc">
                                    <h3>Media <br>Courses</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-6 text-center animate-box fadeInUp animated-fast">
                            <a href="services.html" class="services">
									<span class="icon">
										<i class="flaticon-layers"></i>
									</span>
                                <div class="desc">
                                    <h3>User <br>Interface</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center animate-box fadeInUp animated-fast">
                    <p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary btn-outline btn-lg btn-discover popup-vimeo"><span class="icon"><i class="icon-play3"></i></span>Discover Courses</a></p>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="colorlib-classes">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 colorlib-heading center-heading text-center animate-box fadeInUp animated-fast">
                    <h1 class="heading-big">Popular Online Courses</h1>
                    <h2>Popular Online Courses</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box fadeInUp animated-fast">
                    <div class="owl-carousel owl-theme owl-center owl-loaded owl-text-select-on">
                        <div class="owl-stage-outer owl-height" style="height: 442px;">
                            <div class="owl-stage" style="transition: all 0s ease 0s; width: 2375px; transform: translate3d(237.5px, 0px, 0px);">
                                <div class="owl-item active center" style="width: 475px; margin-right: 0px;">
                                    <div class="item">
                                        <div class="classes">
                                            <div class="classes-img" style="background-image: url(/images/classes-1.jpg);">
                                            </div>
                                            <div class="wrap">
                                                <div class="desc">
                                                    <span class="teacher">David Clarson</span>
                                                    <h3><a href="#">Developing Mobile Apps Using Ruby on Rails</a></h3>
                                                </div>
                                                <div class="pricing">
                                                    <p><span class="price">$150</span> <span class="price old-price">$250</span> <span class="more"><a href="#"><i class="icon-link"></i></a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 475px; margin-right: 0px;">
                                    <div class="item">
                                        <div class="classes">
                                            <div class="classes-img" style="background-image: url(/images/classes-2.jpg);">
                                            </div>
                                            <div class="wrap">
                                                <div class="desc">
                                                    <span class="teacher">David Clarson</span>
                                                    <h3><a href="#">Developing Mobile Apps Using Ruby on Rails</a></h3>
                                                </div>
                                                <div class="pricing">
                                                    <p><span class="price">$150</span> <span class="price old-price">$250</span> <span class="more"><a href="#"><i class="icon-link"></i></a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 475px; margin-right: 0px;">
                                    <div class="item">
                                        <div class="classes">
                                            <div class="classes-img" style="background-image: url(/images/classes-3.jpg);">
                                            </div>
                                            <div class="wrap">
                                                <div class="desc">
                                                    <span class="teacher">David Clarson</span>
                                                    <h3><a href="#">Developing Mobile Apps Using Ruby on Rails</a></h3>
                                                </div>
                                                <div class="pricing">
                                                    <p><span class="price">$150</span> <span class="price old-price">$250</span> <span class="more"><a href="#"><i class="icon-link"></i></a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 475px; margin-right: 0px;"><div class="item">
                                        <div class="classes">
                                            <div class="classes-img" style="background-image: url(/images/classes-4.jpg);">
                                            </div>
                                            <div class="wrap">
                                                <div class="desc">
                                                    <span class="teacher">David Clarson</span>
                                                    <h3><a href="#">Developing Mobile Apps Using Ruby on Rails</a></h3>
                                                </div>
                                                <div class="pricing">
                                                    <p><span class="price">$150</span> <span class="price old-price">$250</span> <span class="more"><a href="#"><i class="icon-link"></i></a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 475px; margin-right: 0px;">
                                    <div class="item">
                                        <div class="classes">
                                            <div class="classes-img" style="background-image: url(/images/classes-5.jpg);"></div>
                                            <div class="wrap">
                                                <div class="desc">
                                                    <span class="teacher">David Clarson</span>
                                                    <h3><a href="#">Developing Mobile Apps Using Ruby on Rails</a></h3>
                                                </div>
                                                <div class="pricing">
                                                    <p><span class="price">$150</span> <span class="price old-price">$250</span> <span class="more"><a href="#"><i class="icon-link"></i></a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-controls">
                            <div class="owl-nav">
                                <div class="owl-prev" style="display: none;">
                                    <i class="icon-arrow-left3 owl-direction"></i>
                                </div>
                                <div class="owl-next" style="display: none;">
                                    <i class="icon-arrow-right3 owl-direction"></i>
                                </div>
                            </div>
                            <div class="owl-dots" style="">
                                <div class="owl-dot active">
                                    <span></span>
                                </div>
                                <div class="owl-dot">
                                    <span></span>
                                </div>
                                <div class="owl-dot">
                                    <span></span>
                                </div>
                                <div class="owl-dot">
                                    <span></span>
                                </div>
                                <div class="owl-dot">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

    <div id="colorlib-counter" class="colorlib-counters animated">
        <div class="container">
            <div class="col-md-7">
                <div class="about-desc">
                    <div class="about-img-1 animate-box" style="background-image: url(/images/about-img-2.jpg);"></div>
                    <div class="about-img-2 animate-box" style="background-image: url(/images/about-img-1.jpg);"></div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12 colorlib-heading animate-box">
                        <h1 class="heading-big">Who are we</h1>
                        <h2>Who are we</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <p><strong>Even the all-powerful Pointing has no control about the blind texts</strong></p>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="counter-entry">
                            <div class="desc">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50">1539</span>
                                <span class="colorlib-counter-label">Courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="counter-entry">
                            <div class="desc">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50">3653</span>
                                <span class="colorlib-counter-label">Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="counter-entry">
                            <div class="desc">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="2300" data-speed="5000" data-refresh-interval="50">2300</span>
                                <span class="colorlib-counter-label">Teachers online</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="counter-entry">
                            <div class="desc">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="200" data-speed="5000" data-refresh-interval="50">200</span>
                                <span class="colorlib-counter-label">Countries</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-testimony" class="testimony-img" style="background-image: url(&quot;/images/img_bg_2.jpg&quot;); margin-bottom: 4em; background-position: 50% 1129.5px;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 center-heading text-center colorlib-heading animate-box">
                    <h1 class="heading-big">What are the students says</h1>
                    <h2>What are the students says</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimony-flex">
                        <div class="one-fifth animate-box">
                            <span class="icon"><i class="icon-quotes-left"></i></span>
                            <div class="testimony-wrap">
                                <blockquote>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </blockquote>
                                <div class="desc">
                                    <div class="figure-img" style="background-image: url(/images/person1.jpg);"></div>
                                    <h3>Dave Henderson</h3>
                                </div>
                            </div>
                        </div>
                        <div class="one-fifth animate-box">
                            <span class="icon"><i class="icon-quotes-left"></i></span>
                            <div class="testimony-wrap">
                                <blockquote>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                                </blockquote>
                                <div class="desc">
                                    <div class="figure-img" style="background-image: url(/images/person2.jpg);"></div>
                                    <h3>Dave Henderson</h3>
                                </div>
                            </div>
                        </div>
                        <div class="one-fifth animate-box">
                            <span class="icon"><i class="icon-quotes-left"></i></span>
                            <div class="testimony-wrap">
                                <blockquote>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </blockquote>
                                <div class="desc">
                                    <div class="figure-img" style="background-image: url(/images/person3.jpg);"></div>
                                    <h3>Dave Henderson</h3>
                                </div>
                            </div>
                        </div>
                        <div class="one-fifth animate-box">
                            <span class="icon"><i class="icon-quotes-left"></i></span>
                            <div class="testimony-wrap">
                                <blockquote>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                                </blockquote>
                                <div class="desc">
                                    <div class="figure-img" style="background-image: url(/images/person1.jpg);"></div>
                                    <h3>Dave Henderson</h3>
                                </div>
                            </div>
                        </div>
                        <div class="one-fifth animate-box">
                            <span class="icon"><i class="icon-quotes-left"></i></span>
                            <div class="testimony-wrap">
                                <blockquote>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                                </blockquote>
                                <div class="desc">
                                    <div class="figure-img" style="background-image: url(/images/person1.jpg);"></div>
                                    <h3>Dave Henderson</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-trainers">
        <div class="container">
            <div class="row">
                <div class="col-md-12 colorlib-heading center-heading text-center animate-box">
                    <h1 class="heading-big">Our Instructor</h1>
                    <h2>Our Instructor</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 animate-box">
                    <div class="trainers-entry">
                        <div class="desc">
                            <h3>Olivia Young</h3>
                            <span>instructor</span>
                        </div>
                        <div class="trainer-img" style="background-image: url(/images/person1.jpg)"></div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 animate-box">
                    <div class="trainers-entry">
                        <div class="desc">
                            <h3>Daniel Anderson</h3>
                            <span>Instructor</span>
                        </div>
                        <div class="trainer-img" style="background-image: url(/images/person2.jpg)"></div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 animate-box">
                    <div class="trainers-entry">
                        <div class="desc">
                            <h3>David Brook</h3>
                            <span>Instructor</span>
                        </div>
                        <div class="trainer-img" style="background-image: url(/images/person3.jpg)"></div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 animate-box">
                    <div class="trainers-entry">
                        <div class="desc">
                            <h3>Brigeth Smith</h3>
                            <span>instructor</span>
                        </div>
                        <div class="trainer-img" style="background-image: url(/images/person4.jpg)"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-classes">
        <div class="container">
            <div class="row">
                <div class="col-md-12 colorlib-heading center-heading text-center animate-box">
                    <h1 class="heading-big">Our Courses</h1>
                    <h2>Our Courses</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(/images/classes-1.jpg);">
                        </div>
                        <div class="wrap">
                            <div class="desc">
                                <span class="teacher">David Clarson</span>
                                <h3><a href="#">Developing Mobile Apps Using Ruby on Rails</a></h3>
                            </div>
                            <div class="pricing">
                                <p><span class="price">$150</span> <span class="price old-price">$250</span> <span class="more"><a href="#"><i class="icon-link"></i></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(/images/classes-2.jpg);">
                        </div>
                        <div class="wrap">
                            <div class="desc">
                                <span class="teacher">David Clarson</span>
                                <h3><a href="#">Developing Mobile Apps Using Ruby on Rails</a></h3>
                            </div>
                            <div class="pricing">
                                <p><span class="price">$150</span> <span class="price old-price">$250</span> <span class="more"><a href="#"><i class="icon-link"></i></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(/images/classes-3.jpg);">
                        </div>
                        <div class="wrap">
                            <div class="desc">
                                <span class="teacher">David Clarson</span>
                                <h3><a href="#">Developing Mobile Apps Using Ruby on Rails</a></h3>
                            </div>
                            <div class="pricing">
                                <p><span class="price">$150</span> <span class="price old-price">$250</span> <span class="more"><a href="#"><i class="icon-link"></i></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(/images/classes-4.jpg);">
                        </div>
                        <div class="wrap">
                            <div class="desc">
                                <span class="teacher">David Clarson</span>
                                <h3><a href="#">Developing Mobile Apps Using Ruby on Rails</a></h3>
                            </div>
                            <div class="pricing">
                                <p><span class="price">$150</span> <span class="price old-price">$250</span> <span class="more"><a href="#"><i class="icon-link"></i></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(/images/classes-5.jpg);">
                        </div>
                        <div class="wrap">
                            <div class="desc">
                                <span class="teacher">David Clarson</span>
                                <h3><a href="#">Developing Mobile Apps Using Ruby on Rails</a></h3>
                            </div>
                            <div class="pricing">
                                <p><span class="price">$150</span> <span class="price old-price">$250</span> <span class="more"><a href="#"><i class="icon-link"></i></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(/images/classes-6.jpg);">
                        </div>
                        <div class="wrap">
                            <div class="desc">
                                <span class="teacher">David Clarson</span>
                                <h3><a href="#">Developing Mobile Apps Using Ruby on Rails</a></h3>
                            </div>
                            <div class="pricing">
                                <p><span class="price">$150</span> <span class="price old-price">$250</span> <span class="more"><a href="#"><i class="icon-link"></i></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-event">
        <div class="container">
            <div class="row">
                <div class="col-md-5 row-pb-md">
                    <div class="row">
                        <div class="col-md-12 colorlib-heading animate-box">
                            <h1 class="heading-big">Events</h1>
                            <h2>Upcoming Events</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="event-entry animate-box">
                                <div class="desc">
                                    <p class="meta"><span class="day">01-02</span><span class="month">Jun</span></p>
                                    <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="event.html">We Held Free Training for Basic Programming</a></h2>
                                </div>
                                <div class="location">
                                    <span class="icon"><i class="icon-map"></i></span>
                                    <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                            <div class="event-entry animate-box">
                                <div class="desc">
                                    <p class="meta"><span class="day">05-07</span><span class="month">Jun</span></p>
                                    <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="event.html">We Held Free Training for Basic Programming</a></h2>
                                </div>
                                <div class="location">
                                    <span class="icon"><i class="icon-map"></i></span>
                                    <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                            <div class="event-entry animate-box">
                                <div class="desc">
                                    <p class="meta"><span class="day">10-12</span><span class="month">Jun</span></p>
                                    <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="event.html">We Held Free Training for Basic Programming</a></h2>
                                </div>
                                <div class="location">
                                    <span class="icon"><i class="icon-map"></i></span>
                                    <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                            <div class="event-entry animate-box">
                                <div class="desc">
                                    <p class="meta"><span class="day">19-25</span><span class="month">Jun</span></p>
                                    <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="event.html">We Held Free Training for Basic Programming</a></h2>
                                </div>
                                <div class="location">
                                    <span class="icon"><i class="icon-map"></i></span>
                                    <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 row-pb-md">
                    <div class="row">
                        <div class="col-md-12 colorlib-heading animate-box">
                            <h1 class="heading-big">Recent Blog</h1>
                            <h2>Recent Blog</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-21 d-flex animate-box">
                                <a href="#" class="blog-img" style="background-image: url(/images/blog-1.jpg);"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                    <p>ven the all-powerful Pointing has no control about the blind texts it is an almost</p>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> May 29, 2018</a></div>
                                        <div><a href="#"><span class="icon-user2"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="block-21 d-flex animate-box">
                                <a href="#" class="blog-img" style="background-image: url(/images/blog-2.jpg);"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                    <p>ven the all-powerful Pointing has no control about the blind texts it is an almost</p>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> May 29, 2018</a></div>
                                        <div><a href="#"><span class="icon-user2"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="block-21 d-flex animate-box">
                                <a href="#" class="blog-img" style="background-image: url(/images/blog-3.jpg);"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                    <p>ven the all-powerful Pointing has no control about the blind texts it is an almost</p>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> May 29, 2018</a></div>
                                        <div><a href="#"><span class="icon-user2"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="block-21 d-flex animate-box">
                                <a href="#" class="blog-img" style="background-image: url(/images/blog-4.jpg);"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                    <p>ven the all-powerful Pointing has no control about the blind texts it is an almost</p>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> May 29, 2018</a></div>
                                        <div><a href="#"><span class="icon-user2"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection