<select class="form-control" name="section_id" required>
  <option value="0">Elegir...</option>
  @forelse($sections as $section)
    @if($section->level == 1)
      <optgroup label="{{ $section->name }}">
        @forelse($section->childrens as $children)
          @if($article->section_id == $children->id || old('section_id') == $children->id)
            <option value="{{ $children->id }}" selected>{{ $children->name }}</option>
          @else
            <option value="{{ $children->id }}">{{ $children->name }}</option>
          @endif
        @empty
        @endforelse
      </optgroup>
    @endif
  @empty
    <option value="0">No hay secciones</option>
  @endforelse
</select>
