<?php

namespace Domain\ContentBuilder\Contract;

interface BlockEntityInterface
{
    /**
     * @return mixed
     */
    public function toDefine();
}
