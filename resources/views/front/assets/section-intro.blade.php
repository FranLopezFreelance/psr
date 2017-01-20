
<div class="row">
  <div class="col-xs-12">
    <h1>{{$target->name}}</h1>
    <div class="breadcumb">
    @foreach($target->getBreadcrumb() as $link)
        <a href="/{{$link['url']}}">{{$link['name']}}</a> <span class="b-separator">/</span>
    @endforeach
    </div>

  </div>
  <div class="col-sm-6">
    <img class="intro" src="{{$target->social_img}}" alt="">
  </div>
  <div class="col-sm-6">
    <p>{{$target->description}}</p>
    @include('front.assets.addthis')
  </div>

</div>
