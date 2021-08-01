<?php

namespace Domain\CMS\Article\Model;

use DateTimeImmutable;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;

class Article
{
    private string $title;
    private string $content;
    private DateTimeInterface $createdAt;
    private DateTimeInterface $updatedAt;
    private bool $isPublished;
    private bool $isActive;
    private ArrayCollection $categories;

    /**
     * Article constructor
     *
     * @param string          $title
     * @param string          $content
     * @param ArrayCollection $categories
     * @param boolean         $isPublished
     * @param boolean         $isActive
     *
     * @return void
     */
    public function __construct(
        string $title,
        string $content,
        ArrayCollection $categories,
        bool $isPublished = false,
        bool $isActive = true,
    ) {
        $this->title       = $title;
        $this->content     = $content;
        $this->createdAt   = new DateTimeImmutable();
        $this->isPublished = $isPublished;
        $this->isActive    = $isActive;
        $this->categories  = $categories;
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
     * @return boolean
     */
    public function getIsPublished(): bool
    {
        return $this->isPublished;
    }

    /**
     * Set the value of isPublished
     *
     * @param boolean $isPublished
     *
     * @return self
     */
    public function setIsPublished(bool $isPublished): self
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get the value of isActive
     *
     * @return boolean
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * Set the value of isActive
     *
     * @param boolean $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get the value of categories
     *
     * @return ArrayCollection
     */
    public function getCategories(): ArrayCollection
    {
        return $this->categories;
    }

    /**
     * Set the value of categories
     *
     * @param ArrayCollection $categories
     *
     * @return self
     */
    public function setCategories(ArrayCollection $categories): self
    {
        $this->categories = $categories;

        return $this;
    }
}
