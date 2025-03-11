<?php

use const Dom\VALIDATION_ERR;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $validacoes = [];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $email_confirmacao = $_POST['email_confirmacao'];
  $senha = $_POST['senha'];

  if (strlen($nome) == 0) {
    $validacoes[] = 'O nome é obrigatório';
  }

  if (strlen($email) == 0) {
    $validacoes[] = 'O email é obrigatório';
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $validacoes[] = 'Email inválido';
  }

  if ($email != $email_confirmacao) {
    $validacoes[] = 'Email de confirmação está diferente';
  }

  if (strlen($senha) == 0) {
    $validacoes[] = 'A senha é obrigatória';
  }

  if (strlen($senha) < 8 || strlen($senha) > 30) {
    $validacoes[] = 'A senha precisa ter entre 8 a 30 caracteres';
  }

  if (! str_contains($senha, '*')) {
    $validacoes[] = 'É obrigatório o uso de * na senha';
  }


  if (sizeof($validacoes) > 0) {
    $_SESSION['validacoes'] = $validacoes;
    header('location: /login');
    exit();
  }


  $database->query(
    query: "insert into usuarios (nome, email, senha) values (:nome, :email, :senha)",
    params: [
      'nome' => $_POST['nome'],
      'email' => $_POST['email'],
      'senha' => $_POST['senha']
    ]
  );

  header('location: /login?mensagem=Registrado com sucesso!');
  exit();
}
