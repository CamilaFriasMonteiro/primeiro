<?php 

require __DIR__ . '../../vendor/autoload.php';

use App\Service\RandomNumber;
use App\Service\RandomInverse;
use App\Service\RandomMix;


$text = 'Vasco Monteiro';
$crypt = new RandomNumber($text, 1);
echo $crypt->generate().PHP_EOL;
// echo $crypt->generateInterval(100,110);

$crypt2 = new RandomInverse($text);
echo $crypt2->generate().PHP_EOL;

$crypt33 = new RandomNumber($text, 51);
$crypt3 = new RandomMix($crypt2, $crypt2, $crypt2, $crypt2, $crypt, $crypt33);
echo $crypt3->generate().PHP_EOL;