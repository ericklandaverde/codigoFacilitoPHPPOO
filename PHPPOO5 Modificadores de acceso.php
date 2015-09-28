<?php
class Facebook{
   	  //Atributos
   	public $nombre;
   	public $edad;
   	private $pass;
      //Metodos
   	public function __construct($nombre,$edad,$pass){
   	  $this->nombre=$nombre;
   	  $this->edad=$edad;
   	  $this->pass=$pass;
   	}
   	public function verInformacion(){
      echo "Nombre: ".$this->nombre."<br>";
      echo "Edad: ".$this->edad."<br>";
      self::cambiarPass("4321");
      echo "Password: ".$this->pass."";
   	}

   	private function cambiarPass($pass){
   		$this->pass = $pass;
   	}
}
$facebook = new Facebook("Erick Landaverde", 22, "1234");
//echo $facebook->pass;
//$facebook->cambiarPass("4321");
$facebook->verInformacion();
?>