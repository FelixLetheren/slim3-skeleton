<?php


namespace Example\Factories;


use Example\Models\TaskModel;
use Psr\Container\ContainerInterface;

class TaskModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container['db'];
        $taskModel = new TaskModel($db);
        return $taskModel;
    }

}