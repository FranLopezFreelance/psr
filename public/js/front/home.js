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

    infiniteScroll();

    $(".slider-home").extraSlider({
		type: 'fade',
    auto: 7,
    speed:0.6,
	});

  $(".slider-articulos").extraSlider({
  auto: 7,
  speed:0.6,
  });
  $(".slider-libros").extraSlider({
  auto: 7,
  speed:0.6,
  });

});

$(window).resize(function() {
    resolveSlider(), resolveHeader()
});

function doCarousel(){

}

function verMasVideos(){
  var page = $('.videos-content').data('next-page');
  if(page !== null) {
    $('.spinner').show();
    $.get('moreHomeVideos?page='+page, function(data){
        //$('.spinner').hide();
        $('.videos-content').append(data.videos);
      if(data.next_page!=null)  $('.videos-content').data('next-page', ++page);
      else $('.verMasVideos').remove();
    });
  }
}

function getMiniVideo(obj){
  var str = '';
  str+='<div class="col col-xs-12 col-sm-6 col-md-3" >';
  str+='<a class="mini-video" href="home.php">';
  str+='<div class="img-center-responsive"><img src="img/test/video-'+obj.img+'.jpg" alt=""></div>';
  str+='<p class="title">'+obj.title+'</p>';
  str+='<span class="pull-left">17 diciembre 2016 | 15:26 GMT<span class="views">10.100</span></span>';
  str+='</a></div>';
  return str;
}

function showVideo($url){
  console.log($url);
  var video='<iframe id="ytplayer" type="text/html" width="100%" height="360"';
  video+='  src="'+$url+'"';
  video+='frameborder="0"></iframe>"';
  $('.video-container').append(video);
  $('.btn-video').remove();
}

function infiniteScroll(){
  $(window).scroll(fetchPosts);

  function fetchPosts() {

      var page = $('.videos-content').data('next-page');

      if(page !== null) {

          clearTimeout( $.data( this, "scrollCheck" ) );

          $.data( this, "scrollCheck", setTimeout(function() {
              var scroll_position_for_posts_load = $(window).height() + $(window).scrollTop() + 100;

              if(scroll_position_for_posts_load >= $(document).height()) {
                  $.get('moreHomeVideos?page='+page, function(data){
                        $('.videos-content').append(data.videos);
                      if(data.next_page!=null)  $('.videos-content').data('next-page', ++page);
                      else $('.videos-content').data('next-page', null);

                  });
              }
          }, 350))

      }
  }

}
