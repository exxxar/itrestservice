@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
    <!-- Begin bread crumbs -->
    <nav class="bread-crumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="bread-crumbs-list">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="material-icons md-18">chevron_right</i>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                            <i class="material-icons md-18">chevron_right</i>
                        </li>
                        <li><a href="#!">Timeline</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav><!-- End bread crumbs -->

    <!-- Begin main content -->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapp-page-title page-title-center">
                        <div class="page-subtitle">most interesting articles</div>
                        <h1 class="page-title">Blog</h1>
                    </div>
                </div>
            </div>
            <div class="row news-timeline">
                <div class="col-12">
                    <h4 class="news-timeline-title">October 2019</h4>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-1 col-12 news-timeline-item-left">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="blog-post.html" class="news-item-img">
                            <img data-src="img/news-img-1.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">07/07/2019</div>
                            <h4 class="news-item-title item-title">
                                <a href="blog-post.html" title="Benefits Of Async/Await">Benefits Of Async/Await</a>
                            </h4>
                            <div class="news-item-desc">
                                <p>Asynchronous functions are a good and bad thing in JavaScript.</p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-xl-4 col-lg-5 offset-lg-2 col-12 news-timeline-item-right">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="blog-post.html" class="news-item-img">
                            <img data-src="img/news-img-2.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">05/07/2019</div>
                            <h4 class="news-item-title item-title">
                                <a href="blog-post.html" title="Key Considerations Of IPaaS">Key Considerations Of IPaaS</a>
                            </h4>
                            <div class="news-item-desc">
                                <p>Digital transformation requires cloud appropriate adoption</p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-1 col-12 news-timeline-item-left">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="blog-post.html" class="news-item-img">
                            <img data-src="img/news-img-3.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">01/07/2019</div>
                            <h4 class="news-item-title item-title">
                                <a href="blog-post.html" title="Hibernate Query Language">Hibernate Query Language</a>
                            </h4>
                            <div class="news-item-desc">
                                <p>In this tutorial, we will discuss the Hibernate Query Language. </p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-xl-4 col-lg-5 offset-lg-2 col-12 news-timeline-item-right">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="blog-post.html" class="news-item-img">
                            <img data-src="img/news-img-1.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">07/07/2019</div>
                            <h4 class="news-item-title item-title">
                                <a href="blog-post.html" title="Benefits Of Async/Await">Benefits Of Async/Await</a>
                            </h4>
                            <div class="news-item-desc">
                                <p>Asynchronous functions are a good and bad thing in JavaScript.</p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-12">
                    <h4 class="news-timeline-title news-timeline-title-mt">September 2019</h4>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-1 col-12 news-timeline-item-left">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="blog-post.html" class="news-item-img">
                            <img data-src="img/news-img-1.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">07/07/2019</div>
                            <h4 class="news-item-title item-title">
                                <a href="blog-post.html" title="Benefits Of Async/Await">Benefits Of Async/Await</a>
                            </h4>
                            <div class="news-item-desc">
                                <p>Asynchronous functions are a good and bad thing in JavaScript.</p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-xl-4 col-lg-5 offset-lg-2 col-12 news-timeline-item-right">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="blog-post.html" class="news-item-img">
                            <img data-src="img/news-img-2.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">05/07/2019</div>
                            <h4 class="news-item-title item-title">
                                <a href="blog-post.html" title="Key Considerations Of IPaaS">Key Considerations Of IPaaS</a>
                            </h4>
                            <div class="news-item-desc">
                                <p>Digital transformation requires cloud appropriate adoption</p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-1 col-12 news-timeline-item-left">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="blog-post.html" class="news-item-img">
                            <img data-src="img/news-img-3.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">01/07/2019</div>
                            <h4 class="news-item-title item-title">
                                <a href="blog-post.html" title="Hibernate Query Language">Hibernate Query Language</a>
                            </h4>
                            <div class="news-item-desc">
                                <p>In this tutorial, we will discuss the Hibernate Query Language. </p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-xl-4 col-lg-5 offset-lg-2 col-12 news-timeline-item-right">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="blog-post.html" class="news-item-img">
                            <img data-src="img/news-img-1.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">07/07/2019</div>
                            <h4 class="news-item-title item-title">
                                <a href="blog-post.html" title="Benefits Of Async/Await">Benefits Of Async/Await</a>
                            </h4>
                            <div class="news-item-desc">
                                <p>Asynchronous functions are a good and bad thing in JavaScript.</p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
            </div>
        </div>
    </div><!-- End main content -->

@endsection
