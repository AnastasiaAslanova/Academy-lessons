<?php
require_once 'arrayGoods.php';
?>
<!DOCTYPE>
<html lang="en">
<head>
    <title>Goods</title>
</head>
<body><?php
$goods = jsonToArray('goods.json');
?>
<div id = "app">
    <form method = "post" action="selectedGoods.php">
    <p><b>Выберете пожайлуста товар</b></p>
        <?php
        foreach ($goods as $idGood => $good){
            ?><input type = "checkbox" name = "order[]" value = "<?php echo $idGood ?>" id = "<?php echo "option$idGood" ?>">
                <label for="<?php echo "option$idGood" ?>" > <?php echo $good['name']; ?> </label><br/>
        <?php } ?>
        <br/>
    <input type = "submit" value = "Заказать">
    </form>
</div>
</body>
</html>
