<?php

namespace Domain\ContentBuilder\Contract;

interface BlockTypeInterface
{
    /**
     * @return mixed
     */
    public function getContent();
}
