<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Collection;

class IfMacro
{
    public function __invoke()
    {
        return function (mixed $if, mixed $then = null, mixed $else = null): mixed {
            return value($if, $this) ? value($then, $this) : value($else, $this);
        };
    }
}
