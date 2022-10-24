<?php

namespace Datarose;

use Datarose\Macros;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class IlluminateMacroServiceProvider extends ServiceProvider
{
  public function register()
  {
    Collection::make(Macros::all())
      ->each(fn ($macros, $class) => Collection::make($macros)
        ->reject(fn ($name, $macro) => $class::hasMacro($macro))
        ->each(fn ($name, $macro) => $class::macro($macro, app($name)()))
      );
  }
}
