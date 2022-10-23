<?php

namespace Datarose\LaravelMacros;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class LaravelMacroServiceProvider extends ServiceProvider
{
  public function register()
  {
    Collection::make($this->macros())
      ->each(fn ($macros, $class) => Collection::make($macros)
        ->reject(fn ($name, $macro) => $class::hasMacro($macro))
        ->each(fn ($name, $macro) => $class::macro($macro, app($name)()))
      );
  }

  private function macros(): array
  {
    return [
      \Illuminate\Routing\Route::class => [
        'getGroupNames' => \Datarose\LaravelMacros\Illuminate\Routing\Route\GetGroupNames::class,
      ],

      \Illuminate\Support\Arr::class => [
        'in' => \Datarose\LaravelMacros\Illuminate\Support\Arr\In::class,
        'is' => \Datarose\LaravelMacros\Illuminate\Support\Arr\Is::class,
        'merge' => \Datarose\LaravelMacros\Illuminate\Support\Arr\Merge::class,
        'similar' => \Datarose\LaravelMacros\Illuminate\Support\Arr\Similar::class,
        'sortByKey' => \Datarose\LaravelMacros\Illuminate\Support\Arr\SortByKey::class,
        'sortByKeyDesc' => \Datarose\LaravelMacros\Illuminate\Support\Arr\SortByKeyDesc::class,
      ],
      \Illuminate\Support\Str::class => [
        'equals' => \Datarose\LaravelMacros\Illuminate\Support\Str\Equals::class,
        'explode' => \Datarose\LaravelMacros\Illuminate\Support\Str\Explode::class,
        'uniqueString' => \Datarose\LaravelMacros\Illuminate\Support\Str\UniqueString::class,
        'cleanString' => \Datarose\LaravelMacros\Illuminate\Support\Str\CleanString::class,
        'toStrId' => \Datarose\LaravelMacros\Illuminate\Support\Str\ToStrId::class,
        'getModelName' => \Datarose\LaravelMacros\Illuminate\Support\Str\GetModelName::class,
        'getLicenses' => \Datarose\LaravelMacros\Illuminate\Support\Str\GetLicenses::class,
      ],

      \Illuminate\Support\Collection::class => [
        'after' => \Datarose\LaravelMacros\Illuminate\Support\Collection\After::class,
        'at' => \Datarose\LaravelMacros\Illuminate\Support\Collection\At::class,
        'before' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Before::class,
        'chunkBy' => \Datarose\LaravelMacros\Illuminate\Support\Collection\ChunkBy::class,
        'collectBy' => \Datarose\LaravelMacros\Illuminate\Support\Collection\CollectBy::class,
        'containsAll' => \Datarose\LaravelMacros\Illuminate\Support\Collection\ContainsAll::class,
        'containsAny' => \Datarose\LaravelMacros\Illuminate\Support\Collection\ContainsAny::class,
        'eachCons' => \Datarose\LaravelMacros\Illuminate\Support\Collection\EachCons::class,
        'eighth' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Eighth::class,
        'extract' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Extract::class,
        'fifth' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Fifth::class,
        'filterMap' => \Datarose\LaravelMacros\Illuminate\Support\Collection\FilterMap::class,
        'firstOrFail' => \Datarose\LaravelMacros\Illuminate\Support\Collection\FirstOrFail::class,
        'firstOrPush' => \Datarose\LaravelMacros\Illuminate\Support\Collection\FirstOrPush::class,
        'fourth' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Fourth::class,
        'fromPairs' => \Datarose\LaravelMacros\Illuminate\Support\Collection\FromPairs::class,
        'getNth' => \Datarose\LaravelMacros\Illuminate\Support\Collection\GetNth::class,
        'glob' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Glob::class,
        'groupByModel' => \Datarose\LaravelMacros\Illuminate\Support\Collection\GroupByModel::class,
        'head' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Head::class,
        'if' => \Datarose\LaravelMacros\Illuminate\Support\Collection\IfMacro::class,
        'ifAny' => \Datarose\LaravelMacros\Illuminate\Support\Collection\IfAny::class,
        'ifEmpty' => \Datarose\LaravelMacros\Illuminate\Support\Collection\IfEmpty::class,
        'insertAfter' => \Datarose\LaravelMacros\Illuminate\Support\Collection\InsertAfter::class,
        'insertAfterKey' => \Datarose\LaravelMacros\Illuminate\Support\Collection\InsertAfterKey::class,
        'insertAt' => \Datarose\LaravelMacros\Illuminate\Support\Collection\InsertAt::class,
        'insertBefore' => \Datarose\LaravelMacros\Illuminate\Support\Collection\InsertBefore::class,
        'insertBeforeKey' => \Datarose\LaravelMacros\Illuminate\Support\Collection\InsertBeforeKey::class,
        'ninth' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Ninth::class,
        'none' => \Datarose\LaravelMacros\Illuminate\Support\Collection\None::class,
        'paginate' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Paginate::class,
        'parallelMap' => \Datarose\LaravelMacros\Illuminate\Support\Collection\ParallelMap::class,
        'path' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Path::class,
        'pluckMany' => \Datarose\LaravelMacros\Illuminate\Support\Collection\PluckMany::class,
        'pluckToArray' => \Datarose\LaravelMacros\Illuminate\Support\Collection\PluckToArray::class,
        'prioritize' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Prioritize::class,
        'rangeByKey' => \Datarose\LaravelMacros\Illuminate\Support\Collection\RangeByKey::class,
        'recursive' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Recursive::class,
        'rotate' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Rotate::class,
        'second' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Second::class,
        'sectionBy' => \Datarose\LaravelMacros\Illuminate\Support\Collection\SectionBy::class,
        'seventh' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Seventh::class,
        'simplePaginate' => \Datarose\LaravelMacros\Illuminate\Support\Collection\SimplePaginate::class,
        'sixth' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Sixth::class,
        'sliceBefore' => \Datarose\LaravelMacros\Illuminate\Support\Collection\SliceBefore::class,
        'tail' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Tail::class,
        'tenth' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Tenth::class,
        'third' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Third::class,
        'toPairs' => \Datarose\LaravelMacros\Illuminate\Support\Collection\ToPairs::class,
        'transpose' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Transpose::class,
        'try' => \Datarose\LaravelMacros\Illuminate\Support\Collection\TryCatch::class,
        'validate' => \Datarose\LaravelMacros\Illuminate\Support\Collection\Validate::class,
        'weightedRandom' => \Datarose\LaravelMacros\Illuminate\Support\Collection\WeightedRandom::class,
        'withSize' => \Datarose\LaravelMacros\Illuminate\Support\Collection\WithSize::class,
      ],
      \Illuminate\Support\LazyCollection::class => [
        'rangeByKey' => \Datarose\LaravelMacros\Illuminate\Support\LazyCollection\RangeByKey::class,
      ],
    ];
  }
}
