<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mantenimiento</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php require('nav.view.php'); ?>
    <main>
       <div class="card w-80 mx-auto">
          <div class="card-header">
          <div class="row">
             <div class="col text-left">
              <h3>Mantenimiento</h3>
              </div>
              <div class="col text-right">
              <a href="agregar.mant.php" class="btn btn-danger">Agregar</a>
             </div>
            </div>
        </div>
             <div class="card-body">
                <table class="table table-hover table-sm">
                <thead class="thead">
                 <tr>
                     <th>Id vehículo</th>
                     <th>Marca</th>
                     <th>Placa</th>
                     <th>Serie</th>
                     <th>Inventario</th>
                     <th>Fecha</th>
                     <th>Mantenimiento</th>
                     <th>Observaciones</th>
                     <th>&nbsp;</th>
                     <th>&nbsp;</th>
                 </tr>
                </thead>
                <tbody class="tbody">
                <?php foreach($mantenimiento as $inv): ?>
                   <tr>
                       <td><?= $inv['id_vehiculo'] ?></td>
                       <td><?= $inv['marca'] ?></td>
                       <td><?= $inv['placa'] ?></td>
                       <td><?= $inv['serie'] ?></td>
                       <td><?= $inv['num_inventario'] ?></td>
                       <td><?= $inv['fecha'] ?></td>
                       <td><?= $inv['mantenimiento'] ?></td>
                       <td><?= $inv['observaciones'] ?></td>
                       <td> <a href="editar.mant.php?id= <?= $inv['id'] ?>">
                             <i class="far fa-edit"></i>
                           </a>
                        </td>
                       <td> <a href="eliminar.mant.php?id= <?= $inv['id'] ?>" class="text-danger">
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