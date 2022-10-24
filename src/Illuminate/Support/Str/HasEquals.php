<?php

namespace IlluminateMacro\Support\Str;

/**
 * Strings have equals.
 *
 * @param array<string> $string
 *
 * @mixin \Illuminate\Support\Str
 *
 * @return bool
 */
class HasEquals
{
  public function __invoke()
  {
    return function (...$strings) :bool {
      return static::equals(array_unshift($strings, false));
    };
  }
}
