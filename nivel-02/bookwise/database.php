<?php

class DB {

    /**
     * Retorna todos os livros do banco de dados
     * 
     * @return array[Livro]
     * 
     */

    public function livros () {
        $db = new PDO('sqlite:database.sqlite');
        $query = $db->query('select * from livros');
        $itens = $query->fetchAll();
        $retorno = [];

        foreach ($itens as $item) {
            $livro = new Livro();

            $livro->id = $item["id"];
            $livro->titulo = $item["titulo"];
            $livro->autor = $item["autor"];
            $livro->descricao = $item["descricao"];

            $retorno [] = $livro;
        }
        

        return $retorno;
    }
}
