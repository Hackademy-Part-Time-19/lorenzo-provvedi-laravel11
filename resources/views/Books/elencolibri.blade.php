<h1>Elenco Categorie</h1>

<a href="{{ 'Books/forminserimentonuovolibro' }}" class="btn btn-primary">Nuovo libro</a>

<table class="table">
    <thead>
        <tr>

        </tr>
    </thead>
    <tbody>
        @foreach ($books as $Book)
            <tr>
                <td>{{ $Book->id }}</td>
                <td>{{ $Book->name }}</td>
                <td>
                    <a href="{{ route('books.edit', $Book->id) }}" class="btn btn-sm btn-info">Modifica</a>
                    <form action="{{ route('books.destroy', $Book->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Cancella</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
