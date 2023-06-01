<?php

namespace Aigletter\Contracts\Builder;

interface DbInterface
{
    /**
     * @param string $sql
     * @return array
     */
    public function query(string $sql): array;
}