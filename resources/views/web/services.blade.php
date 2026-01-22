@extends('web.layouts.master')

@section('title')
    Services
@endsection

@section('middle-css')
    <!-- owl.carousel -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/web/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/web/css/owl.theme.default.min.css') }}">
@endsection

@section('previous-next-page-buttons')
    @component('web.components.previous-next-page-buttons')
        @slot('previous_page_url')
            {{ route('about') }}
        @endslot
        @slot('previous_page_name')
            About
        @endslot
        @slot('next_page_url')
            {{ route('portfolio') }}
        @endslot
        @slot('next_page_name')
            Portfolio
        @endslot
    @endcomponent
@endsection

@section('content')
    <!---------------------- services starts ---------------------->
    <section class="services py-5" id="services">
        <div class="container">
            <div class="row">
                <!-- title starts -->
                <div class="col-lg-12 mb-5">
                    <div class="services-title text-center py-3">
                        <h1>MY <span>SERVICES</span></h1>
                        <div class="separator d-none d-lg-block"></div>
                    </div>
                </div>
                <!-- end of title -->

                <!-- card-1 starts -->
                <div class="col-md-6 col-lg-4">
                    <div class="card-body text-center">
                        <div class="card-icon">
                            <i class="mdi mdi-chart-bar"></i>
                        </div>
                        <div class="card-title">
                            <h4>Custom Website Development</h4>
                        </div>
                        <div class="card-info">
                            <p>Build custom portfolio websites from scratch using Laravel, tailored to the client's specific
                                needs and
                                design preferences. Develop responsive layouts, implement interactive features, and ensure
                                optimal
                                performance and security.</p>
                        </div>
                    </div>
                </div>
                <!-- end of card-1 -->

                <!-- card-2 starts -->
                <div class="col-md-6 col-lg-4">
                    <div class="card-body text-center">
                        <div class="card-icon">
                            <i class="mdi mdi-palette"></i>
                        </div>
                        <div class="card-title">
                            <h4>Laravel Theme Customization</h4>
                        </div>
                        <div class="card-info">
                            <p>
                                Customize existing Laravel themes or templates to match the client's branding and
                                requirements. Modify the design, layout, colors, typography, and functionality of the theme
                                to create a unique and personalized portfolio website. </p>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end of card-2 -->

                <!-- card-3 starts -->
                <div class="col-md-6 col-lg-4">
                    <div class="card-body text-center">
                        <div class="card-icon">
                            <i class="mdi mdi-cloud-download"></i>
                        </div>
                        <div class="card-title">
                            <h4>Frontend Development</h4>
                        </div>
                        <div class="card-info">
                            <p>
                                Implement front-end development tasks for portfolio websites using Laravel. Translate design
                                mockups into HTML/CSS templates, integrate them into Laravel views, and ensure cross-browser
                                compatibility and responsive design. </p>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end of card-3 -->

                <!-- card-4 starts -->
                <div class="col-md-6 col-lg-4">
                    <div class="card-body text-center">
                        <div class="card-icon">
                            <i class="mdi mdi-router-wireless"></i>
                        </div>
                        <div class="card-title">
                            <h4>Content Management System (CMS) Development</h4>
                        </div>
                        <div class="card-info">
                            <p>
                                Develop a custom CMS using Laravel to enable clients to easily manage and update their
                                portfolio websites. Implement features like content creation, editing, publishing, media
                                management, and user management. </p>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end of card-4 -->

                <!-- card-5 starts -->
                <div class="col-md-6 col-lg-4">
                    <div class="card-body text-center">
                        <div class="card-icon">
                            <i class="mdi mdi-cellphone-link"></i>
                        </div>
                        <div class="card-title">
                            <h4>Database Management</h4>
                        </div>
                        <div class="card-info">
                            <p>
                                Design and implement database structures using Laravel's ORM (Object-Relational Mapping).
                                Set up relationships between database tables, optimize queries for performance, and ensure
                                secure data handling. </p>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end of card-5 -->

                <!-- card-6 starts -->
                <div class="col-md-6 col-lg-4">
                    <div class="card-body text-center">
                        <div class="card-icon">
                            <i class="mdi mdi-hammer-screwdriver"></i>
                        </div>
                        <div class="card-title">
                            <h4>Bug Fixing and Maintenance</h4>
                        </div>
                        <div class="card-info">
                            <p> Provide ongoing support and maintenance services for portfolio websites built on Laravel.
                                Identify and fix bugs, perform updates and security patches, and optimize the website's
                                performance to ensure smooth operation. </p>
                        </div>
                    </div>
                </div>
                <!-- end of card-6 -->
            </div>
        </div>
    </section>
    <!---------------------- end of services ---------------------->
@endsection

@section('middle-js')
    <!-- waypoints.js -->
    <script src="{{ URL::asset('assets/web/js/waypoints.js') }}"></script>

    <!-- jquery.counterup.js -->
    <script src="{{ URL::asset('assets/web/js/jquery.counterup.min.js') }}"></script>

    <!-- jquery.lineProgressbar.js -->
    <script src="{{ URL::asset('assets/web/js/jquery.lineProgressbar.js') }}"></script>

    <!-- owl.carousel.min.js -->
    <script src="{{ URL::asset('assets/web/js/owl.carousel.min.js') }}"></script>
@endsection
