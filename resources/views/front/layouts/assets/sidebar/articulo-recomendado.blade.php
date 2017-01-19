
<div class="row">
  <a class=" articulo-recomendado"  href="{{$content->getFullUrl()}}">
    <div class="col-xs-12">
    <h5 class="title">{{$content->title}}</h5>
  <!--  @include('front.assets.stats')-->
  </div>
    <div class="col-xs-6">
      <img src="{{$content->img_url}}" alt="">
    </div>
    <div class="col-xs-6">
        <p>{{str_limit($content->text,80)}}</p>
      </div>

</a>
</div>
