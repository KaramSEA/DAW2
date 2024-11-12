<?php
abstract class Publicacion{
    private string $isbn;
    private string $title;
    private int $numPages;

    public function __construct($isbn, $title,$numPages)
    {
        $this->isbn= $isbn;
        $this->title= $title;
        $this->numPages=$numPages;
    }

    public function __toString(): string
    {
        return $this->isbn . ", con titulo " . $this->title . " y numero de paginas: " . $this->numPages;
    }

    public function getIsbn(): string {return $this->isbn;}

	public function getTitle(): string {return $this->title;}

	public function getNumPages(): int {return $this->numPages;}

	public function setIsbn(string $isbn): void {$this->isbn = $isbn;}

	public function setTitle(string $title): void {$this->title = $title;}

	public function setNumPages(int $numPages): void {$this->numPages = $numPages;}

	public abstract function prestar();


}