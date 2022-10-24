<?php

namespace IlluminateMacro\Support\Arr;

use Illuminate\Support\Arr;

/**
 * Merge two or more arrays
 *
 * @param array $target
 * @param array<array> $sources
 *
 * @mixin \Illuminate\Support\Arr
 *
 * @return array
 */
class Merge
{
  public function __invoke()
  {
    return function (array $target, ...$sources) {
      foreach ($sources as $source) {
        if (Arr::is($source) === false) {
        continue;
        }
        $target = array_merge($target, $source);
      }
    
      return $target;
    };
  }
}
