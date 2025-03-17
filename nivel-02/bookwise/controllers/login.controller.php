<?php

require __DIR__ . '/../Validacao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $validacao = Validacao::validar([
    'email' => ['required', 'email'],
    'senha' => ['required']
  ], $_POST);

  if ($validacao->naoPassou('login')) {
    header('location: /login');
    exit();
  }

  // Consulta no banco de dados com email e senha
  $usuario = $database->query(
    query: "select * from usuarios
              where email = :email",
    class: Usuario::class,
    params: compact('email')
  )->fetch();

  if ($usuario) {

    // validar senha
    if (! password_verify($_POST['senha'], $usuario->senha) ) {
      flash()->push("validacoes_login", ["Email ou senha incorretos!"]);
      header('location: /login');
      exit();
    }

    // Se usuário existe, adicionamos ele na sessão
    $_SESSION['auth'] = $usuario;

    flash()->push('mensagem', 'Seja bem vindo ' . $usuario->nome . '!');

    header('location: /');
    exit();
  }
}

view('login');
