<?php

namespace IlluminateMacro\Support\Collection;

class Fifth
{
    public function __invoke()
    {
        return function () {
            return $this->skip(4)->first();
        };
    }
}
