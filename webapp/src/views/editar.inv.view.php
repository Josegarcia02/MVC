<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar inventario</title>
    <link rel="stylesheet" href="/css/estilos.css">
  </head>
  <body class="bg-dark">
    <div class="card w-75 mx-auto">
      <form action="editar.inv.php" method="post">
          <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
          <div class="card-header">
          <div class="row">
            <div class="col text-left">
              <h3>Editar inventario</h3>
            </div>
            <div class="col text-right">
              <button type="submit" class="btn btn-success">Guardar</button>
              <a href="inventario.php" class="btn btn-secondary">Cancelar</a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="tcirculacion" class="form-control" placeholder="T. Circulacion" autofocus 
              required value="<?= isset($tcirculacion) ? $tcirculacion : '' ?>">
            </div>
            <div class="col">
              <input type="text" name="poliza_seguro" class="form-control" placeholder="Serie" 
              required value="<?= ($poliza_seguro) ? $poliza_seguro : ''?>">
            </div>
          </div>

          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="num_inventario" class="form-control" placeholder="Inventario" 
              required value="<?= isset ($num_inventario) ? $num_inventario : ''?>">
            </div>
            <div class="col">
              <input type="text" name="vehiculo_tipo" class="form-control" placeholder="Vehiculo" 
              required value="<?= isset ($vehiculo_tipo) ? $vehiculo_tipo : ''?>">
            </div>
          </div>

          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="color" class="form-control" placeholder="Color" 
              required value="<?= isset ($color) ? $color : ''?>">
            </div>
            <div class="col">
              <input type="text" name="accesorios" class="form-control" placeholder="Accesorios" 
              required value="<?= isset ($accesorios) ? $accesorios : ''?>">
            </div>
          </div>

          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="carroceria" class="form-control" placeholder="Carroceria" 
              required value="<?= isset($carroceria) ? $carroceria : '' ?>">
            </div>
            <div class="col">
              <input type="text" name="observaciones" class="form-control" placeholder="Observaciones" 
              required value="<?= isset($observaciones) ? $observaciones : '' ?>">
            </div>
          </div>

            </div>
          </div>

        </div>

      </form>
    </div>
  </body>
</html>
