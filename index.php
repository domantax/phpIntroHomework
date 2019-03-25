<?php 
require __DIR__ .'/vendor/autoload.php';


print \calculateHomeWorkSum(3, 2.2, '1') . "\n";
print Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1') . "\n"; 
print Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1') . "\n"; 
print Nfq\Akademija\Strict\callStrictModeFunction(3, 2.2, '1') . "\n"; 

