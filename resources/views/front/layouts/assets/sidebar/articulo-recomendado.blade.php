
<div class="">

  <!--  @include('front.assets.stats')-->
<div class="articulo-recomendado">


    <div class="col-xs-6">
      <a href="{{$content->getFullUrl()}}"><img class="full-width" src="{{$content->getImageByType(3)}}" alt=""></a>
    </div>
    <div class="col-xs-6">
        <a href="{{$content->getFullUrl()}}">{{str_limit($content->title,80)}}</a>
      </div>
<div class="clearfix"></div>
</div>

</div>
