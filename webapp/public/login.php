<?php session_start();

require __DIR__ . '/../vendor/autoload.php';

use Utel\Util\Config;
use Utel\Util\DataSource;
use Utel\Util\Usuario;




$errores = '';
if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $usuario = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = md5($_POST['password']);

    $dbcon = DataSource::getConnection();
    $sentencia = $dbcon->prepare(Usuario::SQL_SELECT_LOGIN_USUARIO);
    $sentencia->bindParam(1, $usuario);
    $sentencia->bindParam(2, $password);
    $sentencia->execute();

    $resultado = $sentencia->fetch();
    if($resultado !== false) {
        $_SESSION['authuser'] = $usuario;
        header('Location: index.php');
    } else {
        $errores .= '<li class="list-group-item text-danger">Datos incorrectos</li>';
    }
}


require Config::getView('login.view.php');


?>