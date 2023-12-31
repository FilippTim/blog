<?php

namespace MyProject\Models\Articles;

use MyProject\Models\ActiveRecordEntity;
use MyProject\Models\Users\User;

class Article extends ActiveRecordEntity
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $text;

    /** @var string */
    protected $authorId;

    /** @var string */
    protected $createdAt;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): User
    {
        return User::getById($this->authorId);
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setText(string $text)
    {
        $this->text= $text;
    }
    public function setAuthor(User $author): void
    {
        $this->authorId = $author->getId();
    }

    protected static function getTableName(): string
    {
        return 'articles';
    }
}