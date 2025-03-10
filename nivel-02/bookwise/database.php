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

    public function livros($pesquisa = '')
    {
        
        $prepare = $this->db->prepare("select * from livros where titulo like :pesquisa");
        $prepare->bindValue('pesquisa', "%$pesquisa%");
        $prepare->execute();

        $itens = $prepare->fetchAll();

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
