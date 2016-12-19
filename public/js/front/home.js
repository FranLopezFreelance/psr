function resolveHeader() {
    headerH = $(window).width() > 768 ? 180 : 285
}

function resolveSlider() {
    var a = 80,
        o = 762,
        r = 1665,
        e = 762,
        m = $(window).width();
        m = 1410;
    o = e * m / r, a = $(window).height() - a;
    a = Math.min(a, o);
    //$(".extra-slider").css("height", a + "px");
}
var headerH = 80;

$(window).bind("scroll", function() {
    $(window).scrollTop() > headerH ? ($(".site").addClass("fixed"), $(".menu").addClass("navbar-fixed-top")) : ($(".site").removeClass("fixed"), $(".menu").removeClass("navbar-fixed-top"))
});

$("document").ready(function() {
    resolveSlider(), resolveHeader();
    $(".extra-slider").extraSlider({
		type: 'fade',
    auto: 7,
    speed:0.6,
	});
});

$(window).resize(function() {
    resolveSlider(), resolveHeader()
});

function doCarousel(){

}
