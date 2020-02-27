<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
require('controller/homePageController.php');
require('controller/profileController.php');
$homePageController = new homePageController();
$connector = new connectionClass();
$homePageController->render();

$test = $connector->getConnection();
if (isset($_GET)){
    echo'hey';
}
else {
    echo 'no';
}
