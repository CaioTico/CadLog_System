<?php
 
// Requer arquivo 'user.php' que contem o model user com as funções para manipulação de dados de usário
require_once 'models/user.php';
 
class AuthController
{
    // Cria função responsável pelo processo de login
    public function login()
    {
        // Verifica se a requisição HTTP é do tipo POST, ou seja, se o formulário foi enviado
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
 
            $user = User::findByEmail($email);
            
            if($user && password_verify($senha, $user['senha'])){
                session_start();

                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['perfil']     = $user['perfil'];

                header('Location: index.php?action=dashboard');
            }else{
                echo "Email ou senha incorretos";
            }
        }else{
            include  'views/login.php';
        }
    }
}
?>