@extends('layouts.app')
@section('content')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url('{{ route('welcome') }}/images/img_bg_2.jpg'); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
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

    <link href="/css/videojs/video.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/videojs/videojs-upnext.css">
    <link rel="stylesheet" href="/css/videojs/videojs-logo.css">
    <style>
        .next {float: right}
        .previous {float: left}
    </style>
    <div class="colorlib-classes">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row row-pb-lg">
                        <div class="col-md-12 animate-box fadeInUp animated-fast">
                            <div class="classes class-single">
                                <video id="video-player" class="video-js vjs-big-play-centered" controls  width="747px" height="500px" poster="http://vjs.zencdn.net/v/oceans.png" muted>
                                    <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4" />

                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider upgrading to a web browser that
                                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                    </p>
                                </video>
                                <button id="previousButton" class="btn btn-primary previous" style="border-radius: unset;"><i {{--class="lnr lnr-arrow-left"--}}></i>&nbsp Previous </button>
                                <button id="nextButton" class="btn btn-primary next" style="border-radius: unset;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Next&nbsp;<i {{--class="lnr lnr-chevron-right"--}}></i></button>
                                <script src="/js/videojs/video.js"></script>
                                <script src="/js/videojs/videojs-playlist.js"></script>
                                <script src="/js/videojs/videojs.hotkeys.min.js"></script>
                                <script src="/js/videojs/videojs-upnext.js"></script>
                                <script src="/js/videojs/videojs-logo.js"></script>
                                <script !src="">
                                    let playlist = {!! $playlist->toJson() !!};
                                </script>
                                <script src="{{ route('welcome') }}/js/videojs/videos.js"></script>
                                <div class="desc desc2">
                                    <h3><a href="#" class="videoTitle"></a></h3>
                                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                    <blockquote>
                                        The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
                                    </blockquote>
                                    <h3>Some Features</h3>
                                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>

                                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                                    <p><a href="#" class="btn btn-primary btn-outline btn-lg">Live Preview</a> or <a href="#" class="btn btn-primary btn-lg">Download File</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-pb-lg animate-box fadeInUp animated-fast">
                        <div class="col-md-12">
                            <h2 class="colorlib-heading-2">23 Comments</h2>
                            <div class="review">
                                <div class="user-img" style="background-image: url({{ route('welcome') }}/images/person1.jpg)"></div>
                                <div class="desc">
                                    <h4>
                                        <span class="text-left">Jacob Webb</span>
                                        <span class="text-right">24 March 2018</span>
                                    </h4>
                                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                    <p class="star">
                                        <span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="review">
                                <div class="user-img" style="background-image: url({{ route('welcome') }}/images/person2.jpg)"></div>
                                <div class="desc">
                                    <h4>
                                        <span class="text-left">Jacob Webb</span>
                                        <span class="text-right">24 March 2018</span>
                                    </h4>
                                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                    <p class="star">
                                        <span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="review">
                                <div class="user-img" style="background-image: url({{ route('welcome') }}/images/person3.jpg)"></div>
                                <div class="desc">
                                    <h4>
                                        <span class="text-left">Jacob Webb</span>
                                        <span class="text-right">24 March 2018</span>
                                    </h4>
                                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                    <p class="star">
                                        <span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row animate-box">
                        <div class="col-md-12">
                            <h2 class="colorlib-heading-2">Say something</h2>
                            <form action="#">
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <!-- <label for="fname">First Name</label> -->
                                        <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <label for="lname">Last Name</label> -->
                                        <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="email">Email</label> -->
                                        <input type="text" id="email" class="form-control" placeholder="Your email address">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="subject">Subject</label> -->
                                        <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="message">Message</label> -->
                                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- SIDEBAR: start -->
                <div class="col-md-4 animate-box fadeInUp animated-fast">
                    <div class="sidebar">
                        <div class="side">
                            <h3 class="sidebar-heading">Playlist</h3>
                                @foreach($playlist->toArray() as $item)
                                    <div class="f-blog popout">
                                        <a class="blog-img videoItem" href="javascript:" style="background-image: url({{ $item['poster'] }});" data-value='{"link":"{{ $item['sources']['src']}}", "title":"{{ $item['title'] }}"}'>
                                        </a>
                                        <div class="desc">
                                            <p class="admin"><span>18 April 2018</span></p>
                                            <h2><a class="videoItem" href="javascript:" data-value='{"link":"{{ $item['sources']['src']}}", "title":"{{ $item['title'] }}"}' >{{ $item['title'] }}</a></h2>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                        <div class="side">
                            <h3 class="sidebar-heading">Recent Blog</h3>
                            <div class="f-blog">
                                <a href="blog.html" class="blog-img" style="background-image: url({{ route('welcome') }}/images/blog-1.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="admin"><span>18 April 2018</span></p>
                                    <h2><a href="blog.html">Creating Mobile Apps</a></h2>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                            <div class="f-blog">
                                <a href="blog.html" class="blog-img" style="background-image: url({{ route('welcome') }}/images/blog-2.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="admin"><span>18 April 2018</span></p>
                                    <h2><a href="blog.html">Creating Mobile Apps</a></h2>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                            <div class="f-blog">
                                <a href="blog.html" class="blog-img" style="background-image: url({{ route('welcome') }}/images/blog-3.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="admin"><span>18 April 2018</span></p>
                                    <h2><a href="blog.html">Creating Mobile Apps</a></h2>
                                    <p>Far far away, behind the word mountains</p>
                                </div>
                            </div>
                        </div>
                        <div class="side">
                            <h3 class="sidbar-heading">Tags</h3>
                            <div class="block-26">
                                <ul>
                                    <li><a href="#">code</a></li>
                                    <li><a href="#">design</a></li>
                                    <li><a href="#">typography</a></li>
                                    <li><a href="#">development</a></li>
                                    <li><a href="#">creative</a></li>
                                    <li><a href="#">codehack</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection