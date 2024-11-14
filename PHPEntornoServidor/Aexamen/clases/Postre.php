<?php
final class Postre extends Platos 
{
    private int $gramosAzucar;
    


	public function __construct(string $nombre, float $precio, int $gramosAzucar) {
        parent::__construct($nombre, $precio);
		$this->gramosAzucar = $gramosAzucar;
	}
    public function __toString(): string
    {
        return parent::__toString() . " gramos de azucar:" . $this->gramosAzucar;
    }

	public function getGramosAzucar() : int {
		return $this->gramosAzucar;
	}

	public function setGramosAzucar(int $value) {
		$this->gramosAzucar = $value;
	}
}