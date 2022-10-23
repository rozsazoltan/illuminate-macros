<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Collection;

class Second
{
    public function __invoke()
    {
        return function () {
            return $this->skip(1)->first();
        };
    }
}
