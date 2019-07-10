<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Resultado</title>
</head>
<body>
<?php require ('nav.view.php') ?>
   <main>
   <div class="card w-80 mx-auto">
       <div class="card-header">
          <div class="row">
            <div class="col text-left">
              <h3 id="headerh3">Padron vahícular</h3>
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
                            
                        </tr>
                    <?php endforeach; ?>
                 </tbody>
             </table>
         </div>
     </div>
<br>
     <div class="card w-80 mx-auto">
          <div class="card-header">
          <div class="row">
             <div class="col text-left">
              <h3>Inventario</h3>
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
                   </tr>
                   <?php endforeach; ?>
                </tbody>
              </table>
        </div>
        </div>
        <br>
        <div class="card w-80 mx-auto">
          <div class="card-header">
          <div class="row">
             <div class="col text-left">
              <h3>Mantenimiento</h3>
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
                   </tr>
                   <?php endforeach; ?>
                </tbody>
              </table>
             </table>
        </div>

        
     </main>
</body>
</html>



