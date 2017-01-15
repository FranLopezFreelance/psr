<div class="row ">
  <div class="content-of-list">
    <div class="col-sm-3">
      <a href="{{$url}}"><img src="{{$path}}{{$img}}" alt=""></a>
    </div>
    <div class="col-sm-9">
    <a class="title" href="{{$url}}">{{$title}}</a>
    @include('front.assets.stats')
    <p>{{$txt}}</p>
    <a class="vermas" href="{{$url}}">Leer Más...</a>
    </div>
  </div>
  <div class="col-xs-12 border-bottom"></div>


</div>
