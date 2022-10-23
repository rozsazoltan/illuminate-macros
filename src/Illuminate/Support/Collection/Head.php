<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Collection;

/**
 * Get the first item from the collection.
 *
 * @mixin \Illuminate\Support\Collection
 *
 * @return mixed
 */
class Head
{
    public function __invoke()
    {
        return function () {
            return $this->first();
        };
    }
}
