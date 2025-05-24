<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Basic CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
  <div class="container text-center">
    <h1>CRUD con autores</h1>
    <form action="{{route('authors.store')}}" method='post'>
      @csrf
      <label for="name">Nombre
        <input type="text" name="name" id="name">
      </label>
      <label for="email"> Email
        <input type="text" name="email" id="email">
      </label>
      <label for="birth_day">Fecha de nacimiento
        <input type="date" name="birth_day" id="birth_day">
      </label>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Email</th>
          <th>Fecha de nacimiento</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($authors as $author)
        <tr>
          <td>{{$author->id}}</td>
          <td>{{$author->name}}</td>
          <td>{{$author->email}}</td>
          <td>{{$author->birth_day}}</td>
          <td class="d-flex justify-content-center gap-4">
            <a href="{{route('authors.edit',$author->id)}}" class="btn btn-warning">Edit</a>
            <!-- formulario para el crud -->
            <form action="{{route('authors.destroy',$author->id)}}" method="post">
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