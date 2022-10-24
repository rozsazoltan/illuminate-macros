<?php

namespace IlluminateMacro\Support\Str;

/**
 * Get Model by name with path.
 * ex.: getModelName('Test') -> \\App\\Models\\Test
 *
 * @param string $string name of model
 * @param string $folder
 *
 * @mixin \Illuminate\Support\Str
 *
 * @return string
 */
class GetModelName
{
  public function __invoke()
  {
    return function (string $string, string $folder = null) :string {
      $string = static::cleanString($string);
      $fileNameParts = explode('_', $string);
      $fileNameParts = array_map(function ($part) {
        return static::ucfirst($part);
      }, $fileNameParts);

      $fileName = implode('', $fileNameParts);
      $name = is_null($folder)
              ? $fileName
              : $folder.'\\'.$fileName;

      return '\\App\\Models\\'.$name;
    };
  }
}
