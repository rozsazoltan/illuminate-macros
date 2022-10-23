<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Collection;

class Eighth
{
    public function __invoke()
    {
        return function () {
            return $this->skip(7)->first();
        };
    }
}
