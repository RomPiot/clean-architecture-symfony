<?php

namespace Domain\ContentBuilder\Model;

use Domain\CMS\Page\Model\PageSection;
use Domain\ContentBuilder\Contract\BlockType;
use Domain\ContentBuilder\Contract\BlockEntity;

class Block
{
    private BlockEntity $entity;
    private ?PageSection $pageSection;
    private BlockType $blockType;
    private string $name;
    private int $column;

    /**
     *
     * @param BlockEntity $entity
     * @param BlockType   $blockType
     * @param string      $name
     * @param PageSection $pageSection
     * @param int         $column
     *
     * @return void
     */
    public function __construct(
        BlockEntity $entity,
        BlockType $blockType,
        string $name,
        ?PageSection $pageSection,
        int $column = 12
    ) {
        $this->entity = $entity;
        $this->blockType = $blockType;
        $this->name = $name;
        $this->section = $pageSection;
        $this->column = $column;
    }

    /**
     * Get the value of entity
     *
     * @return BlockEntity
     */
    public function getEntity(): BlockEntity
    {
        return $this->entity;
    }

    /**
     * Set the value of entity
     *
     * @param BlockEntity $entity
     *
     * @return self
     */
    public function setEntity(BlockEntity $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * Get the value of pageSection
     *
     * @return PageSection
     */
    public function getPageSection(): PageSection
    {
        return $this->pageSection;
    }

    /**
     * Set the value of pageSection
     *
     * @param PageSection $pageSection
     *
     * @return self
     */
    public function setPageSection(PageSection $pageSection): self
    {
        $this->pageSection = $pageSection;

        return $this;
    }

    /**
     * Get the value of blockType
     *
     * @return BlockType
     */
    public function getBlockType(): BlockType
    {
        return $this->blockType;
    }

    /**
     * Set the value of blockType
     *
     * @param BlockType $blockType
     *
     * @return self
     */
    public function setBlockType(BlockType $blockType): self
    {
        $this->blockType = $blockType;

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
}
