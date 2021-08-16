<?php

class Utils{

    public static function deleteSession($nameSession){
        if (isset($_SESSION[$nameSession])){
            $_SESSION[$nameSession] = null;
            unset($_SESSION[$nameSession]);
        }
        return $nameSession;

    }

    public static function isAdmin(){
        if (isset($_SESSION['admin'])){
            return true;

        }
        else{
            header("Location: " . base_url );
        }
    }

    public static function showCategorias(){
        require_once 'models/categoria.php';

        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        return $categorias;
    }

}
