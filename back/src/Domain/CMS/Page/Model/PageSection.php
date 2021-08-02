<?php

namespace Domain\CMS\Page\Model;

use Domain\ContentBuilder\Model\Block;
use Domain\Shared\ArrayCollection;

class PageSection
{
    private Page $page;
    /**
     * @return Block[]
     */
    private ArrayCollection $blocks;
    private string $name;
    private bool $isActive = true;

    /**
     *
     * @param Page   $page
     * @param string $name
     *
     * @return void
     */
    public function __construct(
        Page $page,
        string $name,
    ) {
        $this->page = $page;
        $this->blocks = new ArrayCollection();
        $this->name = $name;
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

    /**
     * Get value of blocks
     *
     * @return Block[]
     */
    public function getBlocks(): ArrayCollection
    {
        return $this->blocks;
    }

    /**
     * Add value in blocks
     *
     * @param Block $block
     *
     * @return self
     */
    public function addBlock($block): self
    {
        if (!$this->blocks->contains($block)) {
            $this->blocks->add($block);
            $block->setPageSection($this);
        }

        return $this;
    }

    /**
     * Remove value from blocks
     *
     * @param Block $block
     *
     * @return self
     */
    public function removeBlock($block): self
    {
        if ($this->blocks->removeElement($block)) {
            // TODO
            // if ($block->getPage() === $this) {
            //     $block->setPage(null);
            // }
        }

        return $this;
    }
}
