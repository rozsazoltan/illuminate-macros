<?php

namespace IlluminateMacro\Support\Collection;

use IlluminateMacro\Support\Collection\Helpers\CatchableCollectionProxy;

class TryCatch
{
    public function __invoke()
    {
        return function () {
            return new CatchableCollectionProxy($this);
        };
    }
}
