<?php


$livro = $database->query(
    "select * from livros where id = :id",
    Livro::class,
    ['id' => $_GET['id']]
)->fetch();


$avaliacoes = $database
    ->query("select * from avaliacoes where livro_id = :id", Avaliacao::class, ['id' => $_GET['id']])
    ->fetchAll();

view("livro", compact('livro', 'avaliacoes'));
