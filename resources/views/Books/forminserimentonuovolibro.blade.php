<h1>Nuovo libro</h1>

<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Nome libro</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il nome del libro">

        <label for="genere">Nome genere</label>
        <input type="text" class="form-control" id="genere" name="genere"
            placeholder="Inserisci il genere del libro">

        <label for="title">anno pubblicazione</label>
        <input type="text" class="form-control" id="pubblicazione" name="pubblicazione"
            placeholder="Inserisci l'anno di pubblicazione">
    </div>
    <button type="submit" class="btn btn-primary">Salva</button>
</form>
