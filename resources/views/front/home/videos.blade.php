<div class="home-videos container-fluid">
  <h4 class="title">Último Programa</h4>
  <div class="row">
    <div class="col-xs-12 col-md-6 video-nacional">
      <div class="video img-center-responsive">
        <img src="/img/test/video-1.jpg" alt="">
        <span>Chau 2016!!!</span>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 video-internacional">
      <div class="video img-center-responsive">
        <img src="/img/test/video-2.jpg" alt="">
        <span>PSR Internacional: "The Economist": mensajes extraños</span>
      </div>
    </div>
  </div>
  </div>

  <div class="home-mas-videos container-fluid">
  <h4 class="title">Programas Anteriores</h4>
  <div class="clearfix"></div>
  <div class="videos-content" data-next-page="2">

      <?php $colsm = 3; $colmd = 3; ?>
      @foreach($videos as $content)

      @include('front.assets.list-content.content-list-video',$content)

      @endforeach
<div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
<div class="row">
  <div class="verMas col-xs-12">
    <a class="verMasVideos" onClick=verMasVideos()>Ver Más</a>
    <div class="spinner-wrapper home">@include('front.assets.material-loading')</div>
  </div>

</div>

    </div>
</div>
