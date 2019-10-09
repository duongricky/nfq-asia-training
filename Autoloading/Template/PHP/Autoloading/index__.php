<?php

require_once 'autoload.php';

use App\Controllers\PostController;

$controller = new PostController();
$controller->store();