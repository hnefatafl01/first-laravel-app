<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Car {{ $car -> $id }}</title>
  </head>
  <body>
    <?php echo "show me" ?>
    <h1> Car {{ $car -> $id }}</h1>
    <ul>
      <li>Make: {{ $car -> $make }}</li>
      <li>Model: {{ $car -> $model }}</li>
      <li>Produced on: {{ $car -> $produced_on }}</li>
    </ul>
  </body>
</html>
