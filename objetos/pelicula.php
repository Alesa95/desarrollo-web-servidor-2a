<?php
class Pelicula {
    public int $id_pelicula;
    public string $titulo;
    public string $fecha_estreno;
    public string $edad_recomendada;

    function __construct($id_pelicula, $titulo, $fecha_estreno, $edad_recomendada) {
        $this -> id_pelicula = $id_pelicula;
        $this -> titulo = $titulo;
        $this -> fecha_estreno = $fecha_estreno;
        $this -> edad_recomendada = $edad_recomendada;
    }
}
?>