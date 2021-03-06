<?php

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
        $students = $reader->readData();

        if(!$_SERVER['REQUEST_METHOD']){
            echo 'submit something!';

        } else if (empty($_POST)){
            echo 'submit something!';

        }

        else {

            $insertion = new Inserter();
            $insertion->insert($_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['linkedin'],$_POST['github'],$_POST['email'],$_POST['preferred_language'],$_POST['avatar'],$_POST['video'],$_POST['quote'],$_POST['quote_author']);

        }
        require('view/homepage.php');
    }


}