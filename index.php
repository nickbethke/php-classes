<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "./autoload.php";

use \Oxygen\Oxygen;

$O = new Oxygen();

echo $O->format(Oxygen::GERMAN_DATE." ".Oxygen::GERMAN_TIME);

