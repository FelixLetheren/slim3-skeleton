<?php


namespace Example\Controllers;


use Example\Models\TaskModel;
use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\PhpRenderer;

class IndexController
{
    private $renderer;
    private $taskModel;

    public function __construct(PhpRenderer $renderer, TaskModel $taskModel)
    {
        $this->renderer = $renderer;
        $this->taskModel = $taskModel;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $this->renderer->render($response, 'index.phtml', ['tasks' => $this->taskModel->getTasks()]);
    }


}