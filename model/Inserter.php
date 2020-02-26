<?php


class Inserter extends connectionClass
{
    public function insert($firstName, $lastName, $userName, $linkedIn, $gitHub, $email, $preferred_language, $avatar, $video, $quote, $quote_author)
    {
        $sql = "INSERT INTO student (first_name,last_name,username,linkedin,github,email,preferred_language,avatar,video,quote,quote_author) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $this->getConnection()->prepare($sql)->execute([$firstName, $lastName, $userName, $linkedIn, $gitHub, $email, $preferred_language, $avatar, $video, $quote, $quote_author]);
    }
}