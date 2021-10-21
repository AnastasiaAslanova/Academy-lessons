<?php

class CartRepository
{
    private $mysql;

    public function __construct(MySQL $mysql)
    {
        $this->mysql = $mysql;
    }

    public function saveGoods(int $userId, array $idGoods)
    {
        $sql = [];
        $params = [];
        foreach ($idGoods as $id) {
            $sql[] = '(?,'.$userId.',1)';
            $params[] = $id;
        }
        $stmt = $this->mysql->getConnection()->prepare(
            "INSERT INTO shopping_cart (product_id, user_id, quantity) VALUES " . implode(',', $sql));
        $stmt->execute($params);
       return $stmt;
    }
}
