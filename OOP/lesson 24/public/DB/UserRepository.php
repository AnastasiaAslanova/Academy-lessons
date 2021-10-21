<?php

class UserRepository
{
    private $mysql;

    public function __construct(MySQL $mysql)
    {
        $this->mysql = $mysql;
    }

    public function getUserByEmail(string $email)
    {
        $stmt=$this->mysql->getConnection()->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindValue('email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();

    }


}
