<!---------------------- next & prev btn starts ---------------------->

<div class="main-arrow" style="top: calc(50vh - 100px);">
    @if (isset($previous_page_url))
        <div class="arrow-prev"><a class="mdi mdi-menu-up" href="{{ $previous_page_url }}">
                <h5>{{ $previous_page_name }}</h5>
            </a></div>
    @endif
    @if (isset($next_page_url))
        <div class="arrow-next"><a class="mdi mdi-menu-down" href="{{ $next_page_url }}">
                <h5>{{ $next_page_name }}</h5>
            </a></div>
    @endif
</div>

<!---------------------- end of next & prev btn ---------------------->
