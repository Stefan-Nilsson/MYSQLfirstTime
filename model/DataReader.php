<?php


class DataReader extends connectionClass
{
    public function readData()
    {


        $data = ("SELECT * FROM student.student ORDER BY id ASC");
        $getUsers = $this->getConnection()->prepare($data);
        $getUsers->execute([]);
        $users = $getUsers->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
    public function getSingleUserData(): array
    {
        $sql = "SELECT * FROM student WHERE id = :id";
        $statement = $this->getConnection()->prepare($sql);
        $userID = $_GET["user"];
        $statement->execute([$userID]);
        return $statement->fetch(PDO:: FETCH_ASSOC);
    }
}