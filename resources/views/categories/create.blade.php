<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="w-20 mx-4 my-4">
        <div><h2>Dodawanie kategorii</h2></div>
    </div>
    <div class="w-20 mx-4 my-4">
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Nazwa kategorii</label>
                <input id="title" name="title" type="text" pattern="[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ ]*" minlength="2" maxlength="100" class="form-control @error('title') is-invalid @enderror" required placeholder="Enter title">
            
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="parent">Kategoria nadrzędna (rodzic)</label>
                <select id="parent_id" class="form-control" name="parent_id">
                    <option value="0">Brak</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Dodaj</button>
        </form>
    </div>
</body>