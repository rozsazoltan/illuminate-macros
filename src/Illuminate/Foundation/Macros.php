<?php

namespace Datarose;

class Macros
{
  public static function all(): array
  {
    return [
      \Illuminate\Routing\Route::class => [
        'getGroupNames' => \IlluminateMacro\Routing\Route\GetGroupNames::class,
      ],

      \Illuminate\Support\Arr::class => [
        'in' => \IlluminateMacro\Support\Arr\In::class,
        'is' => \IlluminateMacro\Support\Arr\Is::class,
        'merge' => \IlluminateMacro\Support\Arr\Merge::class,
        'similar' => \IlluminateMacro\Support\Arr\Similar::class,
        'sortByKey' => \IlluminateMacro\Support\Arr\SortByKey::class,
        'sortByKeyDesc' => \IlluminateMacro\Support\Arr\SortByKeyDesc::class,
      ],
      \Illuminate\Support\Str::class => [
        'equals' => \IlluminateMacro\Support\Str\Equals::class,
        'explode' => \IlluminateMacro\Support\Str\Explode::class,
        'uniqueString' => \IlluminateMacro\Support\Str\UniqueString::class,
        'cleanString' => \IlluminateMacro\Support\Str\CleanString::class,
        'toStrId' => \IlluminateMacro\Support\Str\ToStrId::class,
        'getModelName' => \IlluminateMacro\Support\Str\GetModelName::class,
        'getLicenses' => \IlluminateMacro\Support\Str\GetLicenses::class,
      ],

      \Illuminate\Support\Collection::class => [
        'after' => \IlluminateMacro\Support\Collection\After::class,
        'at' => \IlluminateMacro\Support\Collection\At::class,
        'before' => \IlluminateMacro\Support\Collection\Before::class,
        'chunkBy' => \IlluminateMacro\Support\Collection\ChunkBy::class,
        'collectBy' => \IlluminateMacro\Support\Collection\CollectBy::class,
        'containsAll' => \IlluminateMacro\Support\Collection\ContainsAll::class,
        'containsAny' => \IlluminateMacro\Support\Collection\ContainsAny::class,
        'eachCons' => \IlluminateMacro\Support\Collection\EachCons::class,
        'eighth' => \IlluminateMacro\Support\Collection\Eighth::class,
        'extract' => \IlluminateMacro\Support\Collection\Extract::class,
        'fifth' => \IlluminateMacro\Support\Collection\Fifth::class,
        'filterMap' => \IlluminateMacro\Support\Collection\FilterMap::class,
        'firstOrFail' => \IlluminateMacro\Support\Collection\FirstOrFail::class,
        'firstOrPush' => \IlluminateMacro\Support\Collection\FirstOrPush::class,
        'fourth' => \IlluminateMacro\Support\Collection\Fourth::class,
        'fromPairs' => \IlluminateMacro\Support\Collection\FromPairs::class,
        'getNth' => \IlluminateMacro\Support\Collection\GetNth::class,
        'glob' => \IlluminateMacro\Support\Collection\Glob::class,
        'groupByModel' => \IlluminateMacro\Support\Collection\GroupByModel::class,
        'head' => \IlluminateMacro\Support\Collection\Head::class,
        'if' => \IlluminateMacro\Support\Collection\IfMacro::class,
        'ifAny' => \IlluminateMacro\Support\Collection\IfAny::class,
        'ifEmpty' => \IlluminateMacro\Support\Collection\IfEmpty::class,
        'insertAfter' => \IlluminateMacro\Support\Collection\InsertAfter::class,
        'insertAfterKey' => \IlluminateMacro\Support\Collection\InsertAfterKey::class,
        'insertAt' => \IlluminateMacro\Support\Collection\InsertAt::class,
        'insertBefore' => \IlluminateMacro\Support\Collection\InsertBefore::class,
        'insertBeforeKey' => \IlluminateMacro\Support\Collection\InsertBeforeKey::class,
        'ninth' => \IlluminateMacro\Support\Collection\Ninth::class,
        'none' => \IlluminateMacro\Support\Collection\None::class,
        'paginate' => \IlluminateMacro\Support\Collection\Paginate::class,
        'parallelMap' => \IlluminateMacro\Support\Collection\ParallelMap::class,
        'path' => \IlluminateMacro\Support\Collection\Path::class,
        'pluckMany' => \IlluminateMacro\Support\Collection\PluckMany::class,
        'pluckToArray' => \IlluminateMacro\Support\Collection\PluckToArray::class,
        'prioritize' => \IlluminateMacro\Support\Collection\Prioritize::class,
        'rangeByKey' => \IlluminateMacro\Support\Collection\RangeByKey::class,
        'recursive' => \IlluminateMacro\Support\Collection\Recursive::class,
        'rotate' => \IlluminateMacro\Support\Collection\Rotate::class,
        'second' => \IlluminateMacro\Support\Collection\Second::class,
        'sectionBy' => \IlluminateMacro\Support\Collection\SectionBy::class,
        'seventh' => \IlluminateMacro\Support\Collection\Seventh::class,
        'simplePaginate' => \IlluminateMacro\Support\Collection\SimplePaginate::class,
        'sixth' => \IlluminateMacro\Support\Collection\Sixth::class,
        'sliceBefore' => \IlluminateMacro\Support\Collection\SliceBefore::class,
        'tail' => \IlluminateMacro\Support\Collection\Tail::class,
        'tenth' => \IlluminateMacro\Support\Collection\Tenth::class,
        'third' => \IlluminateMacro\Support\Collection\Third::class,
        'toPairs' => \IlluminateMacro\Support\Collection\ToPairs::class,
        'transpose' => \IlluminateMacro\Support\Collection\Transpose::class,
        'try' => \IlluminateMacro\Support\Collection\TryCatch::class,
        'validate' => \IlluminateMacro\Support\Collection\Validate::class,
        'weightedRandom' => \IlluminateMacro\Support\Collection\WeightedRandom::class,
        'withSize' => \IlluminateMacro\Support\Collection\WithSize::class,
      ],
      \Illuminate\Support\LazyCollection::class => [
        'rangeByKey' => \IlluminateMacro\Support\LazyCollection\RangeByKey::class,
      ],
    ];
  }
}
