<?php

/*
|-----------------------------------------------------------------------------------------
| Register The Auto Loader
|-----------------------------------------------------------------------------------------
*/
require __DIR__ . '/../vendor/autoload.php';

/*
|-----------------------------------------------------------------------------------------
| Load .env properties to $_ENV
|-----------------------------------------------------------------------------------------
*/
$loader = new josegonzalez\Dotenv\Loader(__DIR__ . '/../.env');
$loader->parse();
$loader->toEnv();

/*
|-----------------------------------------------------------------------------------------
| Run The Application
|-----------------------------------------------------------------------------------------
| Initialize an application aspect container
*/
$applicationAspectKernel = AOP_Caching\Core\Aspect\ApplicationAspectKernel::getInstance();
$applicationAspectKernel->init([
    'debug'         => $_ENV["DEBUG"],
    'cacheDir'      => $_ENV["CACHE_DIR"],
    'includePaths'  => [__DIR__ . '/../app/']
]);

$teste = new AOP_Caching\App\CacheableDemo();
foreach(range(1,10) as $value) {
    $currTime = new DateTime();
    $currTime = $currTime->format("Y-m-d H:i:s");
    echo $teste->getReport($currTime) . "\n";
}



