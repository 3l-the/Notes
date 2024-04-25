<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <header class="bg-danger py-3 text-center">
                    <h1 class="mb-0 text-white">Crear Nota</h1>
                </header>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6">
                
                <form action="{{ route('notes.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="" class="form-label">Título</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Contenido</label>
                        <textarea name="content" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Categoria</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selecciona una categoria</option>
                            @foreach ($notes as $value => $label)
                            <option value="{{$value}}" {{($notes->categories.category_name == $value) ? 'selected' : ''}}> {{$label}} </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="text-end">
                        <input type="submit" value="Crear Nota" class="btn btn-success">
                    </div>

                </form>

            </div>
        </div>
    </div>

</body>
</html>