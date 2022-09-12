<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="w-20 mx-4 my-4">
        <div><h2>Edycja kategorii</h2></div>
    </div>
    <div class="w-20 mx-4 my-4">
        <form method="POST" action="{{ route('categories.update', $category->id) }}">
            @csrf
            <div class="form-group">
                <label for="title">Nazwa kategorii</label>
                <input id="title" name="title" type="text" pattern="[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ ]*" maxlength="100" minlength="2" class="form-control" required value="{{ $category->title }}">
            </div>
            <div class="form-group">
                <label for="parent">Kategoria nadrzędna (rodzic)</label>
                <select id="parent_id" class="form-control" name="parent_id">
                    <option value="0">Brak</option>
                    @foreach($categories as $category_old)
                        @if($category->id != $category_old->id && !$category->checkIfChild($category_old->id))
                            <option value="{{ $category_old->id }}" @if($category_old->id == $category->parent_id) selected @endif>{{ $category_old->title }}</option>
                        @endif
                    @endforeach
                </select>
            </div>


            {{-- <div class="form-group">
                <label for="childre">dzieci kategorii</label>
                <select name="" class="form-control">
                    @foreach($category->getChildren() as $row) 
                        <option value="1">{{ $row->title }}</option>
                    @endforeach
                </select>
            </div> --}}

            
            <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
        </form>
    </div>
</body>