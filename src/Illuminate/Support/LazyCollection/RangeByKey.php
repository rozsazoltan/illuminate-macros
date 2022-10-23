<?php

namespace Datarose\LaravelMacros\Illuminate\Support\LazyCollection;

use Illuminate\Support\LazyCollection;

/**
 * Create a new lazy collection with range of key.
 *
 * @param int $start
 * @param int $number
 * @param (callable(int): mixed)|null $callback
 *
 * @mixin \Illuminate\Support\LazyCollection
 *
 * @return \Illuminate\Support\LazyCollection
 */
class RangeByKey
{
  public function __invoke()
  {
    return fn ($start, $number, callable $callback = null) => LazyCollection::range($start, $number)
      ->keyBy(fn ($item) => $item)
      ->unless($callback === null)
      ->map($callback);
  }
}
