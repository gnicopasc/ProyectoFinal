
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>




  <div class=“container”>
      <h1 class=“display-4 text-center lead”>- Postea tu comida -</h1>
      <img style=“margin-bottom: 40px;“class=“img-fluid”src=“/img/bg_post.jpg” alt=“”>

  </div>

<div class=“container”>
<form style=“margin-bottom: 50px;” action="{{ route('places.store') }}" method=“post”>
  {{ csrf_field() }}
  <div class=“form-group”>
      <label for=“inputTitulo”>Nombre:</label>
      <input type=“text” class=“form-control” name=“name” id=“inputTitulo” placeholder="titulo del posteo">
  </div>
  <div class=“form-group”>
      <label for=“inputTitulo”>location:</label>
      <input type=“text” class=“form-control” name=“location” id=“inputTitulo” placeholder="titulo del posteo">
  </div>
  <div class=“form-group”>
      <label for=“inputTitulo”>direccion:</label>
      <input type=“text” class=“form-control” name=“address” id=“inputTitulo” placeholder="titulo del posteo">
  </div>
  <div class=“form-group”>
      <label for=“inputTitulo”>telefono:</label>
      <input type=“text” class=“form-control” name=“tel” id=“inputTitulo” placeholder="titulo del posteo">
  </div>
  <div class=“form-group”>
      <label for=“inputTitulo”>logo local:</label>
      <input type="file" class=“form-control” name="logo" id=“inputTitulo” placeholder="" enctyp="multipart/form-data">
  </div>
  <div class=“form-group”>
      <label for=“inputTitulo”>restaurant nombre:</label>
      <input type=“text” class=“form-control” name=“restaurant” id=“inputTitulo” placeholder="titulo del posteo">
  </div>

      <button type=“submit” class=“btn btn-primary”>Postear</button>
</form>

</div>



</body>
</html>
