<?php


namespace Example\Models;


class TaskModel
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getTasks()
    {
        $sql = $this->db->prepare('SELECT * FROM `tasks`');
        $sql->execute();
         return $sql->fetchAll();
    }

}