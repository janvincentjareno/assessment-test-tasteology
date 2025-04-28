<?php
// index.php

require_once __DIR__ . '/controllers/HomeController.php';

// Dispatch to HomeController
$controller = new HomeController();
$controller->index();
