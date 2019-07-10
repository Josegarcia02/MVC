<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Eliminar|mantenimiento</title>
    <link rel="stylesheet" href="/css/estilos.css">
  </head>
  <body class="">
    <div id="card" class="card w-50 mx-auto">
      <form action="eliminar.mant.php" method="post">
        <input type="hidden" name="id" value="<?= $mantenimiento->id ?>">
        <h3 class="card-header">
          ¡Confirmar!
        </h3>
        <div class="card-body">
          <div class="card-text mb-3">
            ¿Estás seguro de eliminar el registro?
            <strong><?= "$mantenimiento->id | $mantenimiento->num_inventario | $mantenimiento->marca |$mantenimiento->serie"  ?></strong>?
          </div>
          <div class="row">
            <div class="col text-left">
              <button type="submit" class="btn btn-danger" name="opcion" value="ok">Aceptar</button>
            </div>
            <div class="col text-right">
              <button type="submit" class="btn btn-primary" name="opcion" value="cancel">Cancelar</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
