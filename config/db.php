<?php

	/**
	* Conexion a bbdd usando mysqli
	*/
	class Connect
	{
		  public static function connection(){
            $cnx = new mysqli("us-cdbr-azure-southcentral-f.cloudapp.net", "b2886a979254d4", "803daa90", "db_hotel");
            return $cnx;
        }
	}

	//$con = new Connect();
?>
