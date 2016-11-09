<?php
/**
* clase Users
*/
class Habitacion_model extends Connect
{

	private $db;
	private $habitacion;

	public function __construct(){
		$this->db = Connect::connection();
		$this->habitacion = array();
	}

	public function get_habitacion(){
		//$query = null;
		$query = $this->db->query("SELECT * FROM habitacion");
		while ($rows = $query->fetch_assoc()){
			$this->habitacion[] = $rows;
		}
		return $this->habitacion;
	}
	 /*private $id_habitacion;
	 private $num_habitacion;
	 private $nro_piso;
	 private $desc_habitacion;
	 private $usu_mod;*/



	 /*public function __construct($idHab,$numHab,$nroPiso,$descHab,$usuMod){
		 $this -> id_habitacion = $idHab;
		 $this -> num_habitacion = $numHab;
		 $this -> nro_piso = $nroPiso;
		 $this -> desc_habitacion = $descHab;
		 $this -> usu_mod = $usuMod;
	 }

	 public function getId(){
		 return $this-> id_habitacion;
	 }

	 public function getNumHab(){
		 return $this-> num_habitacion;
	 }
	 public function getNroPiso(){
		 return $this-> nro_piso;
	 }
	 public function getDescHab(){
		 return $this-> desc_habitacion;
	 }
	 public function getUsuMod(){
		 return $this-> usu_mod;
	 }

	 ///
	 public function setId($id){
		 $this-> id_habitacion = $id;
	 }

	 public function setNumHab($num){
		 $this-> num_habitacion = $num;
	 }
	 public function setNroPiso($nro){
		 $this-> nro_piso =$nro;
	 }
	 public function setDescHab($desc){
		 $this-> desc_habitacion = $desc;
	 }
	 public function setUsuMod($usuMod){
		 $this-> usu_mod = $usuMod;
	 }*/
}
?>
