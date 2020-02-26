<?php


class DataReader extends connectionClass
{
    public function readData()
    {
        if(!$this->getConnection())
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $this->getConnection();
        $getUsers = $this->getConnection()->prepare("SELECT username FROM student ORDER BY id ASC");
        $getUsers->execute();
        $users = $getUsers->fetchAll();
        foreach ($users as $user) {
            echo $user['username'] . '<br />';
        }
    }
}