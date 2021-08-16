<?php

require_once 'models/usuario.php';

    class usuarioController{
        public function index(){
            echo 'Controlador Usuarios, Accion index';
        }

        public function registrar(){
            require_once 'views/usuarios/registro.php';
        }

        public function save(){

            if (isset($_POST)){

                $name = isset($_POST['name']) ? $_POST['name'] : false;
                $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : false;
                $email = isset($_POST['email']) ? $_POST['email'] : false;
                $password = isset($_POST['password']) ? $_POST['password'] : false;


                if ($name && $last_name && $email && $password){

                    $usuario = new Usuario();
                    $usuario->setName($name);
                    $usuario->setLastName($last_name);
                    $usuario->setEmail($email);
                    $usuario->setPassword($password);

                    $save = $usuario->save();

                    if ($save){
                        $_SESSION['register'] = 'completed';
                    }else{
                        $_SESSION['register'] = 'failed';
                    }
                }else{
                    $_SESSION['register'] = 'failed';
                }

            }else{
                $_SESSION['register'] = 'failed';
            }

            header("Location:".base_url.'usuario/registrar');
        }

        public function login(){
            if (isset($_POST)){
                //Identificar al usuario

                //Consulta a la base de datos
                $user = new Usuario();
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);

                $identity = $user->login();

                if ($identity && is_object($identity)){
                    $_SESSION['logged_in'] = $identity;

                    if ($identity->rol == 'admin'){
                        $_SESSION['admin'] = true;
                    }
                    
                }else{
                    $_SESSION['error_login'] = 'Identificación fallida';
                }

            }
            header('Location:'.base_url);
        }

        public function logout(){
            if ($_SESSION['logged_in']){
                $_SESSION['logged_in'] = null;
                unset($_SESSION['logged_in']);
            }
            if ($_SESSION['admin']){
                $_SESSION['admin'] = null;
                unset($_SESSION['admin']);
            }
            header('Location:'.base_url);
        }
    }