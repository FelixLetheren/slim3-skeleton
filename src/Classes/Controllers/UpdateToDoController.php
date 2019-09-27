<?php


namespace Example\Controllers;


use Example\Models\TaskModel;
use Slim\Http\Request;
use Slim\Http\Response;

class UpdateToDoController
{
public $TaskModel;

    public function __construct(TaskModel $taskModel)
    {
        $this->TaskModel = $taskModel;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
     $postId = $request->getParsedBody();
     $this->TaskModel->markTaskAsChecked($postId);
    }


}