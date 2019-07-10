<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php require('nav.view.php'); ?>
    <main>
       <div class="card w-80 mx-auto">
          <div class="card-header">
          <div class="row">
             <div class="col text-left">
              <h3>Inventario</h3>
              </div>
              <div class="col text-right">
              <a href="agregar.inv.php" class="btn btn-danger">Agregar</a>
             </div>
            </div>
        </div>
             <div class="card-body">
                <table class="table table-hover table-sm">
                <thead class="thead">
                 <tr>
                     <th>Id vehículo</th>
                     <th>T. Circulaciòn</th>
                     <th>Poliza de seguro</th>
                     <th>No.Inventario</th>
                     <th>Tipo de vehìculo</th>
                     <th>Color</th>
                     <th>Accesorios</th>
                     <th>Carroceria</th>
                     <th>Observaciones</th>
                     <th>&nbsp;</th>
                     <th>&nbsp;</th>
                 </tr>
                </thead>
                <tbody class="tbody">
                <?php foreach($inventario as $inv): ?>
                   <tr>
                       <td><?= $inv['id_vehiculo'] ?></td>
                       <td><?= $inv['tcirculacion'] ?></td>
                       <td><?= $inv['poliza_seguro'] ?></td>
                       <td><?= $inv['num_inventario'] ?></td>
                       <td><?= $inv['vehiculo_tipo'] ?></td>
                       <td><?= $inv['color'] ?></td>
                       <td><?= $inv['accesorios'] ?></td>
                       <td><?= $inv['carroceria'] ?></td>
                       <td><?= $inv['observaciones'] ?></td>
                       <td> <a href="editar.inv.php?id= <?= $inv['id'] ?>">
                             <i class="far fa-edit"></i>
                           </a>
                        </td>
                       <td> <a href="eliminar.inv.php?id= <?= $inv['id'] ?>" class="text-danger">
                            <i class="far fa-trash-alt"></i>
                           </a>
                       </td>
                   </tr>
                   <?php endforeach; ?>
                </tbody>
              </table>
             </table>
        </div>
    </main>
</body>
</html>