<?php


namespace Example\Factories;


use Example\Controllers\UpdateToDoController;
use Psr\Container\ContainerInterface;

class UpdateToDoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $taskModel = $container['TaskModel'];
         return new UpdateToDoController($taskModel);
    }

}