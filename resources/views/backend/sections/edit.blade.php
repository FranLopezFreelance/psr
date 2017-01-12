@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><a href="/backend/sections">Secciones</a> / Editar</h4></div>
                <div class="panel-body">
                  <a class="btn btn-primary" href="/backend/sections/{{ $section->id }}">Volver a la Sección</a>
                  <hr />

                  @if(isset($message))
                    <div class="col-md-10 col-md-offset-1">
                        <div class="alert alert-success message">
                            <h5>{{ $message }}</h5>
                        </div>
                    </div>
                  @endif

                  <form class="form-horizontal" role="form" method="POST" action="/backend/sections/{{ $section->id }}">

                      {{ csrf_field() }}
                      {{ method_field('PUT') }}

                      <input name="_method" type="hidden" value="PUT">

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Nombre</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control title" name="name"
                                @if(old('title'))
                                  value="{{ old('name') }}"
                                @else
                                  value="{{ $section->name }}"
                                @endif
                              required>

                              @if ($errors->has('title'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                          <label for="level" class="col-md-4 control-label">Nivel</label>
                          <div class="col-md-6">
                              <select class="form-control level" name="level" disabled>
                                  @if($section->level == 1)
                                    <option value="1" selected>Principal</option>
                                    <option value="2">Sub Sección</option>
                                  @else
                                    <option value="1">Principal</option>
                                    <option value="2" selected>Sub Sección</option>
                                  @endif
                              </select>

                              @if ($errors->has('level'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('level') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('section_id') ? ' has-error' : '' }} principal">
                          <label for="section_id" class="col-md-4 control-label">Sección Principal</label>

                          <div class="col-md-6">

                              @include('backend.sections.includes.select-section-edit')

                              @if ($errors->has('section_id'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('section_id') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                          <label for="url" class="col-md-4 control-label">URL</label>

                          <div class="col-md-6">
                              <input id="url" type="text" class="form-control url" name="url"
                                @if(old('url'))
                                  value="{{ old('url') }}"
                                @else
                                  value="{{ $section->url }}"
                                @endif
                              required>

                              @if ($errors->has('url'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('url') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="description" class="col-md-4 control-label">Descripción</label>

                          <div class="col-md-6">
                              @if(old('description'))
                                <textarea id="description" class="form-control" name="description" required/>{{ old('description') }}</textarea>
                              @else
                                <textarea id="description" class="form-control" name="description" required/>{{ $section->description }}</textarea>
                              @endif

                              @if ($errors->has('description'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('description') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Guardar Cambios
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
