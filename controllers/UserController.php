<?php
    // Definição da classe UserController, responsável por gerenciar as ações relacionadas aos usuários

    class UserController{

        public function register(){
            
                if($_SERVER['REQUEST_METHOD'] == ){
                    $data = [
                        'name'  => $_POST['name'],
                        'email' => $_POST['email'],
                        'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
                        'perfil'=> $_POST['perfil']
                    ];
                    
                    User::create($data);
                    header('location: index.php');
                } else{
                    include 'views/register.php';
                }
                }
        }
    }
?>