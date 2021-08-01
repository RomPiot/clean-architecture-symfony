<?php

namespace Domain\CMS\Page\Model;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class Page
{
    private UuidInterface $uuid;
    /**
     * Page constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->uuid = Uuid::uuid4();
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
     * Get the value of  title
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
}
