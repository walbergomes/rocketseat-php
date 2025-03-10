<?php

class DB
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    /**
     * Retorna todos os livros do banco de dados
     * 
     * @return array[Livro]
     * 
     */

    public function livros($id = null)
    {
        $query = $this->db->query("select * from livros");
        $itens = $query->fetchAll();

        return array_map(fn($item) => Livro::make($item), $itens);
    }

    public function  livro($id)
    {
        $sql = "select * from livros";
        $sql .= " where id = " . $id;

        $query = $this->db->query($sql);
        $itens = $query->fetchAll();

        return array_map(fn($item) => Livro::make($item), $itens)[0];
    }
}
