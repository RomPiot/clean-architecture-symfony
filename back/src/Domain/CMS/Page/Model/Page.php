<?php

namespace Domain\CMS\Page\Model;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class Page
{
    private UuidInterface $uuid;
    private string $title;
    /**
     * @return PageSection[]
     */
    private $sections = [];
    /**
     * @return Block[]
     */
    private $blocks = [];
    private bool $isCommentedAllowed;
    private bool $isActive;

     /**
      *
      * @param string $title
      * @param bool   $isCommentedAllowed
      * @param bool   $isActive

      * @return void
      */
    public function __construct(
        string $title,
        bool $isCommentedAllowed = true,
        bool $isActive = true
    ) {
        $this->uuid = Uuid::uuid4();
        $this->title = $title;
        $this->isCommentedAllowed = $isCommentedAllowed;
    }

    /**
     * Get the value of uuid
     *
     * @return UuidInterface
     */
    public function getUuid(): UuidInterface
    {
        return $this->uuid;
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
     * Get the value of sections
     *
     * @return PageSection[]
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Set the value of sections
     *
     * @param PageSection $section
     *
     * @return self
     */
    public function setSections($section): self
    {
        $this->sections[] = $section;

        return $this;
    }

    /**
     * Get the value of blocks
     *
     * @return Block[]
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * Set the value of blocks
     *
     * @param Block $block
     *
     * @return self
     */
    public function setBlocks($block): self
    {
        $this->blocks[] = $block;

        return $this;
    }

    /**
     * Get the value of isCommentedAllowed
     *
     * @return bool
     */
    public function getIsCommentedAllowed(): bool
    {
        return $this->isCommentedAllowed;
    }

    /**
     * Set the value of isCommentedAllowed
     *
     * @param bool $isCommentedAllowed
     *
     * @return self
     */
    public function setIsCommentedAllowed(bool $isCommentedAllowed): self
    {
        $this->isCommentedAllowed = $isCommentedAllowed;

        return $this;
    }

    /**
     * Get the value of isActive
     *
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * Set the value of isActive
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }
}
