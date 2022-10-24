<?php

namespace IlluminateMacro\Support\Str;

use Illuminate\Support\Arr;

/**
 * Strings are equals.
 *
 * @param array<string> $string
 *
 * @mixin \Illuminate\Support\Str
 *
 * @return bool
 */
class Equals
{
  public function __invoke()
  {
    return function (...$strings) :bool {
      // If there are no words, nothing equals nothing
      if (count($strings) == 0) {
        return true;
      }

      // If the first word is a boolean type and is false, we only partially search for words other than false
      $all = Arr::first($strings) === false ? array_shift($strings) : true;

      foreach ($strings as $sourceKey => $source) {
        foreach ($strings as $targetKey => $target) {
          // If strings are equals, skip it
          if ($sourceKey === $targetKey) {
            continue;
          }
          // Comparing two strings
          elseif (static::startsWith($source, $target) && static::endsWith($source, $target)) {
            // If all the strings must equal, then we check the following
            if ($all === true) {
              continue;
            }
            // If it just has to be the same (but not all must be the same, then we return with true)
            return true;
          }
          // If all the words must match, then an exception has been found, so it is false
          elseif ($all === true) {
            return false;
          }
        }
      }

      // If all must match, then it is true here (since the cycle did not find a mismatch)
      // And if we only looked for a match, then with false (since the cycle did not find one)
      return $all === true ? true : false;
    };
  }
}
