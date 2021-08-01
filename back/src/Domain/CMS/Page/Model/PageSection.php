<?php

namespace Domain\CMS\Page\Model;

use Domain\ContentBuilder\Model\Block;

class PageSection
{
    private Page $page;
    /**
     * @return Block[]
     */
    private $blocks;
    private string $name;
    private int $column;
    private bool $isActive = true;

    /**
     *
     * @param Page   $page
     * @param string $name
     * @param int    $column
     *
     * @return void
     */
    public function __construct(
        Page $page,
        string $name,
        int $column = 12
    ) {
        $this->page = $page;
        $this->blocks = [];
        $this->name = $name;
        $this->column = $column;
    }

    /**
     * Get the value of page
     *
     * @return Page
     */
    public function getPage(): Page
    {
        return $this->page;
    }

    /**
     * Set the value of page
     *
     * @param Page $page
     *
     * @return self
     */
    public function setPage(Page $page): self
    {
        $this->page = $page;

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
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of column
     *
     * @return int
     */
    public function getColumn(): int
    {
        return $this->column;
    }

    /**
     * Set the value of column
     *
     * @param int $column
     *
     * @return self
     */
    public function setColumn(int $column): self
    {
        $this->column = $column;

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
