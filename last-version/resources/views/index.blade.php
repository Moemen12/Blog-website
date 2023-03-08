@extends('layouts.app')

@section('style','css/index.css')

@section('content')
    <div class="hero-bg-image">
        <h1>Welcome to my Blog</h1>
        <a href="/blog">Start Reading</a>
    </div>

    <div class="flex">
        <div class="one">
            <img class="responsive" src="https://picsum.photos/id/239/960/620" alt="">
        </div>

        <div class="article">
            <h2>How to be an expert in 2023</h2>

            <p>
                You can find a list of all programming languages here.
            </p>

            <p>
                Get the same random image every time based on a seed, by adding to the start of the url.
                You may combine any of the options above.
                For example, to get a specific image that is grayscale and blurred.
                PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image data – would form the whole or part of an HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generation of that response. Additionally, PHP can be used for many programming tasks outside the web context.
            </p>

            <a href="/">Read More</a>
        </div>
    </div>




    <div class="holder">
        <div><h2>Blog categories</h2></div>
        <div class="blog-category">
            <span>UX Design Thinking</span>
            <span>Programming Languages</span>
            <span>Graphic Design</span>
            <span>Front-End Development</span>
        </div>
    </div>



    <div class="recent-post">
    <h2>Recent Posts</h2>
    <p>PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image data – would form the whole or part of an HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generation of that response. Additionally, PHP can be used for many programming tasks outside the web context, such as standalone graphical applications[15] and robotic drone control.</p>
    </div>


    <div class="main-article">


        <div class="main-content">
           <div>
                <ul>
                    <li><a href="/"></a>PHP</li>
                    <li><a href="/"></a>Programming</li>
                    <li><a href="/"></a>Languages</li>
                    <li><a href="/"></a>Backend</li>
                </ul>

            <h3>PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image data – would form the whole or part of an HTTP response.
            </h3>
           <a class="read" href="/">Read More</a>
        </div>
        </div>
  
        <div class="aside-img">
            <img src="https://picsum.photos/id/242/600/300" alt="">
        </div>


    </div>
@endsection


