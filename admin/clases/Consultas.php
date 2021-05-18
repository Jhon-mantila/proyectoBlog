<?php
class Usuarios{
    
    private $db;
    private $usuarios;
    
    public function __construct() {
        require_once '../../config/conexion.php';
        $this->db=Conexion::conectar();
        $this->usuarios = array();
    }


    public function devuelveUsuarios() {
     
        $consulta = $this->db->query('SELECT * FROM usuarios');
       
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->usuarios[]=$fila;
        }
       
       
        return $this->usuarios;
    }
    
}
