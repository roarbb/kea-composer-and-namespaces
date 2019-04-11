<?php

use SwitchMedia\Kea\App;

require_once __DIR__ . '/vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$app = new App();
$app->run();