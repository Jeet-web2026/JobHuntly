$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $("header").removeClass('bg-transparent').addClass("bg-white shadow-lg");
        } else {
            $("header").removeClass("bg-white shadow-lg").addClass('bg-transparent');
        }
    });
});
