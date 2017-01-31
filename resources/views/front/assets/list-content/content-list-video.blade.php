<div class="col col-xs-6 col-sm-{{$colsm}} col-md-{{$colmd}} col-lg-3 {{!empty($data['hide']) ? 'sm-lg':''}}" >
  <div class="mini-video">
    <div class="content-mini">


    <a href="{{$content->getFullUrl()}}"><img src="{{$content->getImageByType(3)}}" alt=""></a>

    @if($content->tags[0]->id == 1)<div class="tag programa blue-bloque">Nacional</div>
    @elseif($content->tags[0]->id == 2) <div class="tag programa red-bloque">Internacional</div>
    @elseif($content->tags[0]->id == 3) <div class="tag programa especial-bloque">Especiales</div>
    @endif
    <a href="{{$content->getFullUrl()}}"><p class="title">{{str_limit($title,60)}}</p></a>
     @include('front.assets.stats')
    </div>
  </div>
</div>
