<?php

namespace MyProject\Controllers;

use MyProject\Models\Articles\Article;
use MyProject\View\View;
use MyProject\Services\Db;

class MainController
{
     private $view;
     private $db;
 
     public function __construct()
     {
         $this->view = new View(__DIR__ . '/../../../templates');
         $this->db = new Db();
     }
 
     public function main()
     {
        $articles = $this->db->query('SELECT * FROM `articles`;', [], Article::class);
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
     }
}
?>