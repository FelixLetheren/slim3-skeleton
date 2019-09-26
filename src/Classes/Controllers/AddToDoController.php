<?php


namespace Example\Controllers;


use Example\Models\TaskModel;
use Slim\Http\Request;
use Slim\Http\Response;

class AddToDoController
{
private $taskModel;
    public function __construct(TaskModel $taskModel)
    {
        $this->taskModel = $taskModel;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $post = $request->getParsedBody();
        $this->taskModel->addTask($post['task-entry']);
        return $response->withRedirect('/');
    }


}