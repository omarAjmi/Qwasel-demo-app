@extends('layouts.app')

@section('content')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(&quot;images/img_bg_2.jpg&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-md-offset-3 col-xs-12 slider-text animated fadeInUp">
                                <div class="slider-text-inner text-center">
                                    <h1>Courses</h1>
                                    <h2 class="breadcrumbs"><span><a href="index.html">Home</a></span> | <span>Courses</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ol class="flex-control-nav flex-control-paging"></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li></ul></div>
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

    <div class="colorlib-classes">
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





                        <div class="owl-stage-outer owl-height" style="height: 442px;"><div class="owl-stage" style="transition: all 0s ease 0s; width: 1260px; transform: translate3d(378px, 0px, 0px);"><div class="owl-item active center" style="width: 252px; margin-right: 0px;"><div class="item">
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
                                    </div></div><div class="owl-item active" style="width: 252px; margin-right: 0px;"><div class="item">
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
                                    </div></div><div class="owl-item active" style="width: 252px; margin-right: 0px;"><div class="item">
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
                                    </div></div><div class="owl-item" style="width: 252px; margin-right: 0px;"><div class="item">
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
                                    </div></div><div class="owl-item" style="width: 252px; margin-right: 0px;"><div class="item">
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
                                    </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;"><i class="icon-arrow-left3 owl-direction"></i></div><div class="owl-next" style="display: none;"><i class="icon-arrow-right3 owl-direction"></i></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-classes">
        <div class="container">
            <div class="row">
                <div class="col-md-12 colorlib-heading center-heading text-center animate-box fadeInUp animated-fast">
                    <h1 class="heading-big">Our Courses</h1>
                    <h2>Our Courses</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box fadeInUp animated-fast">
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
                <div class="col-md-4 animate-box fadeInUp animated-fast">
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
                <div class="col-md-4 animate-box fadeInUp animated-fast">
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
                <div class="col-md-4 animate-box fadeInUp animated-fast">
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
                <div class="col-md-4 animate-box fadeInUp animated-fast">
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
                <div class="col-md-4 animate-box fadeInUp animated-fast">
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
@endsection
