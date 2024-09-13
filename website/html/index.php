<?php 

require __DIR__ . '../../vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use App\Service\RandomNumber;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('/var/www/log/app.log', Monolog\Logger::INFO));
$log->info('Foo');

$randInt = new RandomNumber();

echo '........botinfg' . $randInt->generateInterval(100,110);