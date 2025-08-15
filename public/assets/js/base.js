$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $("header")
                .removeClass("bg-transparent")
                .addClass("bg-white shadow-lg");
            $(".authenticated-menu").hide();
        } else {
            $("header")
                .removeClass("bg-white shadow-lg")
                .addClass("bg-transparent");
        }
    });
    $(".companies-hire").slick({
        dots: false,
        infinite: true,
        speed: 1000,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false,
                    arrows: false,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false,
                    arrows: false,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                },
            },
        ],
    });

    $(".card-category").hover(
        function () {
            $(this).find("i, h3, a").addClass("text-h");
        },
        function () {
            $(this).find("i, h3, a").removeClass("text-h");
        }
    );
    $(".authenticated-menu").hide();
    $(".authenticated-btn").on("click", function () {
        $(".authenticated-menu").fadeIn();
    });
    $('main').click(function () {
        $(".authenticated-menu").hide();
    });
});
