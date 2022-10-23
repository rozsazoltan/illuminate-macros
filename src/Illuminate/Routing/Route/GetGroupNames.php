<?php

namespace Datarose\LaravelMacros\Illuminate\Routing\Route;

use Illuminate\Support\Str;

/**
 * Get current route's group(s).
 * 
 * ex.: ['admin', 'permissions', 'roles']
 *         1st         2nd         3rd
 * 
 * $nth = null
 * return: ['admin', 'permissions', 'roles']
 * 
 * $nth = 'first' or 0 or 1 (first element from the beginning)
 * return: 'admin'
 * 
 * $nth = 'last' or -1 (first element from the end)
 * return: 'roles'
 * 
 * $nth > 0
 * return: $nth element from the beginning
 *
 * $nth < 0
 * return: abs($nth) element from the end
 * 
 * @see \Illuminate\Routing\Route::getName
 *
 * @param int|string|null $nth
 *
 * @mixin \Illuminate\Routing\Route
 *
 * @return array<string>|string
 */
class GetGroupNames
{
  public function __invoke()
  {
    return function (int|string $nth = null): array|string {
      // Route name
      $route = $this->getName();
      // Array of Route's groups
      $groups = Str::contains($route, '.')
                ? Str::explode(Str::beforeLast($route, '.'), '.')
                : [];

      // If number is 'first' --> 1st
      if ($nth == 'first') {
        $nth = 1;
      }

      // If number is 'last' --> (count of groups - 1)th
      elseif ($nth == 'last') {
        $nth = count($groups);
      }

      // If number is zero --> get first element
      elseif ($nth === 0) {
        $nth = 1;
      }

      // Interpretation of a negative serial number (we want get which element from the end)
      elseif ($nth < 0) {
        $nth = count($groups) + $nth;
      }

      return is_null($nth) ? $groups : $groups[$nth - 1] ?? null;
    };
  }
}
