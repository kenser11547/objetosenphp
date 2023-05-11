<?php

class Producto{
    //definicion de atributos
    public $precio;
    public $nombre;
    public $disponible;

    //definicion de metodos

    public function mostrarNombreProducto() : void{
        echo $this->$nombre;

    }
    public function mostrarPrecioProducto() : void{
        echo $this->$precio;
    }
}

//creacion de un objeto

$mesa = new Producto();

$mesa->nombre = "Mesa";
$mesa->precio = 500;
$mesa->disponible = true;

$silla = new Producto();

$silla->nombre = "Silla grande";
$silla->precio = 100;
$silla->disponible = false;

echo '<pre>';
var_dump($mesa);
echo "</pre>";
echo '<pre>';
var_dump($silla);
echo "</pre>";

$mesa->mostrarNombreProducto();
$silla->mostrarPrecioProducto();
$mesa->mostrarPrecioProducto();
?>