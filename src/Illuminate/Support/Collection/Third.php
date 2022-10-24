<?php

namespace IlluminateMacro\Support\Collection;

class Third
{
    public function __invoke()
    {
        return function () {
            return $this->skip(2)->first();
        };
    }
}
