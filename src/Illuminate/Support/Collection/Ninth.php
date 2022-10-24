<?php

namespace IlluminateMacro\Support\Collection;

class Ninth
{
    public function __invoke()
    {
        return function () {
            return $this->skip(8)->first();
        };
    }
}
