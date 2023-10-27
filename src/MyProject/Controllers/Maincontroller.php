<?php

namespace MyProject\Controllers;
use MyProject\View\View;

class MainController
{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }
    public function main()
    {
        $articles = [
            ['name' => 'Статья 1', 'text' => 'Текст статьи 1'],
            ['name' => 'Статья 2', 'text' => 'Текст статьи 2'],
        ];
        include __DIR__ . '/../../../templates/main/main.php';
    }
    public function sayHello(string $name)
    {
        $this->view->renderHtml('main/hello.php', ['name' => $name,'title'=> 'Страница приветсвия']);
 
    }
    public function sayBay(string $name)
    {
        $this->view->renderHtml('main/bay.php', ['name' => $name,'title'=> 'Страница прощания']);
    }
}

?>