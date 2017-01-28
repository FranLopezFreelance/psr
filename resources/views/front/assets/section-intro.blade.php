<div class="section-intro">


<div class="row">
  <div class="col-xs-12">
    <h1 class="hidden-sm hidden-md hidden-lg">{{$target->name}}</h1>
    <div class="breadcumb">
    @foreach($target->getBreadcrumb() as $link)
        <a href="{{$link['url']}}">{{$link['name']}}</a> <span class="b-separator">>></span>
    @endforeach
    </div>

  </div>
  <div class="col-sm-6">
    <img class="intro" src="{{$target->social_img}}" alt="">
  </div>
  <div class="col-sm-6">
    <h1 class="hidden-xs">{{$target->name}}</h1>
    <p>{{$target->description}}</p>
    @include('front.assets.addthis')
  </div>
<div class="border-bottom-hard col-xs-12"></div>
</div>
</div>
