<?php

class GoodsRepository
{
    private $mysql;

    public function __construct(MySQL $mysql)
    {
        $this->mysql = $mysql;
    }

    public function getAll()
    {
        $stmt=$this->mysql->getConnection()->query("SELECT * FROM goods");
        return $stmt->fetchAll();
    }

    public function saveGoods()
    {
        $stmt=$this->mysql->getConnection()->prepare("INSERT into goods");
    }
}
