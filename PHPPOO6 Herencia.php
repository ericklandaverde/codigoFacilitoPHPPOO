<?php
class Vehiculo{
	//Atributos
	public $motor = falso;
	public $marca;
	public $color;
    //Metodos
    public funtion estado(){
    	if($this->motor)
    		echo "El motor esta encendido";
    }
}
?>