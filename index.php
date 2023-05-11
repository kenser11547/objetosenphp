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
echo '<pre>';
var_dump($mesa);
echo "</pre>";

$silla = new Producto();

$silla->nombre = "Silla";
$silla->precio = 00;
$silla->disponible = true;
echo '<pre>';
var_dump($silla);
echo "</pre>";

$mesa->mostrarNombreProducto();
$mesa->mostrarPrecioProducto();



