<div class="home-videos container-fluid">
  <h4 class="title">Último Programa</h4>
  <div class="row">
    <div class="col-xs-12 col-md-6 video-nacional">
      <div class="video img-center-responsive">
        <img src="img/test/video-1.jpg" alt="">
        <span>Chau 2016!!!</span>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 video-internacional">
      <div class="video img-center-responsive">
        <img src="img/test/video-2.jpg" alt="">
        <span>PSR Internacional: "The Economist": mensajes extraños</span>
      </div>
    </div>
  </div>
  </div>

  <div class="home-mas-videos container-fluid">
  <h4>Últimos Programas</h4>
  <div class="videos-content">
    <div class="row">
      @include('front.home.assets.mini-video',array('hide'=>false,'img'=>1,'title'=>"“Retiro espiritual” macrista...ZZZZZZZZ..."))
      @include('front.home.assets.mini-video',array('hide'=>false,'img'=>1,'title'=>"DEUDA, RECESIÓN, DESEMPLEO..."))
      @include('front.home.assets.mini-video',array('hide'=>false,'img'=>2,'title'=>"RECALCULANDO!!! Avance imparable de los nacionalismos..."))
      @include('front.home.assets.mini-video',array('hide'=>true,'img'=>2,'title'=>"Castro OUT / Trump IN"))
    </div>
  </div>

    <button type="button" name="button" onClick=verMasVideos()>Ver Más</button>
    </div>
</div>
