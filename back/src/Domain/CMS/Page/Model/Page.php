<?php

namespace Domain\CMS\Page\Model;

use Domain\ContentBuilder\Contract\BlockEntityInterface;
use Domain\ContentBuilder\Trait\BlockTrait;
use Domain\Shared\ArrayCollection;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class Page implements BlockEntityInterface
{
    use BlockTrait;

    private UuidInterface $uuid;
    private string $title;
    /**
     * @return PageSection[]
     */
    private ArrayCollection $sections;
    /**
     * @return Block[]
     */
    private ArrayCollection $blocks;
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
        $this->blocks = new ArrayCollection();
        $this->sections = new ArrayCollection();
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
    public function getSections(): ArrayCollection
    {
        return $this->sections;
    }

    /**
     * Add value in sections
     *
     * @param PageSection $section
     *
     * @return self
     */
    public function addSection($section): self
    {

        if (!$this->sections->contains($section)) {
            $this->sections->add($section);
            $section->setPage($this);
        }

        return $this;
    }

    /**
     * Remove value from sections
     *
     * @param PageSection $section
     *
     * @return self
     */
    public function removeSection($section): self
    {
        if ($this->sections->removeElement($section)) {
            if ($section->getPage() === $this) {
                // TODO
                // $section->setPage(null);
            }
        }

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
