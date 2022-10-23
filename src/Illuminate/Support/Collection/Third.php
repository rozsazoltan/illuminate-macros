<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Collection;

class Third
{
    public function __invoke()
    {
        return function () {
            return $this->skip(2)->first();
        };
    }
}
