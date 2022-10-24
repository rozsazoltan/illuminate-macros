<?php

namespace IlluminateMacro\Support\Collection;

/**
 * Get a single item from the collection by index.
 *
 * @param mixed $index
 *
 * @mixin \Illuminate\Support\Collection
 *
 * @return mixed
 */
class At
{
    public function __invoke()
    {
        /*
         * Get a single item from the collection by index.
         *
         * @param mixed $index
         *
         * @mixin \Illuminate\Support\Collection
         *
         * @return mixed
         */
        return function ($index) {
            return $this->slice($index, 1)->first();
        };
    }
}
