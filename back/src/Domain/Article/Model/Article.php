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


    /**
     * Get the value of title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of createdAt
     *
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @param DateTimeInterface $createdAt
     *
     * @return self
     */
    public function setCreatedAt(DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of updatedAt
     *
     * @return DateTimeInterface
     */
    public function getUpdatedAt(): DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of updatedAt
     *
     * @param DateTimeInterface $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get the value of isPublished
     *
     * @return bool
     */
    public function getIsPublished(): bool
    {
        return $this->isPublished;
    }

    /**
     * Set the value of isPublished
     *
     * @param bool $isPublished
     *
     * @return self
     */
    public function setIsPublished(bool $isPublished): self
    {
        $this->isPublished = $isPublished;

        return $this;
    }
}
