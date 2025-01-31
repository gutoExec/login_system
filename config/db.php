<?php

// conexão com o banco de dados

$host = 'localhost';
$dbname = 'login_system_0';
$user = 'user_system';
$password =  'postgresql';
$port = '5432';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    echo "Conexão com o banco de dados realizada com sucesso!";
} catch (PDOException $e) {
    echo "Erro na conexão do banco de dados: " . $e->getMessage();
}
