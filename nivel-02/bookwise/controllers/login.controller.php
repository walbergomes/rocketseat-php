<?php

$mensagem = $_REQUEST['mensagem'] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // Consulta no banco de dados com email e senha
  $usuario = $database->query(
    query: "select * from usuarios
              where email = :email
              and senha = :senha",
    params: compact('email', 'senha')
  )->fetch();

  if($usuario) {
    // Se usuário existe, adicionamos ele na sessão
    $_SESSION['auth'] = $usuario;
    $_SESSION['mensagem'] = 'Seja bem vindo ' . $usuario['nome'] . '!';
    header('location: /');
    exit();
  }
}

view('login', compact('mensagem'));
