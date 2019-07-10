<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregar|mantenimiento </title>
    <link rel="stylesheet" href="/css/estilos.css">
  </head>
  <body>
  
    <div class="card w-75 mx-auto">
      <form action="agregar.mant.php" method="post">
        <div class="card-header">
          <div class="row">
            <div class="col text-left">
              <h3>Registro de inventario</h3>
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
                  <input type="text" name="id_vehiculo" class="form-control" placeholder="Id vehiculo" autofocus required value="">
              </div>
             <div class="col">
                <input type="text" name="marca" class="form-control" placeholder="Marca" required value="">
            </div>
          </div>
           <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="placa" class="form-control" placeholder="Placa" required value="">
            </div>
            <div class="col">
              <input type="text" name="serie" class="form-control" placeholder="Serie" required value="">
            </div>
            </div>

          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="num_inventario" class="form-control" placeholder="Inventario" required value="">
            </div>
            <div class="col">
              <input type="text" name="fecha" class="form-control" placeholder="Fecha aa/mm/dd" required value="">
            </div>
            
          </div>

          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="mantenimiento" class="form-control" placeholder="Mantenimiento" required value="">
            </div>
           
            <div class="col">
              <input type="text" name="observaciones" class="form-control" placeholder="Observaciones" required value="">
            </div>
    
                
            </div>
          </div>

        </div>
      </form>
    </div>
  </body>
</html>
