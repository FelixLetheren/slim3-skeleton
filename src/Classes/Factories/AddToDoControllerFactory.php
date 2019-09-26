<?php


namespace Example\Factories;


use Example\Controllers\AddToDoController;
use Psr\Container\ContainerInterface;

class AddToDoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $taskModel = $container['TaskModel'];
      return new AddToDoController($taskModel);
    }

}