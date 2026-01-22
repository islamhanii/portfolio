@extends('web.layouts.master')

@section('title')
    Blog
@endsection

@section('previous-next-page-buttons')
    @component('web.components.previous-next-page-buttons')
        @slot('previous_page_url')
            {{ route('services') }}
        @endslot
        @slot('previous_page_name')
            Services
        @endslot
        @slot('next_page_url')
            {{ route('contact') }}
        @endslot
        @slot('next_page_name')
            Contact
        @endslot
    @endcomponent
@endsection

@section('content')
    <!---------------------- blog starts ---------------------->
    <section class="blog py-5" id="blog">
        <div class="container">
            <div class="row">
                <!-- title starts -->
                <div class="col-lg-12">
                    <div class="blog-title py-3 text-center">
                        <h1>My <span>Blogs</span></h1>
                        <div class="separator d-none d-lg-block"></div>
                    </div>
                </div>
                <!-- end of title -->

                <!-- blog card-1 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="{{ route('article') }}"><img src="{{ URL::asset('assets/web/images/blog1.jpg') }}"
                                    class="img-fluid" alt="blog blog1"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="{{ route('article') }}"><span>KR Themes</span></a></p>
                            <a href="{{ route('article') }}">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-1 -->

                <!-- blog card-2 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="{{ route('article') }}"><img src="{{ URL::asset('assets/web/images/blog2.jpg') }}"
                                    class="img-fluid" alt="blog blog2"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="{{ route('article') }}"><span>KR Themes</span></a></p>
                            <a href="{{ route('article') }}">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-2 -->

                <!-- blog card-3 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="{{ route('article') }}"><img src="{{ URL::asset('assets/web/images/blog3.jpg') }}"
                                    class="img-fluid" alt="blog blog3"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="{{ route('article') }}"><span>KR Themes</span></a></p>
                            <a href="{{ route('article') }}">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-3 -->

                <!-- blog card-4 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="{{ route('article') }}"><img src="{{ URL::asset('assets/web/images/blog4.jpg') }}"
                                    class="img-fluid" alt="blog blog4"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="{{ route('article') }}"><span>KR Themes</span></a></p>
                            <a href="{{ route('article') }}">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-4 -->

                <!-- blog card-5 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="{{ route('article') }}"><img src="{{ URL::asset('assets/web/images/blog5.jpg') }}"
                                    class="img-fluid" alt="blog blog5"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="{{ route('article') }}"><span>KR Themes</span></a></p>
                            <a href="{{ route('article') }}">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-5 -->

                <!-- blog card-6 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="{{ route('article') }}"><img src="{{ URL::asset('assets/web/images/blog6.jpg') }}"
                                    class="img-fluid" alt="blog blog6"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="{{ route('article') }}"><span>KR Themes</span></a></p>
                            <a href="{{ route('article') }}">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-6 -->

                <!-- blog card-7 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="{{ route('article') }}"><img src="{{ URL::asset('assets/web/images/blog7.jpg') }}"
                                    class="img-fluid" alt="blog blog7"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="{{ route('article') }}"><span>KR Themes</span></a></p>
                            <a href="{{ route('article') }}">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-7 -->

                <!-- blog card-8 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="{{ route('article') }}"><img src="{{ URL::asset('assets/web/images/blog8.jpg') }}"
                                    class="img-fluid" alt="blog blog8"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="{{ route('article') }}"><span>KR Themes</span></a></p>
                            <a href="{{ route('article') }}">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-8 -->

                <!-- blog card-9 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="{{ route('article') }}"><img src="{{ URL::asset('assets/web/images/blog9.jpg') }}"
                                    class="img-fluid" alt="blog blog9"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="{{ route('article') }}"><span>KR Themes</span></a></p>
                            <a href="{{ route('article') }}">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-9 -->

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
