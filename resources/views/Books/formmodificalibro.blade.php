<h1>Modifica Libro</h1>

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nome libro</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}">
    </div>
    <button type="submit" class="btn btn-primary">Salva Modifiche</button>
</form>
