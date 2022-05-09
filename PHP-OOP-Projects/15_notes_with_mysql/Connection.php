<?php

class Connection
{
     public  PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:server=sql113.epizy.com; dbname=epiz_31599578_Notes', "epiz_31599578", "rFdm9339Z3");
        $this->pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    public function getNotes(): bool|array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM notes ORDER BY create_date DESC ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addNote($note)
    {
       $stmt = $this->pdo->prepare("INSERT INTO notes(title, description, create_date) VALUES (:title, :description, :date)");
       $stmt->bindValue('title', $note['title']);
        $stmt->bindValue('description', $note['description']);
        $stmt->bindValue('date', date('Y-m-d H:M:S'));
        return $stmt->execute();

    }

    public function getNoteById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $stmt->bindValue('id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateNote($id , $note)
    {
        $stmt = $this->pdo->prepare("UPDATE notes SET title =:title , description = :description WHERE id = :id");
        $stmt->bindValue('id', $id);
        $stmt->bindValue('title', $note['title']);
        $stmt->bindValue('description', $note['description']);
        return $stmt->execute();
    }

    public function removeNote($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM notes WHERE id = :id");
        $stmt->bindValue('id', $id);
        return $stmt->execute();
    }
}

return new Connection();