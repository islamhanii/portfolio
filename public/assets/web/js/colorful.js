$(document).ready(function () {
    // ------------------------- color switcher starts
    $(".switcher-trigger").click(function () {
        $(".switcher-wrapper").toggleClass("open");
    });

    $(".color-list .green button").click(function () {
        $("#switcher").attr("href", window.config.styles.green)
        $(".color-list li.green button").css("font-size", "16px")
        $(".pink button, .blue button, .yellow button, .purple button, .orange button").css("font-size", "0px")
    });

    $(".color-list .pink button").click(function () {
        $("#switcher").attr("href", window.config.styles.pink)
        $(".color-list li.pink button").css("font-size", "16px")
        $(".green button, .blue button, .yellow button, .purple button, .orange button").css("font-size", "0px")
    });

    $(".color-list .blue button").click(function () {
        $("#switcher").attr("href", window.config.styles.blue)
        $(".color-list li.blue button").css("font-size", "16px")
        $(".green button, .pink button, .yellow button, .purple button, .orange button").css("font-size", "0px")
    });

    $(".color-list .purple button").click(function () {
        $("#switcher").attr("href", window.config.styles.purple)
        $(".color-list li.purple button").css("font-size", "16px")
        $(".green button, .pink button, .yellow button, .blue button, .orange button").css("font-size", "0px")
    });

    $(".color-list .orange button").click(function () {
        $("#switcher").attr("href", window.config.styles.orange)
        $(".color-list li.orange button").css("font-size", "16px")
        $(".green button, .pink button, .yellow button, .blue button, .purple button").css("font-size", "0px")
    });

    $(".color-list .yellow button").click(function () {
        $("#switcher").attr("href", window.config.styles.yellow)
        $(".color-list li.yellow button").css("font-size", "16px")
        $(".green button, .pink button, .orange button, .blue button, .purple button").css("font-size", "0px")
    });
    // ------------------------ end of color switcher
});
