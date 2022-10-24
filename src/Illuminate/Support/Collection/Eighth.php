<?php

namespace IlluminateMacro\Support\Collection;

class Eighth
{
    public function __invoke()
    {
        return function () {
            return $this->skip(7)->first();
        };
    }
}
