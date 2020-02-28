<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
session_start();
require('controller/homePageController.php');
require('controller/profileController.php');
require('controller/loginController.php');
require('controller/registerController.php');
$homePageController = new homePageController();
$connector = new connectionClass();
$profile = new profileController();
$register = new registerController();
$login = new loginController();
$connector->getConnection();


function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    // echo '<h2>$_SESSION</h2>';
    //var_dump($_SESSION);
}

whatIsHappening();




//if(!isset($_SESSION['login'])) {
if (isset($_GET['user'])){
    $profile->render();

}
else if (isset($_GET['register'])) {
    $register->render();
}
else if (isset($_GET['login'])){
    $login->render();
}
else
    {
        $homePageController->render();
}


