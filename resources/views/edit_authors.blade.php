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
    <h1>Editar autor</h1>
    <form action="{{route('authors.update',$author->id)}}" method='post'>
      @csrf
      @method('PUT')
      <label for="name">Nombre
        <input type="text" name="name" id="name" value="{{$author->name}}">
      </label>
      <label for="email"> Email
        <input type="text" name="email" id="email" value="{{$author->email}}">
      </label>
      <label for="birth_day">Fecha de nacimiento
        <input type="date" name="birth_day" id="birth_day" value="{{$author->birth_day}}">
      </label>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
  </script>
</body>

</html>