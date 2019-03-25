<?php 

declare(strict_types=1);

namespace Nfq\Akademija\Strict {
  function calculateHomeWorkSum(int ...$numbers): int {
    print __NAMESPACE__ . __FUNCTION__ . ': ';
    return array_sum($numbers);
  } 
  //this function calls calculateHomeWorkSum, because otherwise strict_types directive is not applied (when function is included in another file)
  function callStrictModeFunction (... $numbers) {
    calculateHomeWorkSum(...$numbers);
  }
}

