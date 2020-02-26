<?php
require('view/homepage.php');
require('model/connectionClass.php');
require('model/DataReader.php');
require('model/Inserter.php');

class homePageController
{


    public function render()
    {
        $connector = new connectionClass;
        $connector->getConnection();
        $reader = new DataReader();
        //$user = $reader->readData();
        $reader->returnTable();
        if(!$_SERVER['REQUEST_METHOD']){
            echo 'hello';
        }
        else {
            $inserti = new Inserter();
            $inserti->insert($_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['linkedin'],$_POST['github'],$_POST['email'],$_POST['preferred_language'],$_POST['avatar'],$_POST['video'],$_POST['quote'],$_POST['quote_author']);


        }
    }

}