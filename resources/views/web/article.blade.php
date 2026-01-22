@extends('web.layouts.master2')

@section('title')
    Article
@endsection

@section('content')
    <!---------------------- blog starts ---------------------->
    <section class="blog py-5" id="blog">
        <div class="container">
            <div class="row">
                <!-- title starts -->
                <div class="col-lg-12">
                    <div class="blog-title py-3 text-center">
                        <h1 class="d-block">My <span>Blogs</span></h1>
                        <div class="separator"></div>
                    </div>
                </div>
                <!-- end of title -->
                <article class="article mt-5 col-12">
                    <!-- meta starts -->
                    <div class="article-meta">
                        <span><i class="mdi mdi-account"></i>Kawsar</span>
                        <span><i class="mdi mdi-calendar-month"></i>20 June 2020</span>
                        <span><i class="mdi mdi-tag-multiple"></i> wordpress, business, economy, design</span>
                    </div>
                    <!-- end of meta -->
                    <div class="main-content">
                        <div class="article-title my-3">
                            <h1>Everything You Need To Know About Web Accessibility</h1>
                        </div>
                        <div class="article-img py-3">
                            <img src="{{ URL::asset('assets/web/images/blog1.jpg') }}" class="img-fluid">
                        </div>
                        <div class="article-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                est laborum.</p>
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!---------------------- end of color blog ---------------------->
@endsection

@section('middle-js')
    <!-- waypoints.js -->
    <script src="{{ URL::asset('assets/web/js/waypoints.js') }}"></script>

    <!-- jquery.counterup.js -->
    <script src="{{ URL::asset('assets/web/js/jquery.counterup.min.js') }}"></script>

    <!-- jquery.lineProgressbar.js -->
    <script src="{{ URL::asset('assets/web/js/jquery.lineProgressbar.js') }}"></script>
@endsection
