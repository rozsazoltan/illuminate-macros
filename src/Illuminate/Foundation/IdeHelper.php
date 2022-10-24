<?php

namespace Datarose;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class IdeHelper extends Command
{
  protected $signature = 'ide-helper';
  protected $description = 'Generates the IDE helpers';

  public function __invoke()
  {
    Collection::make(Macros::all())
      ->map(function ($macros, $class) {
        $namespace = $this->getClassNamespace($class);
        $class = $this->getClassName($class);

        $macros = Collection::make($macros)
          ->sort()
          ->map(function (string $macro) {
            $matches = [];
            preg_match(
                '/\* @return (?P<return>.*?) /',
                preg_replace('/(\r\n|\r|\n)/', ' ', file_get_contents(__DIR__."/../".str_replace("\\", "/", str_replace("IlluminateMacro\\", "", $macro)).".php")),
                $matches
            );

            if (! isset($matches['return'])) {
              echo "@return is not exists in $macro".PHP_EOL;
              $matches = [
                'return' => 'mixed',
              ];
            }

            return "   * @method ".($matches['return'] ?? 'mixed')." $macro";
          });

        $header = $this->getFileHeader($class, $namespace);
        $content = $macros->implode(PHP_EOL);
        $footer = $this->getFileFooter($class);

        file_put_contents(__DIR__."/../Facades/$class.php", $header.$content.$footer);
      });
  }

  private function getClassParts($class): array {
    return explode('\\', $class);
  }

  private function getClassName($class): string {
    $parts = $this->getClassParts($class);
    return end($parts);
  }

  private function getClassNamespace($class): string {
    $parts = $this->getClassParts($class);
    array_pop($parts);
    return implode('\\', $parts);
  }

  protected function getFileHeader($class, $namespace): string
  {
    return <<<EOT
    <?php
    namespace $namespace {
      /**
       * Macros for $class
       * 

    EOT;
  }

  protected function getFileFooter($class): string
  {
    return <<<EOT

       *
       */
      class $class {}
    }
    EOT;
  }
}