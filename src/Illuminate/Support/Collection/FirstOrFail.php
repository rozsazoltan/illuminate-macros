<?php

namespace IlluminateMacro\Support\Collection;

use IlluminateMacro\Support\Collection\Exceptions\CollectionItemNotFound;

/**
 * Get the first item. Throws CollectionItemNotFound if the item was not found.
 *
 * @mixin \Illuminate\Support\Collection
 *
 * @return mixed
 */
class FirstOrFail
{
    public function __invoke()
    {
        return function () {
            if (! is_null($item = $this->first())) {
                return $item;
            }

            throw new CollectionItemNotFound('No items found in collection.');
        };
    }
}
