<?php

namespace Domain\Category\Model;

use DateTimeImmutable;
use DateTimeInterface;

class Category
{
    private string $name;
    private DateTimeInterface $createdAt;
    private DateTimeInterface $updatedAt;
    private bool $isActive;

    /**
     * Category constructor
     *
     * @param string $name
     * @param bool   $isActive
     *
     * @return void
     */
    public function __construct(
        string $name,
        bool $isActive = true
    ) {
        $this->name = $name;
        $this->createdAt = new DateTimeImmutable();
        $this->isActive = $isActive;
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

     * @return self
     */
    public function setUpdatedAt(DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

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
      * @param bool $isActive 7

      * @return self
      */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }
}
