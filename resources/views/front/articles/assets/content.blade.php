<div class="content">


<div class="row">
  <div class="col-xs-12">
    <h1>{{$content->title}}</h1>
@include('front.assets.addthis')
    <div class="breadcumb">
    @foreach($target->getBreadcrumb() as $link)
        <a href="/{{$link['url']}}">{{$link['name']}}</a> <span class="b-separator">/</span>
    @endforeach
    </div>
    @include('front.assets.stats')
  </div>
  <div class="col-xs-12">
    @if ($video)
    <button class="btn-video" onclick="showVideo('{{$content->video_id}}')"><img class="main-image" src="{{$path}}{{$img}}" alt=""></button>
    <div class="video-container">
      <!--<iframe id="ytplayer" type="text/html" width="640" height="360"
  src="{{$urlVideo}}"
  frameborder="0" ></iframe>-->
    </div>
    @else
    <img class="main-image" src="{{$content->img_url}}" alt="">
    @endif

</div>
  <div class="col-xs-12">
    <p class="text">{{$content->text}}</p>
  </div>
  <div class="col-xs-12">
    <div class="col-xs-12 col-sm-6">
      <div class="author">
        <img src="/img/authors/giuliano.png" alt="">
        <span>Lic. héctor Giuliano</span>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6">
      <div class="tags">
        <span>En éste artículo: </span>
        <a class="tag">Moneda soberana</a>
        <a class="tag">Mercosur</a>
        <a class="tag">Energía</a>        
        <a class="tag">Medio Ambiente</a>
        <a class="tag">Economía</a>
        <a class="tag">Política</a>
        <a class="tag">Nueva República</a>
      </div>
    </div>
  </div>
  <div class="bottom-line col-xs-12"></div>

</div>
</div>
