<?php 

namespace {
  function calculateHomeWorkSum(...$numbers) {
    print __NAMESPACE__ . __FUNCTION__ . ': ';
    return array_sum($numbers);
  }
}

namespace Nfq\Akademija\Not_Typed {
  function calculateHomeWorkSum(...$numbers): int {
    print __NAMESPACE__ . __FUNCTION__ . ': ';
    return array_sum($numbers);
  }
}

namespace Nfq\Akademija\Soft {
  function calculateHomeWorkSum(int ...$numbers): int {
    print __NAMESPACE__ . __FUNCTION__ . ': ';
    return array_sum($numbers);
  }
}

