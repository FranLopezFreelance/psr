<div class="col col-xs-6 col-sm-{{$colsm}} col-md-{{$colmd}} col-lg-3 {{!empty($data['hide']) ? 'sm-lg':''}}" >
  <div class="mini-video">
    <div class="content-mini">


    <a href="{{$content->getFullUrl()}}"><img src="{{$content->getImageByType(3)}}" alt=""></a>
    <a href="{{$content->getFullUrl()}}"><p class="title {{!(strlen($title)>40)?'':'short'}}">{{str_limit($title,50)}}</p></a>
     @include('front.assets.stats')
    </div>
  </div>
</div>
