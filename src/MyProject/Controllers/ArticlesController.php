<?php

namespace MyProject\Controllers;

use MyProject\Models\Users\User;
use MyProject\Models\Articles\Article;
use MyProject\View\View;

class ArticlesController
{
    /** @var View */
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function view(int $articleId)
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $this->view->renderHtml('articles/view.php', [
            'article' => $article
        ]);
    }
    public function edit(int $articleId): void
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $article->setName('Новое название статьи');
        $article->setText('новый текст статьи');

        $article->save();
    }
    public function delete(int $articleId)
    {
        $article = Article::getById($articleId);
    
        if($article == null) {
            echo 'Статья не найдена';   
        } else {
            $article->delete();
            echo 'Статья удалена.';
            var_dump($article);
        }
    
    }
    public function add(): void
    {
        $author = User::getById(1);
    
        $article = new Article();
        $article->setAuthor($author);
        $article->setName('Новое название статьи');
        $article->setText('Новый текст статьи');
    
        $article->save();
    
        var_dump($article);
    }
}