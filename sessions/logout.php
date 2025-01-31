<?php

if (!isset($_SESSION)) {
    session_start();
}

// sai da sessão
session_destroy();

// redireciona para a página inicial (login)
header('Location: /app/index.php');