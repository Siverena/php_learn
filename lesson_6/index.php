<?php
require_once 'model/User.php';
require_once 'model/Task.php';
session_start();

$controller = $_GET['controller'] ?? 'index';
$routes = require 'routes.php';

require_once $routes[$controller];