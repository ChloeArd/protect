<?php
require dirname(__FILE__) . "/../src/Controller/Controller.php";
require dirname(__FILE__) . "/../src/Controller/HomeController.php";

$controller = new HomeController();
$controller->index();