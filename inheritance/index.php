<?php
declare(strict_types=1);

use inheritance\Developer;
use inheritance\Manager;

include_once (__DIR__ . "/Manager.php");
include_once (__DIR__ . "/Developer.php");

$manager = new Manager("Paolo Pagano",22000,"CNIT");
echo $manager->getDetails();

$developer = new Developer("Marwaan",12000,"Python, Sql");
echo $developer->getDetails();