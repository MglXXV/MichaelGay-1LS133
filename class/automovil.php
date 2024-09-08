<?php


class Automovil {


	private $placa;
	private $marca;
	private $modelo;
	private $anio;
	private $color;
	private $numero_motor;
	private $numero_chasis;
	private $tipo_vehiculo;

	public function getPlaca() {
		return $this->placa;
	}

	public function getMarca() {
		return $this->marca;
	}

	public function getModelo() {
		return $this->modelo;
	}

	public function getAnio() {
		return $this->anio;
	}

	public function getColor() {
		return $this->color;
	}

	public function getNumeroMotor() {
		return $this->numero_motor;
	}

	public function getNumeroChasis() {
		return $this->numero_chasis;
	}

	public function getTipoVehiculo() {
		return $this->tipo_vehiculo;
	}

	public function setPlaca($placa) {
        $this->placa = htmlspecialchars(strip_tags($placa));
    }

    
    public function setMarca($marca) {
        $this->marca = htmlspecialchars(strip_tags($marca));
    }

    
    public function setModelo($modelo) {
        $this->modelo = htmlspecialchars(strip_tags($modelo));
    }

 
    public function setAnio($anio) {
        $this->anio = htmlspecialchars(strip_tags($anio));
    }

  
    public function setColor($color) {
        $this->color = htmlspecialchars(strip_tags($color));
    }

    public function setNumeroMotor($numero_motor) {
        $this->numero_motor = htmlspecialchars(strip_tags($numero_motor));
    }

    public function setNumeroChasis($numero_chasis) {
        $this->numero_chasis = htmlspecialchars(strip_tags($numero_chasis));
    }

   
    public function setTipoVehiculo($tipo_vehiculo) {
        $this->tipo_vehiculo = htmlspecialchars(strip_tags($tipo_vehiculo));
    }
}

?>