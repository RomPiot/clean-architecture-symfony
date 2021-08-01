<?php

namespace Domain\ContentBuilder\Model;

use Domain\CMS\Page\Model\PageSection;
use Domain\ContentBuilder\Contract\BlockEntityInterface;
use Domain\ContentBuilder\Contract\BlockTypeInterface;

class Block
{
    private BlockEntityInterface $entity;
    private ?PageSection $pageSection;
    private BlockTypeInterface $blockType;
    private string $name;

    /**
     *
     * @param BlockEntityInterface $entity
     * @param mixed                $blockType
     * @param string               $name
     * @param PageSection          $pageSection
     *
     * @return void
     */
    public function __construct(
        BlockEntityInterface $entity,
        $blockType,
        string $name,
        PageSection $pageSection,
    ) {
        $this->entity = $entity;
        $this->blockType = $blockType;
        $this->name = $name;
        $this->section = $pageSection;
    }

    /**
     * Get the value of entity
     *
     * @return BlockEntityInterface
     */
    public function getEntity(): BlockEntityInterface
    {
        return $this->entity;
    }

    /**
     * Set the value of entity
     *
     * @param BlockEntityInterface $entity
     *
     * @return self
     */
    public function setEntity(BlockEntityInterface $entity): self
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
     * @return BlockTypeInterface
     */
    public function getBlockType(): BlockTypeInterface
    {
        return $this->blockType;
    }

    /**
     * Set the value of blockType
     *
     * @param BlockTypeInterface $blockType
     *
     * @return self
     */
    public function setBlockType(BlockTypeInterface $blockType): self
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
}
