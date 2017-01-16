<div class="row">
  <div class="col-xs-12">
    <h1>{{$title}}</h1>
    <a href="#">Economía</a> / <a href="#">Artículo</a>
  </div>
  <div class="col-sm-6">
    <img class="intro" src="{{$path}}{{$img}}" alt="">
  </div>
  <div class="col-sm-6">
    <p>{{$txt}}</p>
    @include('front.articles.assets.addthis')
  </div>

</div>
