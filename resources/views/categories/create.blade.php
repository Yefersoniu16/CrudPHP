<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edg">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')


    @section('content')
    <h1>Crear categoría</h1>
    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <div class="form-group">

             <div class="mb-3">
                <label for="category_name" class="form-label">Nombre categoría</label>
                <input class="form-control" type="text" name="category_name" id = "category_name"
                    placeholder="Category name">
            </div>

            <div class="mb-3">
                <label for="active">Activa</label>
                <input class="form-check-input" type="checkbox" name="active" id = "active"value="1">
            </div>

            <button class="btn btn-primary" type="submit">Guardar</button>

        </div>
    </form>
    @endsection
</body>
</html>