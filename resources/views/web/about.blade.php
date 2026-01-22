@extends('web.layouts.master')

@section('title')
    About
@endsection

@section('previous-next-page-buttons')
    @component('web.components.previous-next-page-buttons')
        @slot('previous_page_url')
            {{ route('home') }}
        @endslot
        @slot('previous_page_name')
            Home
        @endslot
        @slot('next_page_url')
            {{ route('services') }}
        @endslot
        @slot('next_page_name')
            Services
        @endslot
    @endcomponent
@endsection

@section('content')
    <!---------------------- about starts ---------------------->
    <section class="about py-5" id="about">
        <div class="container">
            <div class="row">
                <!-- title starts -->
                <div class="col-lg-12">
                    <div class="about-title py-3 text-center">
                        <h1>ABOUT <span>ME</span></h1>
                        <div class="separator d-none d-lg-block"></div>
                    </div>
                </div>
                <!-- end of title -->

                <div class="col-lg-6 pt-5 pr-lg-5">
                    <div class="about-text">
                        <h4>Hello! I'M <span>Kareem Shaban</span></h4>
                        <p>
                            Results-driven Junior Laravel Developer with a
                            passion for building robust and efficient web
                            applications using the Laravel framework.
                            Proficient in PHP, HTML, CSS, and JavaScript, with a solid foundation
                            in web development principles. Eager to contribute
                            to a dynamic development team, learn from experienced
                            professionals, and apply my skills in creating
                            innovative solutions. Strong attention to detail,
                            excellent problem-solving abilities, and a
                            continuous learner committed to staying updated with emerging
                            technologies and best practices in Laravel
                            development.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6 p-0">
                        <a class="description-btn" href="#">
                            <span class="name-description">DOWNLOAD CV</span>
                            <div class="btn-icon">
                                <i class="mdi mdi-download"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 pt-5 mt-4">
                    <div class="about-details">
                        <ul>
                            <li><span>Age :</span><span> 24</span></li>
                            <li><span>Nationality :</span><span>Egyption</span></li>
                            <li><span>Frelance :</span><span> Available</span></li>
                            <li><span>Address :</span><span> Egypt , Benha</span></li>
                        </ul>
                        <ul>
                            <li><span>Phone :</span><span> 01090537394 </span></li>
                            <li><span>Gmail :</span><span>kareemshaban@gmail.com</span></li>
                            <li><span>Linked In :</span><span> @kreative</span></li>
                            <li><span>Language :</span><span> Arabic,English</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!---------------------- EXPERIENCE & EDUCATION ---------------------->
            <div class="row py-5">
                <div class="col-lg-12 text-center">
                    <h3>EXPERIENCE & EDUCATION</h3>
                </div>
                <div class="col-lg-6 pt-5">
                    <h4 class="education-title text-center">EDUCATION</h4>
                    <div class="education pl-4 mt-5">
                        <div class="education-box">
                            <h5 class="box-title">Computer Sience Bachelor’s Degree</h5>
                            <span class="item-period">2017 - </span>
                            <span class="item-period">2021</span>
                            <span class="item-small"> | Benha University</span>
                            <p class="box-description">
                                Bachelor’s Degree in Information Security &amp; Digital Forensics , Faculty of Computer
                                and Artificial Intelligence , Benha University
                            </p>
                        </div>
                    </div>
                    <h4 class="education-title text-center">Cources</h4>
                    <div class="education pl-4 mt-5">
                        <div class="education-box">
                            <h5 class="box-title">Computer Sience Bachelor’s Degree</h5>
                            <span class="item-period">2017 - </span>
                            <span class="item-period">2021</span>
                            <span class="item-small"> | Benha University</span>
                            <p class="box-description">
                                Bachelor’s Degree in Information Security &amp; Digital Forensics , Faculty of Computer
                                and Artificial Intelligence , Benha University
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 pt-5">
                    <h4 class="experince-title text-center">EXPERIENCE</h4>
                    <div class="experince pl-4 mt-5">
                        <div class="experince-box">
                            <h5 class="box-title">Specialization Course</h5>
                            <span class="item-period">2017</span>
                            <span class="item-small"> | The IT Aid</span>
                            <p class="box-description">Mauris magna sapien,
                                pharetra consectetur fringilla vitae,
                                interdum sed tortor.</p>
                        </div>
                        <div class="experince-box">
                            <h5 class="box-title">Specialization Course</h5>
                            <span class="item-period">2017</span>
                            <span class="item-small"> | The IT Aid</span>
                            <p class="box-description">Mauris magna sapien,
                                pharetra consectetur fringilla vitae,
                                interdum sed tortor.</p>
                        </div>
                        <div class="experince-box">
                            <h5 class="box-title">Specialization Course</h5>
                            <span class="item-period">2017</span>
                            <span class="item-small"> | The IT Aid</span>
                            <p class="box-description">Mauris magna sapien,
                                pharetra consectetur fringilla vitae,
                                interdum sed tortor.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!---------------------- end of EXPERIENCE & EDUCATION ---------------------->

            <!---------------------- skill ---------------------->
            <div class="row">
                <div class="col-lg-12 text-center pb-5">
                    <h3>SKILLS</h3>
                </div>
                <div class="col-lg-6">
                    <p class="skill-name">HTML</p>
                    <div id="html"></div>
                    <p class="skill-name">CSS</p>
                    <div id="css"></div>
                    <p class="skill-name">JavaScript</p>
                    <div id="java"></div>
                    <p class="skill-name">jQuery</p>
                    <div id="jquery"></div>
                </div>
                <div class="col-lg-6">
                    <p class="skill-name">PHP</p>
                    <div id="php"></div>
                    <p class="skill-name">Laravel Framework</p>
                    <div id="laravel"></div>
                    <p class="skill-name">Flutter</p>
                    <div id="flutter"></div>

                </div>
            </div>
            <!---------------------- end of skill ---------------------->
        </div>
    </section>
    <!---------------------- end of about ---------------------->
@endsection

@section('middle-js')
    <!-- jquery.lineProgressbar.js -->
    <script src="{{ URL::asset('assets/web/js/jquery.lineProgressbar.js') }}"></script>
@endsection

@section('after-js')
    <script>
        $(document).ready(function() {
            // ------------------------ LineProgressbar starts
            $('#html').LineProgressbar({
                percentage: 90,
                radius: '3px',
                height: '10px',
                duration: 6000,
                backgroundColor: '#2b2a2a',
            });
            $('#css').LineProgressbar({
                percentage: 80,
                radius: '3px',
                height: '10px',
                duration: 6000,
                backgroundColor: '#2b2a2a',
            });
            $('#java').LineProgressbar({
                percentage: 65,
                radius: '3px',
                height: '10px',
                duration: 6000,
                backgroundColor: '#2b2a2a',
            });
            $('#jquery').LineProgressbar({
                percentage: 65,
                radius: '3px',
                height: '10px',
                duration: 6000,
                backgroundColor: '#2b2a2a',
            });
            $('#php').LineProgressbar({
                percentage: 75,
                radius: '3px',
                height: '10px',
                duration: 6000,
                backgroundColor: '#2b2a2a',
            });
            $('#laravel').LineProgressbar({
                percentage: 85,
                radius: '3px',
                height: '10px',
                duration: 6000,
                backgroundColor: '#2b2a2a',
            });
            $('#flutter').LineProgressbar({
                percentage: 70,
                radius: '3px',
                height: '10px',
                duration: 6000,
                backgroundColor: '#2b2a2a',
            });
            // ------------------------ end of LineProgressbar
        });
    </script>
@endsection
