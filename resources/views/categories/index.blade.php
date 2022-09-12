<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    @vite(['resources/js/delete.js', 'resources/js/tree.js', 'resources/js/bootstrap.js', 'resources/bootstrap/css/bootstrap.min.css', 'resources/font-awesome/css/font-awesome.min.css', 'resources/js/jquery-1.10.2.min.js', 'resources/bootstrap/js/bootstrap.min.js'])
    
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
 
</head>
    

<body>

    <div class="container">
        <div class="container">
            <h2>Animals</h2>
        </div>    

        <div class="container">
            <div class="col-md-4"> 
                <ul id="treeview">
                    <x-categories :categories="$categories" /> 
                </ul>
            </div>
        </div>
        <div class="w-20 mx-4 my-4">
            <a class="float-right" href="{{ route('categories.create') }}">
                <button type="button" class="btn btn-success">Dodaj kategorię</button>
            </a>
        </div>
    </div>

</body>
