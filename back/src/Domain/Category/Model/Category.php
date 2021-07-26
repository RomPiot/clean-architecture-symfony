<?php

namespace Domain\Category\Model;

use DateTimeInterface;

class Category
{
    private string $name;

    private DateTimeInterface $createdAt;

    private DateTimeInterface $updatedAt;

    protected bool $isActivate;

    public function __construct(
        string $name,
        DateTimeInterface $createdAt,
        DateTimeInterface $updatedAt,
        bool $isActivate
    ) {
        $this->name = $name;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->isActivate = $isActivate;
    }
}
