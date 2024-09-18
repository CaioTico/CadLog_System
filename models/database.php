<?php
// Classe Database que gerencia a conexão com o banco de dados
class Database{
    // Variável estática que armazena a instância da conexão com o banco de dados
    private static $instance = null;

    // Método estático que retorna a conexão com o banco de dados
    public static function getConnection(){
        // Verifica se a instância da conexão ainda não foi criada
        if(!self::$instance){
            // Define as configurações do banco de dados
            $host       = 'localhost'; // Endereço do servidor do banco de dados
            $db         = 'sistema_usuarios'; // Nome do banco de dados
            $user       = 'root'; // Usuário do banco de dados
            $password   = ''; // Senha do banco de dados

            // Cria a instância da conexão com o banco de dados usando PDO
            self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $password);

            // Define o modo de erro da conexão para lançar exceções
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
?>