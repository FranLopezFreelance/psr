<div class="home-videos container-fluid">
  <h4 class="title">Último Programa</h4>
  <div class="row">
    <div class="col-xs-12 col-md-6 video-nacional">
      <div class="video img-center-responsive">
        <img src="{{$path}}/img/test/video-1.jpg" alt="">
        <span>Chau 2016!!!</span>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 video-internacional">
      <div class="video img-center-responsive">
        <img src="{{$path}}/img/test/video-2.jpg" alt="">
        <span>PSR Internacional: "The Economist": mensajes extraños</span>
      </div>
    </div>
  </div>
  </div>

  <div class="home-mas-videos container-fluid">
  <h4>Últimos Programas</h4>
  <div class="clearfix"></div>
  <div class="videos-content" data-next-page="1">

      <?php $colsm = 3; $colmd = 3;?>
      @include('front.assets.list-content.content-list-video',array('img_url'=>'/img/test/video-1.jpg','title'=>"“Retiro espiritual” macrista...ZZZZZZZZ..."))
      @include('front.assets.list-content.content-list-video',array('img_url'=>'/img/test/video-1.jpg','title'=>"DEUDA, RECESIÓN, DESEMPLEO..."))
      @include('front.assets.list-content.content-list-video',array('img_url'=>'/img/test/video-2.jpg','title'=>"RECALCULANDO!!! Avance imparable de los nacionalismos..."))
      @include('front.assets.list-content.content-list-video',array('img_url'=>'/img/test/video-2.jpg','title'=>"Castro OUT / Trump IN"))
      <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
<div class="row">
  <button type="button" name="button" class="verMasVideos" onClick=verMasVideos()>Ver Más</button>
  @include('front.assets.material-loading')
</div>

    </div>
</div>
