<?php

namespace IlluminateMacro\Support\Arr;

/**
 * Variable is array or not
 *
 * @param mixed $variable
 *
 * @mixin \Illuminate\Support\Arr
 *
 * @return bool
 */
class Is
{
  public function __invoke()
  {
    return function (mixed $variable): bool {
      return is_array($variable);
    };
  }
}
