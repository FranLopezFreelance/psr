@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>
                <a href="/backend/contents/section/2  ">Contenidos</a>
                <!-- <a class="btn btn-success article-create" href="/backend/contents/createBySection/{{ $section->id }}">Crear</a> -->
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
                      <li><a href="/backend/sections/{{ $principalSection->id }}">{{ $principalSection->name }}</a></li>
                    @empty
                      No hay secciones aquí.
                    @endforelse
                  </ul>
                  
                  <ul>
                    @forelse($menuSections as $principalSection)
                      @if($principalSection->childrens()->count() > 0)
                        <li><a href="/backend/contents/section/{{ $principalSection->id }}">{{ $principalSection->name }} ({{ $principalSection->childrens()->count() }})</a></li>
                      @else
                        <li><a href="">{{ $principalSection->name }} ({{ $principalSection->childrens()->count() }})</a></li>
                      @endif
                          @if($principalSection->id == $section->id)
                            <ul>
                              @forelse($principalSection->childrens->where('active', 1) as $children)
                                @if($children->childrens()->count() > 0)
                                  <li><a href="">{{ $children->name }}</a></li>
                                    <ul>
                                      @foreach($children->childrens->where('active', 1) as $subChildren)
                                        <li><a href="/backend/contents/subSection/{{ $subChildren->id }}">{{ $subChildren->name }}</a></li>
                                      @endforeach
                                    </ul>
                                @else
                                  <li><a href="/backend/contents/subSection/{{ $children->id }}">{{ $children->name }}</a></li>
                                @endif
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
                <h4>{{ $subSection->parent->name }} / {{ $subSection->name }}
                  <a class="btn btn-success article-create" href="/backend/contents/createBySection/{{ $section->id }}/{{ $subSection->id }}">Crear</a>
                </h4>
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
                              <div class="actions">
                                <a href="/backend/contents/{{ $content->id }}/edit" class="btn btn-primary btn-xs article-edit">Editar</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['contents.destroy', $content->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger pull-right btn-xs']) !!}
                                {!! Form::close() !!}
                              </div>
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
