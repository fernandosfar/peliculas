<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Guardar pelicula</title>
  <meta charset="utf-8">
</head>

<body>
  <div class="container">
    <form>
      <div class="form-group">
        <for action="#" method= "POST">

        <label for="Titulo"> Titulo Original</label>
        <input type="text" class="form-control" id="titulooriginal" placeholder="Nombre pelicula">

        <label for="Titulo"> Titulo Latinoamerica</label>
        <input type="text" class="form-control" id="titulo2" placeholder="Nombre pelicula latinoamerica">

        <label>Duración</label>
        <input type="number" class="form-control" id="duracion" placeholder="duración">

        <label>Fecha estreno</label>
        <input type="date" class="form-control" id="estreno" placeholder="Fecha estreno">

        <div class=" form-group">
          <label for="sinopsis">Sinopsis</label>
          <textarea class="form-control" id="sinopsis" rows="3"></textarea>
        </div>

        <?php
        include 'conexion.php';
        $sql = "Select * from paises";
        ?>
        <div class="form-group">
          <label for="pais">Pais</label>
          <select class="form-control" id="pais">
            <option value="0">Seleccione opcion
            <option>
              <?php
              include 'conexion.php';
              $sql = "Select * from paises";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo '<option value=' . $row['id_pais'] . '> ' . $row['pais'] . '</option>';
                }
              }
              ?>
          </select>
        </div>

        <?php
        include 'conexion.php';
        $sql = "Select * from directores";
        ?>
        <div class="form-group">
          <label for="director">Director</label>
          <select class="form-control" id="director">
            <option value="0">Seleccione opcion
            <option>
              <?php
              include 'conexion.php';
              $sql = "Select * from directores";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo '<option value=' . $row['id_director'] . '> ' . $row['nombre'] . '</option>';
                }
              }
              ?>
          </select>
        </div>

        <?php
        include 'conexion.php';
        $sql = "Select * from productores";
        ?>
        <div class="form-group">
          <label for="productor">Productor</label>
          <select class="form-control" id="productor">
            <option value="0">Seleccione opcion
            <option>
              <?php
              include 'conexion.php';
              $sql = "Select * from productores";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo '<option value=' . $row['id_productor'] . '> ' . $row['nombre'] . '</option>';
                }
              }
              ?>
          </select>
        </div>

        <?php
        include 'conexion.php';
        $sql = "Select * from generos";
        ?>
        <div class="form-group">
          <label for="genero">Genero</label>
          <select class="form-control" id="genero">
            <option value="0">Seleccione opcion
            <option>
              <?php
              include 'conexion.php';
              $sql = "Select * from generos";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo '<option value=' . $row['id_genero'] . '> ' . $row['genero'] . '</option>';
                }
              }
              ?>
          </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="reset" class="btn btn-primary">Limpiar</button>
    </form>
  </div>
</body>

</html>