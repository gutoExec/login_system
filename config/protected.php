<?php

// verifica se a sessão ja foi iniciada
if (!isset($_SESSION)) {
    // inicia
    session_start();
}

// se o token_id for diferente retorna:
if (!isset($_SESSION['users_token_id'])) {
    die('Você não pode acessar esta página, faça o login!!');
}