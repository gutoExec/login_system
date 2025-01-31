<?php

// incluindo arquivo de conexão para aproveitar os dados de conexão e pdo do banco
include '../config/db.php';

try {

    // verificando se tem Email e Senha
    if (isset($_POST['email']) || isset($_POST['senha'])) {

        // Verifica se estão vazios com strlen(verificar numero de carac)
        if (strlen('email') == 0) {
            echo "Não esqueça do seu e-mail :) \n";
        }

        if (strlen('senha') == 0) {
            echo "Não esqueça da sua senha :) \n";
        }

        // limpo os dados
        $email = $_POST['email'];
        $psw = $_POST['senha'];

        // query para o banco de dados passando o email e senha
        $query = "SELECT * FROM users WHERE users_email = '$email' AND users_password = '$psw'";

        // preparando os dados da query
        $result = $pdo->prepare($query);

        if (!$result) {
            die('Falha na execução da QUERY: ' . pg_last_error($dsn));
        }

        // executa
        $result->execute();

        // se resultado em 1 linha
        if ($result->rowCount() == 1) {
            // retorna os dados em um array
            $user = $result->fetch(PDO::FETCH_ASSOC);

            // verifica se a sessão ja iniciou
            if (!isset($_SESSION)) {

                // inicia
                session_start();

                // amarzena o token_id e o email do usuário
                $_SESSION['users_token_id'] = $user['users_token_id'];
                $_SESSION['users_email'] = $user['users_email'];

                // redireciona para o welcome
                header('Location: /sessions/welcome.php');
                exit;
            }
        }

        // se der errado, retorna:
        return "Falha ao logar! E-mail ou Senha incorretos :( \n";
    }
} catch (Exception $e) {
    echo "Falha na requisição do login " . $e->getMessage();
}

// header
include('../includes/header.php');

// form
include('../includes/form.php');

// footer
include('../includes/footer.php');
