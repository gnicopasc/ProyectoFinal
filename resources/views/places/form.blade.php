<form class="" action="/places" method="post">
{{csrf_field()}}
name
  <input type="text" name="name" value="">
  <br>
  location
  <input type="text" name="location" value="">
  <br>
  address
  <input type="text" name="address" value="">
  <br>
  tel
  <input type="text" name="tel" value="">
  <br>
  description
  <input type="text" name="description" value="">
  <br>
  logo
  <input type="text" name="logo" value="">
  <br>
  resto
  <input type="text" name="restaurant" value="">
  <br>
  comercio
  <input type="text" name="comercio" value="">
  <br><br>
<button type="submit" name="button">Crear</button>
</form>
