<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Collection;

class Seventh
{
    public function __invoke()
    {
        return function () {
            return $this->skip(6)->first();
        };
    }
}
