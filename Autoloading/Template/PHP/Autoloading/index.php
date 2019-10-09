<?php

require_once 'vendor/autoload.php';

use App\Controllers\PostController;

$controller = new PostController();
$controller->store();