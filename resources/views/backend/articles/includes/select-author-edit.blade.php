<select id="author_id" class="form-control" name="author_id" required>
  <option value="0">Elegir...</option>
  @forelse($authors as $author)
    @if($article->author_id == $author->id || old('author_id') == $author->id)
      <option value="{{ $author->id }}" selected>{{ $author->name }}</option>
    @else
      <option value="{{ $author->id }}">{{ $author->name }}</option>
    @endif
  @empty
    <option value="0">No hay autores</option>
  @endforelse
</select>
