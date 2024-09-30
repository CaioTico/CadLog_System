<?php
    // Definição da classe UserController, responsável por gerenciar as ações relacionadas aos usuários

    class UserController {

        public function register() {
            // Verifica se o método da requisição é POST
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Cria um array com os dados do usuário
                $data = [
                    'name'  => $_POST['name'],
                    'email' => $_POST['email'],
                    'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
                    'perfil'=> $_POST['perfil']
                ];
                
                // Cria um novo usuário com os dados fornecidos
                User::create($data);
                
                // Redireciona o usuário para a página de índice
                header('Location: index.php');
                exit; // Adicionei o exit para garantir que o script seja interrompido após a redirecionamento
            } else {
                // Se o método da requisição não for POST, inclui a view de registro
                include 'views/register.php';
            }
        }
    }
?>