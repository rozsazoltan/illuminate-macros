<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Str;

/**
 * Convert string to array by separator.
 *
 * @param string $string
 * @param string $separator
 *
 * @mixin \Illuminate\Support\Str
 *
 * @return array
 */
class Explode
{
  public function __invoke()
  {
    return function ($string, $separator = '.') :array {
      return explode($separator, $string);
    };
  }
}
