function resolveHeader() {
    headerH = $(window).width() > 768 ? 80 : 80
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

function resolveSidebar(){
  if($(window).width() > 990){
    $('body').removeClass('portrait');
    infiniteScroll(); //MD BOOTSTRAP
  }
  else{
    $('body').addClass('portrait');
    if($('.list-content').length )$(window).unbind('scroll',fetchPosts);
  }
}

$("document").ready(function() {
    resolveSlider(), resolveHeader(),resolveSidebar();

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
    resolveSlider(), resolveHeader(),resolveSidebar();
});

function verMasVideos(){
  var page = $('.videos-content').data('next-page');
  if(page !== null && page !== undefined && page !== '') {
    $('.spinner').addClass('show');
    $.get({url:'moreHomeVideos?page='+page,cache:false}, function(data){
        $('.spinner').removeClass('show');
        $('.videos-content').append(data.videos);
      if(data.next_page!=null)  $('.videos-content').data('next-page', ++page);
      else $('.verMasVideos').remove();
    });
  }
}

function showVideo($url){
  //console.log($url);
  var video='<iframe id="ytplayer" type="text/html" width="100%" height="360"';
  video+='  src="http://www.youtube.com/embed/'+$url+'/?autoplay=1&playlist=F7S61o-_4C0"';
  video+='frameborder="0"></iframe>';
  $('.video-container').append(video);
  $('.video-container').removeClass('hidden');
  $('.btn-video').remove();
}

function showModalVideo($url){
  var video='<iframe id="ytplayer" type="text/html" width="100%" height="360"';
  video+='  src="http://www.youtube.com/embed/'+$url+'/?autoplay=1"';
  video+='frameborder="0"></iframe>"';
  $('.video-container').append(video);
  $('.video-container').removeClass('hidden');
  $('body').addClass('hard-backdrop');
  $('#modal-video').modal();
}

$('#modal-video').on('hidden.bs.modal', function () {
  $('.video-container').empty();
  $('.video-container').addClass('hidden');
  $('body').removeClass('hard-backdrop');
})

function loadContent(){
  var page = $('.list-content').data('next-page');

  if(page == null || page == undefined || page == '') return;

  $('.spinner').addClass('show');
  $.get({url:page,cache: false}, function(data){
    //console.log(data.next_page);
    $('.list-content').append(data.content);
    $('.list-content').data('next-page', data.next_page);
    $('.spinner').removeClass('show');
  });
}



function fetchPosts() {

    var page = $('.list-content').data('next-page');
 //console.log(page);
    if(page !== null && page !== undefined && page !== '') {

        clearTimeout( $.data( this, "scrollCheck" ) );

        $.data( this, "scrollCheck", setTimeout(function() {
            var scroll_position_for_posts_load = $(window).height() + $(window).scrollTop() + 500;

            if(scroll_position_for_posts_load >= $(document).height()) {
                $('.spinner').addClass('show');
                $.get({url:page,cache: false}, function(data){
                  //console.log(data.next_page);
                  $('.list-content').append(data.content);
                  $('.list-content').data('next-page', data.next_page);
                  $('.spinner').removeClass('show');
                });
            }
        }, 350))

    }
}

function infiniteScroll(){
  if($('.list-content').length )$(window).scroll(fetchPosts);
}
