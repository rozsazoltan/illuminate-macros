<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Arr;

/**
 * Two arrays is similar (have equal elements)
 *
 * @param array $first
 * @param array $second
 *
 * @mixin \Illuminate\Support\Arr
 *
 * @return bool
 */
class Similar
{
  public function __invoke()
  {
    return function ($first, $second) {
      array_multisort($first);
      array_multisort($second);
    
      return serialize($first) === serialize($second);
    };
  }
}
