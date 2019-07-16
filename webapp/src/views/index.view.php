<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
    <link rel="icon" href="img/dorada.ico">
</head>
<body>
<?php require ('nav.view.php') ?>
   <main>
    <div class="card w-80 mx-auto">
       <div class="card-header">
          <div class="row">
            <div class="col text-left">
              <h3 id="headerh3">Padron vehícular</h3>
            </div> 
            
            
          
              <div class="col text-right">
              <a href="pdf.php" class="btn btn-info">Imprimir</a>
              <a href="agregar.php" class="btn btn-danger">Agregar</a>
              </div>
            </div>
          </div>
    
        <div class="card-body">
            <table class="table table-hover table-sm">
                 <thead class="thead">
                       <tr>
                       <th>Id</th>
                       <th>Inventario</th>
                       <th>Serie</th>
                       <th>Vehìculo</th>
                       <th>Marca</th>
                       <th>Modelo</th>
                       <th>Placa</th>
                       <th>Color</th> 
                       <th>Asignaciòn</th>  
                       <th>Resguardante</th>
                       <th>Observaciones</th>
                       <th>&nbsp;</th>
                       <th>&nbsp;</th>
                       <th>&nbsp;</th>
                       </tr>
                 </thead>
                 <tbody clss="resul">
                    
                    <?php foreach($padron as $usr): ?>
                        <tr> 
                            <td><?= $usr['id'] ?></td>
                            <td><?= $usr['num_inventario'] ?></td>
                            <td><?= $usr['serie'] ?></td>
                            <td><?= $usr['vehiculo'] ?></td>
                            <td><?= $usr['marca'] ?></td>
                            <td><?= $usr['modelo'] ?></td>
                            <td><?= $usr['placa'] ?></td>
                            <td><?= $usr['color'] ?></td>
                            <td><?= $usr['asignado'] ?></td>
                            <td><?= $usr['resguardo'] ?></td>
                            <td><?= $usr['observaciones'] ?></td>
                            <td>
                               <a href="editar.php?id=<?= $usr['id'] ?>">
                                    <i class="text-dark fas fa-edit"></i>
                               </a>
                            </td>
                            <td>
                               <a href="eliminar.php?id=<?= $usr['id'] ?>">
                                    <i class="text-danger fas fa-trash"></i>
                                </a>
                            </td>
                            
                          
                        </tr>
                    <?php endforeach; ?>
                  
                 </tbody>
             </table>
         </div>

     </div>
     </main>
</body>
</html>



