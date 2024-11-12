<?php
require "./Publicacion.php";
class Revista extends Publicacion
{
    private string $numRevistasPrestadas;
    public function __construct($isbn, $title, $numPages,$numRevistasPrestadas)
    {
        parent::__construct($isbn, $title,$numPages);
        $this->numRevistasPrestadas=$numRevistasPrestadas;
    }

    public function __toString(): string
    {
        return parent::__toString() . " revistas prestadas:" . $this->numRevistasPrestadas;
    }
    public function setNumRevistasPrestadas(string $numRevistasPrestadas): void {$this->numRevistasPrestadas = $numRevistasPrestadas;}

	public function getNumRevistasPrestadas(): string {return $this->numRevistasPrestadas;}

    public function prestar(){
        $this->numRevistasPrestadas=$this->numRevistasPrestadas+1;
    }
	
}
