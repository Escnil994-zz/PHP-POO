<?php

require_once 'models/producto.php';

class CarritoController
{

    public function index()
    {
        echo 'Carrtito controller, Acción index';
    }


    public function add()
    {
        $talla = '';
        if (isset($_POST['talla']) && !empty($_POST['talla'])) {
            $talla = $_POST['talla'];
        } else {
            echo 'Debe ingresar una talla';
        }
        if (isset($_POST['cantidad']) && !empty($_POST['cantidad'])) {
            $cantidad = $_POST['cantidad'];
        } else if (isset($_POST['inlineRadioOptions']) && !empty($_POST['inlineRadioOptions'])) {
            $cantidad = $_POST['inlineRadioOptions'];
        }

        die();
        if ($_GET['id']) {
            $producto_id = $_GET['id'];
        } else {
            header('Location: ' . base_url);
        }

        if (isset($_SESSION['carrito'])) {

        } else {
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getById();
            if (is_object($producto)) {
                $_SESSION['carrito'][] = array(
                    "id_producto" => $producto->id,
                    "precio" => $producto->precio,
                    "unidades" => $_GET['unit']
                );
            }
        }
    }

    public function remove()
    {

    }

    public function delete()
    {

    }
}