<?php
include_once 'arrayGoods.php';
$goods = jsonToArray('goods.json');

session_start();

if (!empty($_POST ['order'])){
    $_SESSION['order'] = $_POST['order'];
}
foreach ($goods as $idGood => $good){
    if(in_array($idGood, $_SESSION['order'])){
        echo $good['name'].' цена: '. $good['price'].' грн за единицу.'. '<br/>';
    }

}
