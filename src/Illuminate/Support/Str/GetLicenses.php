<?php

namespace Datarose\LaravelMacros\Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 * License for files generated by us
 *
 * @param string $name
 *
 * @mixin \Illuminate\Support\Str
 *
 * @return string
 */
class GetLicenses
{
  public function __invoke()
  {
    return function (string $name = 'default') :string {
      $license = Storage::get('license/'.str_replace('.', '/', $name).'.md');
      $license = static::uniqueString($license, [
        '{PROJECTNAME}' => config('app.name'),
        '{USERNAME}' => Auth::user()->getNameAttribute() ?? 'guest',
        '{DATETIME}' => date('Y. m. d. H:i:s', strtotime(now())),
      ], true);

      return $license;
    };
  }
}