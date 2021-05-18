<?php
require 'Consultas.php';

$mostrar = new Usuarios();

$arrayUsuarios = $mostrar->devuelveUsuarios();

foreach ($arrayUsuarios  as $elementos){
    
    echo $elementos['USUARIO'];
    
}
