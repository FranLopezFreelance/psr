<div class="col col-xs-12 col-sm-{{$colsm}} col-md-{{$colmd}} col-lg-3 {{!empty($data['hide']) ? 'sm-lg':''}}" >
  <a class="mini-video" href="home.php">
    <div class="img-center-responsive"><img src="{{$path}}{{$img_url}}" alt=""></div>
    <p class="title">{{$title}}</p>
    @include('front.assets.stats')
  </a>
</div>
