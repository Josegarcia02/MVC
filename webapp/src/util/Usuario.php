<?php
namespace Utel\Util;

class Usuario {

    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password, $rol;
    
    public const SQL_SELECT_USUARIO = "SELECT * FROM usuarios";
    public const SQL_SELECT_USUARIO_BY_ID = "SELECT * FROM usuarios WHERE id=?";
    public const SQL_UPDATE_USUARIO = "UPDATE usuarios SET nombre=?, apellidos=?, email=?, password=?, rol=? WHERE id=?";
    public const SQL_DELETE_USUARIO = "DELETE FROM usuarios WHERE id=?";
    public const SQL_INSERT_USUARIO = "INSERT INTO usuarios (nombre, apellidos, email, password, rol) VALUES(?,?,?,?)";
    public const SQL_SELECT_LOGIN_USUARIO = "SELECT * FROM usuarios WHERE email=? AND password=?";

    public function __get($atributo) {
        switch($atributo) {
            case 'id': return $this->id;
            case 'nombre': return $this->nombre;
            case 'apellidos': return $this->username;
            case 'email': return $this->email;
            case 'password': return $this->password;
            case 'rol': return $this->rol;
            default: return null;
        }
    }

    public function __set($atributo, $valor) {
        switch($atributo) {
            case 'id': $this->id = (int) $valor; break;
            case 'nombre': $this->nombre = $valor; break;
            case 'apellidos': $this->apellidos = $valor; break;
            case 'email': $this->email = $valor; break;
            case 'password': $this->password = $valor; break;
            case 'rol': $this->rol = $valor; break;
            
        }
    }
}
?>