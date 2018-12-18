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
@endsection