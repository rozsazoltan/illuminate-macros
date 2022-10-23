<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Collection;

use Datarose\LaravelMacros\Illuminate\Support\Collection\Helpers\CatchableCollectionProxy;

class TryCatch
{
    public function __invoke()
    {
        return function () {
            return new CatchableCollectionProxy($this);
        };
    }
}
