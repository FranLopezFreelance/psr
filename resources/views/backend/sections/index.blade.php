@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>
                <a href="/backend/sections">Secciones</a>
                <a class="btn btn-success article-create" href="/backend/sections/create">Crear</a>
                <a class="btn btn-default btn-xs pull-right" href="/articulos" target="_blank">Web</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading"><h3>Secciones Principales</h3>
            </div>
              <div class="panel-body">
                  <ul>
                    @forelse($sections as $principalSection)
                      <li><a href="/backend/sections/get/{{ $principalSection->id }}">{{ $principalSection->name }}</a></li>
                    @empty
                      No hay secciones aquí.
                    @endforelse
                  </ul>
              </div>
          </div>
      </div>
      <div class="col-md-8">
          <div class="panel panel-default">
              <div class="panel-heading"><h3>{{ $section->name }} / Sub Secciones</h3>
              </div>
              <div class="panel-body">
                @if(isset($message))
                    <div class="alert alert-success message">
                        <h5>{{ $message }}</h5>
                    </div>
                @endif

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#articles" aria-controls="articles" role="tab" data-toggle="tab">Artículos</a></li>
                  <li role="presentation"><a href="#videos" aria-controls="videos" role="tab" data-toggle="tab">Videos</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="articles">
                    <ul class="list-group">
                      <br />
                      @forelse($subSections as $subSection)
                        @if($subSection->typesection_id == 1)
                          <li class="list-group-item">
                            <a href="/backend/sections/{{ $subSection->id }}">{{ $subSection->name }}</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['sections.destroy', $subSection->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs pull-right']) !!}
                            {!! Form::close() !!}
                            <a href="/backend/sections/{{ $subSection->id }}/edit" class="btn btn-primary btn-xs pull-right article-edit">Editar</a>
                          </li>
                          @endif
                      @empty
                        - No hay subsecciones aquí.
                      @endforelse
                    </ul>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="videos">
                    <ul class="list-group">
                      <br />
                      @forelse($subSections as $subSection)
                        @if($subSection->typesection_id == 2)
                          <li class="list-group-item">
                            <a href="/backend/sections/{{ $subSection->id }}">{{ $subSection->name }}</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['sections.destroy', $subSection->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs pull-right']) !!}
                            {!! Form::close() !!}
                            <a href="/backend/sections/{{ $subSection->id }}/edit" class="btn btn-primary btn-xs pull-right article-edit">Editar</a>
                          </li>
                        @endif
                      @empty
                        - No hay subsecciones aquí.
                      @endforelse
                    </ul>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
