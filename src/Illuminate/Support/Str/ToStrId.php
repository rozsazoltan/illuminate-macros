<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Str;

/**
 * Convert string to identifier. (from beginning of words)
 * ex.: "Laravel Framework" -> "larafram"
 *
 * @param string $string
 * @param int $limit How many chars need from beginning of words?
 *
 * @mixin \Illuminate\Support\Str
 *
 * @return string
 */
class ToStrId
{
  public function __invoke()
  {
    return function (string $string, int $limit = 1, $separator = ' ') :string {
      $words = static::explode($string, $separator);
      $result = '';
      foreach ($words as $word) {
        $result .= static::limit($word, $limit, '');
      }

      return static::uniqueString($result);
    };
  }
}
