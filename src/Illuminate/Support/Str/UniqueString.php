<?php

namespace IlluminateMacro\Support\Str;

/**
 * Clear special chars from string.
 *
 * @param string $string
 * @param array $extraDict "to be replaced" -> "new"
 * @param bool $justDict only replaced needed
 *
 * @mixin \Illuminate\Support\Str
 *
 * @return string
 */
class UniqueString
{
  public function __invoke()
  {
    return function (string $string, array $extraDict = [], bool $justDict = false) :string {
      $dict = array_merge([
        // "I'm"      => "I am",
        // "thier"    => "their",
        // Saját egyedi cserék
      ], $extraDict);

      $string = str_replace( // preg_replace can be used to support more complicated replacements
              array_keys($dict),
              array_values($dict),
              urldecode($string)
          );

      if ($justDict == true) {
        return $string;
      }

      return strtolower(
              preg_replace(
                ['#[\\s-]+#', '#[^A-Za-z0-9. -]+#'],
                ['-', ''],
                static::cleanString(
                    $string
                )
              )
          );
    };
  }
}
