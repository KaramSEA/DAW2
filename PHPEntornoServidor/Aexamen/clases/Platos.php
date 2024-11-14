<?php
abstract class Platos 
{
    private string $nombre;
    private float $precio;

    
    



	public function __construct(string $nombre, float $precio) {

		$this->nombre = $nombre;
		$this->precio = $precio;
	}
    public function __toString(): string
    {
        return $this->nombre . ", precio " . $this->precio;
    }

	public function getNombre() : string {
		return $this->nombre;
	}

	public function setNombre(string $value) {
		$this->nombre = $value;
	}

	public function getPrecio() : float {
		return $this->precio;
	}

	public function setPrecio(float $value) {
		$this->precio = $value;
	}
}