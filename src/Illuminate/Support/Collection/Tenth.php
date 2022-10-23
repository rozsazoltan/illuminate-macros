<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Collection;

class Tenth
{
    public function __invoke()
    {
        return function () {
            return $this->skip(9)->first();
        };
    }
}
