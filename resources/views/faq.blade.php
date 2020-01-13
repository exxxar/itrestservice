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
                        <li><a href="#!">FAQ</a></li>
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
                        <h1 class="page-title">FAQ</h1>
                    </div>
                    <div class="accordion">
                        <div class="row gutters-default">
                            <div class="col-lg-6 col-12">
                                <ul class="accordion-list">
                                    <li class="accordion-item section-bg">
                                        <div class="accordion-trigger">Can I track my order?</div>
                                        <div class="accordion-content content">
                                            <p>Yes, you can! After placing your order you will receive an order confirmation via email. Each
                                                order starts production 15 minutes after your order is placed. Within a few hours of you
                                                placing your order, you will receive an expected delivery time. When the order will be ready
                                                for delivery, you will receive another email with the tracking number and a link to trace
                                                the order online with the courier.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item section-bg">
                                        <div class="accordion-trigger">How can I change something in my order?</div>
                                        <div class="accordion-content content">
                                            <p>If you need to change something in your order, please contact us immediately. We usually
                                                process orders within 30 minutes, and once we have processed your order, we will be unable
                                                to make any changes.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item section-bg">
                                        <div class="accordion-trigger">How can I pay for my order?</div>
                                        <div class="accordion-content content">
                                            <p>We accept Visa, MasterCard, and American Express credit and debit cards for your convenience.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-12">
                                <ul class="accordion-list">
                                    <li class="accordion-item section-bg">
                                        <div class="accordion-trigger">When will my order be delivered?</div>
                                        <div class="accordion-content content">
                                            <p>Delivery times will depend on your location. Once payment is confirmed your order will be
                                                packaged. Delivery can be expected within 10 business days.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item section-bg">
                                        <div class="accordion-trigger">Can I return an item?</div>
                                        <div class="accordion-content content">
                                            <p>Please contact our administrators for more information on returning products purchased on our
                                                website.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item section-bg">
                                        <div class="accordion-trigger">Do you provide any scripts?</div>
                                        <div class="accordion-content content">
                                            <p>Our templates do not include any additional scripts. Newsletter subscriptions, search fields,
                                                forums, image galleries (in HTML versions of Flash products) are inactive. Basic scripts can
                                                be easily added at www.TemplateTuning.com If you are not sure that the element you’re
                                                interested in is active please contact our Support Chat for clarification.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End main content -->

@endsection
