<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
  <div class="container text-center">
    <h1>Editar libro</h1>
    <form action="{{route('books.update',$book->id)}}" method='post'>
      @csrf
      @method('PUT')
      <label for="title">Titulo Libro
        <input type="text" name="title" id="title" value="{{$book->title}}">
      </label>
      <label for="author"> Autor
        <input type="text" name="author" id="author" value="{{$book->author}}">
      </label>
      <label for="price">Precio
        <input type="number" name="price" id="price" value="{{$book->price}}">
      </label>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
  </script>
</body>

</html>