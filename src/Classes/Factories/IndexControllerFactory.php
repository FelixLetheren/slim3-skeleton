<?php


namespace Example\Factories;


use Example\Controllers\IndexController;
use Psr\Container\ContainerInterface;

class IndexControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container['renderer'];
        $taskModel = $container['TaskModel'];
        return new IndexController($renderer, $taskModel);
    }

}