##### Datarose Production

## illuminate-macros

#### Information

[![Go to Github profile](https://img.shields.io/static/v1?label=datarose&message=production&color=2ea44f&logo=github)](https://github.com/rozsazoltan)
[![@datarose/illuminate-macros - v1.x](https://img.shields.io/static/v1?label=@datarose/illuminate-macros&message=v1.x&color=e31d65)](https://github.com/rozsazoltan/illuminate-macros/blob/dev-master/README.md)
[![GNU General Public License 3.0 license](https://img.shields.io/static/v1?label=License&message=GNU-GPL-3.0&color=2ea44f)](https://github.com/rozsazoltan/illuminate-macros/blob/dev-master/LICENSE.md)
[![Views](https://komarev.com/ghpvc/?username=rozsazoltan-illuminate-macros&label=Views)](https://github.com/rozsazoltan/illuminate-macros/blob/dev-master/LICENSE.md)

<br><br>

## Documentation

<details>
  <summary>Documentation links</summary>

  <br>

  - [Getting Started](#getting-started)
    - [Installation](#installation)
    - [Usage](#usage)
  - [Helper Functions](#helper-functions)
    - [Illuminate\Support\Arr](#arrclass)
    - [Illuminate\Support\Str](#strclass)
  - [Collection Functions](#collection-functions)
    - [Illuminate\Support\Collection](#collectionclass)
    - [Illuminate\Support\LazyCollection](#lazycollectionclass)
  - [Routing Functions](#routing-functions)
    - [Illuminate\Routing\Route (alias Get Route Details)](#routeclass)
  - [Appendix](#appendix)
    - [License](#license)
</details>

>**Note:** Documentation links will working after open to Documentation content.

<br>

<details>
  <summary>Documentation content</summary>

  <br>

  ### # Getting Started

  #### | Installation

  Require:
  - PHP 8.x or heigher
  - Laravel 9.x or heigher

  ```sh
    # Install
    composer install datarose/illuminate-macros
  ```

  #### | Usage

  There is nothing else to do. Just use it with default Laravel Framework.<br>
  ex.: In package can found `Collection::rangeByKey` method. How can use it?

  ```php
  use Illuminate\Support\Collection;

  $collection = Collection::rangeByKey(-2, 2, fn ($key) => $key + 2);

  /*
   $collection result:
   [
    -2 => 0,
    -1 => 1,
     0 => 2,
     1 => 3,
     2 => 4
   ]
  */
  ```

  <br><br>

  ### # Helper Functions

  #### | Arr::class

  - `In`
  - `Is`
  - `Merge`
  - `Similar`
  - `SortByKey`
  - `SortByKeyDesc`

  #### | Str::class

  - `Equals`
  - `HasEquals`
  - `Explode`
  - `ToStrId`
  - `UniqueString`
  - `CleanString`
  - `GetModelName`
  - `GetLicenses`

  <br><br>

  ### # Collection Functions

  #### | Collection::class

  - `RangeByKey`

  #### | LazyCollection::class

  - `RangeByKey`

  <br><br>

  ### # Routing Functions

  #### | Route::class

  - `GetGroupNames`

</details>

<br><br>

## Appendix

### # License
#### @datarose/illuminate-macros
Licensed under the [GNU General Public License 3.0](https://github.com/rozsazoltan/illuminate-macros/blob/dev-master/LICENSE.md) for compatible open source projects and non-commercial use.<br>
© 2022 Rózsa Zoltán