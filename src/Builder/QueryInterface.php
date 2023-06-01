<?php

namespace Aigletter\Contracts\Builder;

interface QueryInterface
{
    /**
     * @return array
     */
    public function one(): array;

    /**
     * @return array
     */
    public function all(): array;
}