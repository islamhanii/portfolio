<!-- jquery.js -->
<script src="{{ URL::asset('assets/web/js/jquery-3.5.1.js') }}"></script>
<!-- popper.js -->
<script src="{{ URL::asset('assets/web/js/popper.js') }}"></script>
<!-- bootstrap.min.js -->
<script src="{{ URL::asset('assets/web/js/bootstrap.min.js') }}"></script>
@yield('middle-js')
<!-- script.js -->
<script src="{{ URL::asset('assets/web/js/script.js') }}"></script>
<!-- colorful.js -->
<script>
    window.config = {
        styles: {
            green: "{{ URL::asset('assets/web/css/color/green.css') }}",
            pink: "{{ URL::asset('assets/web/css/color/pink.css') }}",
            blue: "{{ URL::asset('assets/web/css/color/blue.css') }}",
            purple: "{{ URL::asset('assets/web/css/color/purple.css') }}",
            yellow: "{{ URL::asset('assets/web/css/color/yellow.css') }}",
            orange: "{{ URL::asset('assets/web/css/color/orange.css') }}",
        },
    };
</script>
<script src="{{ URL::asset('assets/web/js/colorful.js') }}"></script>
<!-- preloader -->
<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 2000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
    }
</script>
@yield('after-js')
