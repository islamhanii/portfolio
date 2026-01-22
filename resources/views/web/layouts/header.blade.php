<!---------------------- preloader starts ---------------------->
<div id="loader"></div>
<!---------------------- end of preloader ---------------------->

<!---------------------- navigator starts ---------------------->
<div class="main-navigator">
    <span class="mdi mdi-menu"></span>
    <ul class="navigator-list">
        <li @if (Request::routeIs('home')) style="z-index: 1" @endif><a
                class="mdi mdi-home @if (Request::routeIs('home')) navigator-active @endif"
                href="{{ route('home') }}"></a></li>
        <li @if (Request::routeIs('about')) style="z-index: 1" @endif><a
                class="mdi mdi-account @if (Request::routeIs('about')) navigator-active @endif"
                href="{{ route('about') }}"></a>
        </li>
        <li @if (Request::routeIs('services')) style="z-index: 1" @endif><a
                class="mdi mdi-face-agent @if (Request::routeIs('services')) navigator-active @endif"
                href="{{ route('services') }}"></a></li>
        <li @if (Request::routeIs('portfolio')) style="z-index: 1" @endif><a
                class="mdi mdi-briefcase-variant @if (Request::routeIs('portfolio')) navigator-active @endif"
                href="{{ route('portfolio') }}"></a></li>
        <li @if (Request::routeIs('blog')) style="z-index: 1" @endif><a
                class="mdi mdi-forum @if (Request::routeIs('blog')) navigator-active @endif"
                href="{{ route('blog') }}"></a>
        </li>
        <li @if (Request::routeIs('contact')) style="z-index: 1" @endif><a
                class="mdi mdi-account-box @if (Request::routeIs('contact')) navigator-active @endif"
                href="{{ route('contact') }}"></a></li>
    </ul>
</div>
<!---------------------- end of navigator ---------------------->

<!---------------------- mobile-menu starts ---------------------->

<nav class="mobile-nav">
    <div class="container-fluid">
        <div class="page-title col-10 px-0 float-left">
            <h2>MD. <span>KAWSAR</span></h2>
        </div>
        <button class="trigger px-0 col-2">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="nav-menu">
            <ul class="nav-links">
                <li><a @if (Request::routeIs('home')) class="nav-active" @endif href="{{ route('home') }}"><i
                            class="mdi mdi-home mr-3"></i>HOME</a></li>
                <li><a @if (Request::routeIs('about')) class="nav-active" @endif href="{{ route('about') }}"><i
                            class="mdi mdi-account mr-3"></i>ABOUT</a></li>
                <li><a @if (Request::routeIs('services')) class="nav-active" @endif href="{{ route('services') }}"><i
                            class="mdi mdi-face-agent mr-3"></i>SERVICES</a></li>
                <li><a @if (Request::routeIs('portfolio')) class="nav-active" @endif href="{{ route('portfolio') }}"><i
                            class="mdi mdi-briefcase-variant mr-3"></i>PORTFOLIO</a></li>
                <li><a @if (Request::routeIs('blog')) class="nav-active" @endif href="{{ route('blog') }}"><i
                            class="mdi mdi-forum mr-3"></i>BLOG</a></li>
                <li><a @if (Request::routeIs('contact')) class="nav-active" @endif href="{{ route('contact') }}"><i
                            class="mdi mdi-account-box mr-3"></i>CONTACT</a></li>
            </ul>
        </div>
    </div>

</nav>
<!---------------------- end of mobile-menu ---------------------->

@yield('previous-next-page-buttons')
