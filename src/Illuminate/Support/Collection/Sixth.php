<?php

namespace IlluminateMacro\Support\Collection;

class Sixth
{
    public function __invoke()
    {
        return function () {
            return $this->skip(5)->first();
        };
    }
}
