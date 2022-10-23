<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Arr;

use \Illuminate\Support\Arr;

/**
 * Descending sort elements of array by key (or column)
 *
 * @param array $array
 * @param string|null $column
 *
 * @mixin \Illuminate\Support\Arr
 *
 * @return array
 */
class SortByKeyDesc
{
  public function __invoke()
  {
    return function ($array, $column = null) {
      return Arr::sortByKey($array, $column, true);
    };
  }
}
