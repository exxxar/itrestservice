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
                            <a href="index.html">Pages</a>
                            <i class="material-icons md-18">chevron_right</i>
                        </li>
                        <li><a href="#!">Search Results</a></li>
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
                        <div class="page-subtitle">Search the site</div>
                        <h1 class="page-title">Search Results</h1>
                    </div>
                    <div class="search-page-container">
                        <form action="#!" method="post" class="search-page-form">
                            <div class="form-field">
                                <label for="page-field-search" class="form-field-label">Search...</label>
                                <input type="search" class="form-field-input" name="SearchPage" value="" autocomplete="off" required="required" id="page-field-search">
                                <button type="submit" class="search-btn"><i class="material-icons md-22">search</i></button>
                            </div>
                        </form>
                        <p class="search-page-results-text">3 results for “<b>res</b>”</p>
                        <ol class="search-page-list">
                            <li>
                                <div class="search-page-item-info">
                                    <a href="#!" title="Benefits Of Async/Await">Benefits Of Async/Await</a>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo hic architecto atque sit doloremque asperiores libero officia! Doloremque quidem consequuntur magnam asperiores cum, excepturi id nisi tenetur fugit unde...</p>
                                </div>
                            </li>
                            <li>
                                <div class="search-page-item-info">
                                    <a href="#!" title="Key Considerations Of IPaaS">Key Considerations Of IPaaS</a>
                                    <p>Digital transformation requires cloud appropriate adoption...</p>
                                </div>
                            </li>
                            <li>
                                <div class="search-page-item-info">
                                    <a href="#!" title="Hibernate Query Language">Hibernate Query Language</a>
                                    <p>In this tutorial, we will discuss the Hibernate Query Language...</p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End main content -->
@endsection
