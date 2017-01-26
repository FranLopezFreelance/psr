
<div class="row ">
  <div class="content-of-list">
    <div class="col-xs-4 col-sm-4">
      <a href="{{$content->getFullUrl()}}"><img src="{{$img_url}}" alt=""></a>
    </div>
    <div class="col-xs-8 col-sm-8">
    <a class="title" href="{{$content->getFullUrl()}}">{{$title}}</a>
    @include('front.assets.stats')
    <div class="hidden-xs">{!!str_limit($text,400)!!}</div>
    <a class="vermas hidden-xs" href="{{$content->getFullUrl()}}">Leer Más</a>
    </div>
  </div>
  <div class="col-xs-12 border-bottom"></div>


</div>
