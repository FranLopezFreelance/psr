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
            <div class="panel-heading"><h3>Secciones</h3>
            </div>
              <div class="panel-body">
                  <ul>
                    @forelse($menuSections as $principalSection)
                        <li><a href="/backend/contents/section/{{ $principalSection->id }}">{{ $principalSection->name }}</a></li>
                          @if($principalSection->id == $section->id)
                            <ul>
                              @forelse($principalSection->childrens as $children)
                                <li><a href="/backend/contents/subSection/{{ $children->id }}">{{ $children->name }}</a></li>
                              @empty

                              @endforelse
                            </ul>
                          @endif
                    @empty
                      No hay secciones aquí.
                    @endforelse
                  </ul>
              </div>
          </div>
      </div>
      <div class="col-md-8">
          <div class="panel panel-default">
              <div class="panel-heading">
                <h3>{{ $subSection->name }}</h3>
              </div>
              <div class="panel-body">
                @if(isset($message))
                    <div class="alert alert-success message">
                        <h5>{{ $message }}</h5>
                    </div>
                @endif
                    <ul class="list-group">
                      @if(isset($contents))
                        @forelse($contents as $content)
                            <li class="list-group-item">
                              <a href="/backend/contents/{{ $content->id }}">{{ $content->title }}</a>
                              {!! Form::open(['method' => 'DELETE','route' => ['contents.destroy', $content->id],'style'=>'display:inline']) !!}
                              {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs pull-right']) !!}
                              {!! Form::close() !!}
                              <a href="/backend/contents/{{ $content->id }}/edit" class="btn btn-primary btn-xs pull-right article-edit">Editar</a>
                            </li>
                        @empty
                          - No hay contenidos aquí.
                        @endforelse
                      @endif
                    </ul>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
