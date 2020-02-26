<?php


class DataReader extends connectionClass
{
    public function readData()
    {
        if(!$this->getConnection())
        {
            die("Connection failed");
        }


        $getUsers = $this->getConnection()->prepare("SELECT * FROM student ORDER BY id ASC");
        $getUsers->execute();
        return $getUsers->fetchAll();

    }

    public function returnTable()
    {
        $users = $this->readData();
        foreach ($users as $user) {
            echo '<tr>' . '<td>' . $user['id'] . '</td>'. '<td>' . $user['first_name'] . '</td>'. '<td>' . $user['last_name'] . '</td>' . '<td>' . $user['username'] .'</td>' . '<td>' . $user['linkedin'] .'</td>' . '<td>' . $user['github'] .'</td>' . '<td>' . $user['email'] .'</td>' . '<td>' . $user['preferred_language'] .'</td>' . '<td>' . $user['avatar'] .'</td>' . '<td>' . $user['video'] .'</td>' . '<td>' . $user['quote'] .'</td>' . '<td>' . $user['quote_author'] .'</td>' . '<td>' . $user['created_at'] .'</td>' . '</tr>';
        }
    }
}