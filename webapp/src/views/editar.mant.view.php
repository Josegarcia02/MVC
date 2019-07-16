<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar mantenimiento</title>
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="icon" href="img/dorada.ico">
  </head>
  <body class="bg-dark">
    <div class="card w-75 mx-auto">
      <form action="editar.mant.php" method="post">
          <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
          <div class="card-header">
          <div class="row">
            <div class="col text-left">
              <h3>Editar mantenimiento</h3>
            </div>
            <div class="col text-right">
              <button type="submit" class="btn btn-success">Guardar</button>
              <a href="mantenimiento.php" class="btn btn-secondary">Cancelar</a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="marca" class="form-control" placeholder="Marca" 
              required value="<?= ($marca) ? $marca : ''?>">
            </div>
            <div class="col">
              <input type="text" name="placa" class="form-control" placeholder="Placa" 
              required value="<?= isset ($placa) ? $placa : ''?>">
            </div>
          </div>
          <div class="form-row mb-2"> 
            <div class="col">
              <input type="text" name="serie" class="form-control" placeholder="Serie" 
              required value="<?= isset ($serie) ? $serie : ''?>">
            </div>
            <div class="col">
              <input type="text" name="num_inventario" class="form-control" placeholder="Inventario" 
              required value="<?= isset ($num_inventario) ? $num_inventario : ''?>">
            </div>
          </div>
          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="fecha" class="form-control" placeholder="Fecha aa/mm/dd" 
              required value="<?= isset ($fecha) ? $fecha : ''?>">
            </div>
            <div class="col">
              <input type="text" name="mantenimiento" class="form-control" placeholder="mantenimiento" 
              required value="<?= isset($mantenimiento) ? $mantenimiento : '' ?>">
            </div>
          </div>
          <div class="form-row mb-2">
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
