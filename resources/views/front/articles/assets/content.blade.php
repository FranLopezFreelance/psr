<div class="content">

<div class="row">
  <div class="col-xs-12">
    <h1>{{$content->title}}</h1>
    <div class="bottom-line col-xs-12"></div>


    <div class="breadcumb">
    @foreach($target->getBreadcrumb() as $link)
        <a href="/{{$link['url']}}">{{$link['name']}}</a> <span class="b-separator">>></span>
    @endforeach
    </div>
    @include('front.assets.stats')
  </div>
  <div class="col-xs-12">
    @if ($video)
    <a class="btn-video" onclick="showVideo('{{$content->video_id}}')"><img class="main-image" src="{{$content->getImageByType(1)}}" alt=""></a>
    <div class="video-container hidden"></div>
    @include('front.assets.addthis')
    @else
    <img class="main-image" src="{{$content->getImageByType(1)}}" alt="">
    @include('front.assets.addthis')
    @endif
      @if(!Auth::guest())
        <a class="btn btn-success pull-right article-create" href="/backend/contents/{{ $content->id }}/edit">Editar</a>
      @endif
  </div>
  <div class="col-xs-12">
    <div class="text">{!!$content->text!!}</div>
  </div>
  <div class="col-xs-12">

    @if($video == false && $content->author)
    <div class="col-xs-12 col-sm-6">
      <div class="author {{($content->tags()->count()) ? 'border':''}}">
        <img src="{{$content->author->getFullImgUrl()}}" alt="">
        <span>{{$content->author->name}}</span>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6">
      <div class="tags">
        @if($content->tags()->count())<span>En éste artículo: </span>@endif
          @foreach($content->tags as $tag)
          <a class="tag" href="{{$tag->getFullUrl()}}">{{$tag->name}}</a>
        @endforeach
      </div>
    </div>
    @else
    <div class="tags">
      @if($content->tags()->count())<span>En éste artículo: </span>@endif
        @foreach($content->tags as $tag)
        <a class="tag {{$tag->color}}" href="{{$tag->getFullUrl()}}">{{$tag->name}}</a>
      @endforeach
    </div>
    @endif
  </div>
  <div class="bottom-line col-xs-12"></div>

</div>
</div>
