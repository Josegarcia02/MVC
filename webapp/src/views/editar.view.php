<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar vehiculo</title>
    <link rel="stylesheet" href="/css/estilos.css">
  </head>
  <body class="bg-dark">
    <div class="card w-75 mx-auto">
      <form action="editar.php" method="post">
          <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
          <div class="card-header">
          <div class="row">
            <div class="col text-left">
              <h3>Editar vehiculo</h3>
            </div>
            <div class="col text-right">
              <button type="submit" class="btn btn-success">Guardar</button>
              <a href="index.php" class="btn btn-secondary">Cancelar</a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="num_inventario" class="form-control" placeholder="No. Inventario" autofocus 
              required value="<?= isset($num_inventario) ? $num_inventario : '' ?>">
            </div>
            <div class="col">
              <input type="text" name="serie" class="form-control" placeholder="No. Serie" 
              required value="<?= ($serie) ? $serie : ''?>">
            </div>
          </div>

          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="vehiculo" class="form-control" placeholder="Vehiculo" 
              required value="<?= isset ($vehiculo) ? $vehiculo : ''?>">
            </div>
            <div class="col">
              <input type="text" name="marca" class="form-control" placeholder="Marca" 
              required value="<?= isset ($marca) ? $marca : ''?>">
            </div>
          </div>

          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="modelo" class="form-control" placeholder="Modelo" 
              required value="<?= isset ($modelo) ? $modelo : ''?>">
            </div>
            <div class="col">
              <input type="text" name="placa" class="form-control" placeholder="Placa" 
              required value="<?= isset ($placa) ? $placa : ''?>">
            </div>
          </div>

          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="color" class="form-control" placeholder="Color" 
              required value="<?= isset($color) ? $color : '' ?>">
            </div>
            <div class="col">
              <input type="text" name="asignado" class="form-control" placeholder="Asignado" 
              required value="<?= isset($asignado) ? $asignado : '' ?>">
            </div>
          </div>

          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="resguardo" class="form-control" placeholder="Resguardante" 
              required value="<?= isset($resguardo) ? $resguardo : '' ?>">
            </div>
            <div class="col">
              <input type="text" name="observaciones" class="form-control" placeholder="Observaciones" 
              required value="<?= isset($observaciones) ? $observaciones : '' ?>">
            </div>
          </div>

        </div>

      </form>
    </div>
  </body>
</html>
