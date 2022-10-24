<?php

namespace IlluminateMacro\Support\Arr;

/**
 * Sort elements of array by key (or column)
 *
 * @param array $array
 * @param string|null $column
 * @param bool $descending
 *
 * @mixin \Illuminate\Support\Arr
 *
 * @return array
 */
class SortByKey
{
  public function __invoke()
  {
    return function ($array, $column = null, $descending = false) {
      return collect($array)->sortBy(function ($value, $key) use ($column) {
        return is_null($column) ? $key : $value[$column];
      }, \SORT_REGULAR, $descending)->toArray();
    };
  }
}
