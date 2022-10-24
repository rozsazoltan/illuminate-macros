<?php

namespace IlluminateMacro\Support\Str;

/**
 * Clear special chars from string.
 *
 * @param string $string
 *
 * @mixin \Illuminate\Support\Str
 *
 * @return string
 */
class CleanString
{
  public function __invoke()
  {
    return function (string $string) :string {
      $utf8 = [
        '/[áàâãªä]/u'   =>   'a',
        '/[ÁÀÂÃÄ]/u'    =>   'A',
        '/[ÍÌÎÏ]/u'     =>   'I',
        '/[íìîï]/u'     =>   'i',
        '/[éèêë]/u'     =>   'e',
        '/[ÉÈÊË]/u'     =>   'E',
        '/[óòôõºöő]/u'   =>   'o',
        '/[ÓÒÔÕÖŐ]/u'    =>   'O',
        '/[úùûüű]/u'     =>   'u',
        '/[ÚÙÛÜŰ]/u'     =>   'U',
        '/ç/'           =>   'c',
        '/Ç/'           =>   'C',
        '/ñ/'           =>   'n',
        '/Ñ/'           =>   'N',
        '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
        '/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote
        '/[“”«»„]/u'    =>   ' ', // Double quote
        '/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
      ];

      return preg_replace(array_keys($utf8), array_values($utf8), $string);
    };
  }
}
