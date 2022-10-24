<?php

namespace IlluminateMacro\Support\Arr;

/**
 * Variable is element of array
 *
 * @param mixed $variable
 * @param array $array
 *
 * @mixin \Illuminate\Support\Arr
 *
 * @return bool
 */
class In
{
  public function __invoke()
  {
    return function (mixed $variable, array $array): bool {
      return in_array($variable, $array);
    };
  }
}
