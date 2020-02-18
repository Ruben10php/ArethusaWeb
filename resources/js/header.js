function parallax_height() {
    let scroll_top = $(this).scrollTop();
    let sample_section_top = $(".paralax_section").offset().top;
    let header_height = $(".paralax_text").outerHeight();
    $(".paralax_section").css({"margin-top": header_height});
    $(".paralax_banner").css({height: header_height - scroll_top});
}

parallax_height();
$(window).scroll(function () {
    parallax_height();
});
$(window).resize(function () {
    parallax_height();
});
