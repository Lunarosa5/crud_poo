<?php

class Musica {
    private $titulo;
    private $artista;
    private $genero;
    private $link;

    public function __construct($titulo, $artista, $genero, $link) {
        $this->titulo = $titulo;
        $this->artista = $artista;
        $this->genero = $genero;
        $this->link = $link;
    }

    public function getTitulo() { return $this->titulo; }
    public function getArtista() { return $this->artista; }
    public function getGenero() { return $this->genero; }
    public function getLink() { return $this->link; }
}