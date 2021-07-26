<?php

namespace Domain\Article\Entity;

use DateTimeInterface;

class Article
{
    private string $title;

    private string $content;

    private DateTimeInterface $createdAt;

    private DateTimeInterface $updatedAt;

    private bool $isPublished;

    public function __construct(
        string $title,
        string $content,
        DateTimeInterface $createdAt,
        DateTimeInterface $updatedAt,
        bool $isPublished
    ) {
        $this->title = $title;
        $this->content = $content;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->isPublished = $isPublished;
    }

}
