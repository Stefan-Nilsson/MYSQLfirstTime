<?php


class profileController
{
    public static function makeConnection(){
        //this is to check the connection
        $connection = new connectionClass();
        if ($connection->getConnection()){
            echo "Database is connected";
        } else {
            echo "Connection problem";
        }
    }
    public function render(){

        $connector = new connectionClass;
        $connector->getConnection();
        $reader = new DataReader();
        $user = $reader->getSingleUserData();
        require "view/profilepage.php";
    }
}