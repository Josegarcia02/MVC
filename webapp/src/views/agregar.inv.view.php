<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregar|inventario </title>
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="icon" href="img/dorada.ico">
  </head>
  <body>
  
    <div class="card w-75 mx-auto">
      <form action="agregar.inv.php" method="post">
        <div class="card-header">
          <div class="row">
            <div class="col text-left">
              <h3>Registro de inventario</h3>
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
                  <input type="text" name="id_vehiculo" class="form-control" placeholder="Id vehiculo" autofocus required value="">
              </div>
             <div class="col">
                <input type="text" name="tcirculacion" class="form-control" placeholder="Tarjeta de circulación" required value="">
            </div>
          </div>
           <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="poliza_seguro" class="form-control" placeholder="Polizá del seguro" required value="">
            </div>
            <div class="col">
              <input type="text" name="num_inventario" class="form-control" placeholder="No de inventario" required value="">
            </div>
            </div>

          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="vehiculo_tipo" class="form-control" placeholder="Tipo de vehículo" required value="">
            </div>
            <div class="col">
              <input type="text" name="color" class="form-control" placeholder="Color" required value="">
            </div>
            
          </div>

          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="accesorios" class="form-control" placeholder="Accesorios" required value="">
            </div>
            <div class="col">
            <input type="text" name="carroceria" class="form-control" placeholder="Carroceria" required value="">
            </div>
          </div>
          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="observaciones" class="form-control" placeholder="Observaciones" required value="">
            </div>
            <div class="col">
                
            </div>
          </div>

        </div>
      </form>
    </div>
  </body>
</html>
