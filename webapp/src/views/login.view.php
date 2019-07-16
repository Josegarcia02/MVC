<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="icon" href="img/dorada.ico">
    <title>Login</title>
</head>
<body class="bg-light">
<div class="modal-dialog  text-center">
  <div class="col-sm-8 main-section ">
  
     <div class="modal-content">
     
       <div class="col-12 user-img">
       <img src="img/avatar6.png" alt="">
       </div>

        <form  action="login.php" method="post">
         <div class="col-12">
          <div class="form-gruop">
           <input name="email" type="email" class="form-control" placeholder="Correo electronico" autofocus>
          </div>
          <br>
          <div class="form-group">
            <input name="password" type="password" class="form-control " placeholder="Contraseña">
           </div>
            <div class="for-group">

           <button type="submit" class="btn btn-light"><i class="fas fa-sign-in-alt"></i>Acceder</button>
           </div>
           <br>
        </form>
     </div> <!--Fin modalcontent-->
  </div>
</div>
</body>
</html>

