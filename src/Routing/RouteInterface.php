<?php

namespace Aigletter\Contracts\Routing;

interface RouteInterface
{
    public function route(): callable;
}
