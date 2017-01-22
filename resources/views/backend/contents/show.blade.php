@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>
                <a href="/backend/sections">Contenidos</a>
                <a class="btn btn-success article-create" href="/backend/contents/{{ $section->id }}/createBySection">Crear</a>
                <a class="btn btn-default btn-xs pull-right" href="/" target="_blank">Web</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading"><h3>Sub Sección</h3>
            </div>
              <div class="panel-body">
                  <ul>
                      @forelse($sections as $section)
                        @if($section->id == $subSection->id)
                          <li>{{ $subSection->name }}</li>
                            <ul>
                              @forelse($subSection->contents as $content)
                                <li><a href="/backend/contents/{{ $content->id }}">{{ $content->title }}</a></li>
                              @empty
                                No hay contenidos aquí.
                              @endforelse
                            </ul>
                        @else
                          <li><a href="/backend/subSection/contents/{{ $section->id }}">{{ $section->name }}</a></li>
                        @endif
                      @empty
                      @endforelse
                  </ul>
              </div>
          </div>
      </div>
      <div class="col-md-8">
          <div class="panel panel-default">
              <div class="panel-heading">
                <h3>{{ $content->title }}</h3>
              </div>
              <div class="panel-body">
                @if(isset($message))
                    <div class="alert alert-success message">
                        <h5>{{ $message }}</h5>
                    </div>
                @endif
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{ $content->video_id }}" frameborder="0" allowfullscreen>
                </iframe>
                <h5><b>Título HTML: </b> {{ $content->html_title }}</h5>
                <h5><b>URL: </b> {{ $content->url }}</h5>
                <h5><b>Descripción: </b> {{ $content->description }}</h5>
                <h5><b>Desc. Social: </b> {{ $content->social_desc }}</h5>
                <h5><b>Vistas: </b> {{ $content->getViewsAttribute(1) }}</h5>
                <h5><b>Fecha: </b> {{ $content->renderDate() }}</h5>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
