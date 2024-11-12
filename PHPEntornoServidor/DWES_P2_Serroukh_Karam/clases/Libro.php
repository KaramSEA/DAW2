<?php
require "./Publicacion.php";
class Libro extends Publicacion
{
    private string $autoria;
    private int $numEjemplares;

    public function __construct($isbn, $title, $numPages, $autoria, $numEjemplares = 1)
    {
        parent::__construct($isbn, $title,$numPages);
        $this->autoria=$autoria;
        $this->numEjemplares=$numEjemplares;
    }
    public function __toString(): string
    {
        return parent::__toString() . " autoria:" . $this->autoria . " Ejemplares:" . $this->numEjemplares;
    }

    public function getAutoria(): string {return $this->autoria;}

	public function getNumEjemplares(): int {return $this->numEjemplares;}

	public function setAutoria(string $autoria): void {$this->autoria = $autoria;}

	public function setNumEjemplares(int $numEjemplares): void {$this->numEjemplares = $numEjemplares;}

    public function prestar(){
        if ($this->numEjemplares>0) {
            $this->numEjemplares=$this->numEjemplares-1;
        }
    }

        
}

