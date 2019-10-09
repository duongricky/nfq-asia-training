<?php
require 'vendor/autoload.php';
use App\Controllers\GetUserController;

$test = new GetUserController();
$test->showInfo();