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

    public function addTask($task){
        $sql = $this->db->prepare('INSERT INTO `tasks`(task) VALUE (:task);');
        $sql->bindParam('task', $task, \PDO::PARAM_STR);
        $sql->execute();
    }

    public function markTaskAsChecked($task){
        $sql = $this->db->prepare('UPDATE `tasks` SET `completed` = 1 WHERE `id` = :task;');
        $sql->bindParam('task', $task['taskId'], \PDO::PARAM_INT);
        $sql->execute();
    }

}