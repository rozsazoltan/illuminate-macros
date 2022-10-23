<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Collection;

class Sixth
{
    public function __invoke()
    {
        return function () {
            return $this->skip(5)->first();
        };
    }
}
