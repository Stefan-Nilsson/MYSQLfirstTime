<?php
require('view/homepage.php');
require('model/connectionClass.php');
require('model/DataReader.php');
require('model/insert.php');

class homePageController
{


    public function render()
    {
        $connector = new connectionClass;
        $connector->getConnection();
        $reader = new DataReader();
        $reader->readData();

    }

}