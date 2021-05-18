<?php
class Conexion 
{
 
	public static function conectar()
	{
            try{
                $con = new PDO('mysql:host=localhost; dbname=proyecto', 'root', '');
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $con->exec('SET CHARACTER SET UTF8');
                //echo 'ok';
                
            } catch (Exception $ex) {
                        die("Error :" . $ex->getMessage());
                        echo "Linea del error: " . $ex->getFile();
            }
            
            return $con;
		
	}

}


?>