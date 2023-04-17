<?php

// conexao pdo com o banco de dados
$pdo = new PDO('mysql:host=localhost;dbname=controle_acesso', 'root', '');

// define o charset da conexao
$pdo->exec('SET NAMES utf8');

// define o timezone
date_default_timezone_set('America/Sao_Paulo');

// define o locale
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

// define o locale para o windows
setlocale(LC_ALL, 'portuguese');

// define o locale para o linux
setlocale(LC_ALL, 'pt_BR.utf-8');

// define o locale para o mac
setlocale(LC_ALL, 'pt_BR');







?>