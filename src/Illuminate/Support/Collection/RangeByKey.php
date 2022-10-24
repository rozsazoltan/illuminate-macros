<?php

namespace IlluminateMacro\Support\Collection;

use Illuminate\Support\Collection;

/**
 * Create a new collection with range of key.
 *
 * @param int $start
 * @param int $number
 * @param (callable(int): mixed)|null $callback
 *
 * @mixin \Illuminate\Support\Collection
 *
 * @return \Illuminate\Support\Collection
 */
class RangeByKey
{
  public function __invoke()
  {
    return fn ($start, $number, callable $callback = null) => Collection::range($start, $number)
      ->keyBy(fn ($item) => $item)
      ->unless($callback === null)
      ->map($callback);
  }
}
