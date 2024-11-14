<?php
final class Principal extends Platos
{
    private bool $conOsinGluten;
    


	public function __construct(string $nombre, float $precio, bool $conOsinGluten) {
        
        parent::__construct($nombre, $precio);
        $this->conOsinGluten = $conOsinGluten;
	}
    public function __toString(): string
    {
        return parent::__toString() . " con gluten:" . $this->conOsinGluten;
    }

	public function getConOsinGluten() : bool {
		return $this->conOsinGluten;
	}

	public function setConOsinGluten(bool $value) {
		$this->conOsinGluten = $value;
	}
}