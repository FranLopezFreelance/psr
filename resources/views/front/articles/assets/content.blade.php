<div class="row">
  <div class="col-xs-12">
    <h1>{{$title}}</h1>
    <a href="#">Economía</a> / <a href="#">Artículo</a>
  </div>
  <div class="col-xs-12">
    @if ($video)
    <button class="btn-video" onclick="showVideo('{{$urlVideo}}')"><img class="main-image" src="{{$path}}{{$img}}" alt=""></button>
    <div class="video-container">
      <!--<iframe id="ytplayer" type="text/html" width="640" height="360"
  src="{{$urlVideo}}"
  frameborder="0" ></iframe>-->
    </div>
    @else
    <img class="main-image" src="{{$path}}{{$img}}" alt="">
    @endif
    @include('front.assets.addthis')
  </div>
  <div class="col-xs-12">
    <p>{{$txt}}</p>
  </div>

</div>
