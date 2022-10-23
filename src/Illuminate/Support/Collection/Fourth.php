<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Collection;

class Fourth
{
    public function __invoke()
    {
        return function () {
            return $this->skip(3)->first();
        };
    }
}
