<?php
// ATRIBUTOS
// Simples Variables o Arrays
// Definicion del tipo del atributo: (Public, Private, Protected)
// METODOS
// Accede a atributos con $this->Nombre
// Podemos acceder a otros metodos con $this o self::
/**
* 
*/
class Persona{
	//Atributos
	public $nombre = array();
	public $apellido = array();
	public function guardar($nombre, $apellido){
		$this->nombre[]=$nombre;
		$this->apellido[]=$apellido;

	}
	public function mostrar(){
		for ($i=0; $i < count($this->nombre); $i++) { 
			self::formato($this->nombre[$i], $this->apellido[$i]);
		}
	}
	public function formato($nombre, $apellido){
		echo "Nombre: ".$nombre."|Apellido: ".$apellido."<br>";
	}
}
    $persona = new Persona();
    $persona ->guardar("Erick","Landaverde");
    $persona ->guardar("Sarahi","Landaverde");
    $persona ->mostrar();
?>