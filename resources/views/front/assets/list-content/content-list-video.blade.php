<div class="col col-xs-12 col-sm-{{$colsm}} col-md-{{$colmd}} col-lg-3 {{!empty($data['hide']) ? 'sm-lg':''}}" >
  <div class="mini-video">
    <div class="content">


    <a href="{{$content->getFullUrl()}}"><img src="{{$img_url}}" alt=""></a>
    <a href="{{$content->getFullUrl()}}"><p class="title">{{str_limit($title,50)}}</p></a>
    @include('front.assets.stats')
    </div>
  </div>
</div>
