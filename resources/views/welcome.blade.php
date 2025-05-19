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
    <h1>CRUD con libros</h1>
    <form action="{{route('books.store')}}" method='post'>
      @csrf
      <label for="title">Titulo Libro
        <input type="text" name="title" id="title">
      </label>
      <label for="author"> Autor
        <input type="text" name="author" id="author">
      </label>
      <label for="price">Precio
        <input type="number" name="price" id="price">
      </label>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Author</th>
          <th>Price</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $book)
        <tr>
          <td>{{$book->id}}</td>
          <td>{{$book->title}}</td>
          <td>{{$book->author}}</td>
          <td>{{$book->price}}</td>
          <td class="d-flex justify-content-center gap-4">
            <a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">Edit</a>
            <!-- formulario para el crud -->
            <form action="{{route('books.destroy',$book->id)}}" method="post">
              @csrf
              <!-- token para evitar ataques -->
              @method('DELETE')
              <!-- definir que metodo se va a usar -->
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>

    </table>


  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
  </script>
</body>

</html>