<?php

$mensagem = $_REQUEST['mensagem'] ?? '';
require 'Validacao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $validacao = Validacao::validar([
    'email' => ['required', 'email'],
    'senha' => ['required']
  ], $_POST);

  if($validacao->naoPassou()) {
    header('location: /login');
    exit();
  }

  // Consulta no banco de dados com email e senha
  $usuario = $database->query(
    query: "select * from usuarios
              where email = :email
              and senha = :senha",
    class: Usuario::class,
    params: compact('email', 'senha')
  )->fetch();

  if ($usuario) {
    // Se usuário existe, adicionamos ele na sessão
    $_SESSION['auth'] = $usuario;
    $_SESSION['mensagem'] = 'Seja bem vindo ' . $usuario->nome . '!';
    header('location: /');
    exit();
  }
}

view('login', compact('mensagem'));
