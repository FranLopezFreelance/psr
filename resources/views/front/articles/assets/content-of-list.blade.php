
<div class="row ">
  <div class="content-of-list">
    <div class="col-sm-4">
      <a href="{{$content->getFullUrl()}}"><img src="{{$img_url}}" alt=""></a>
    </div>
    <div class="col-sm-8">
    <a class="title" href="{{$content->getFullUrl()}}">{{$title}}</a>
    @include('front.assets.stats')
    <p>{{str_limit($text,500)}}</p>
    <a class="vermas" href="{{$content->getFullUrl()}}">Leer Más...</a>
    </div>
  </div>
  <div class="col-xs-12 border-bottom"></div>


</div>
