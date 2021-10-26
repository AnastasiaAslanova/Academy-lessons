<?php
use Shop\DB\MySql;
use Shop\DB\GoodsRepository;
require_once __DIR__.'/../vendor/autoload.php';
$repository = new GoodsRepository(MySQL::getInstance());
$goods = $repository->getAll();

?>

<head>
    <title>Goods</title>
</head>
<body>
<div id = "app">
    <form method = "post" action="selectedGoods.php">
    <p><b>Выберете пожайлуста товар</b></p>
        <?php
        foreach ($goods as $idGood => $good){
            ?><input type = "checkbox" name = "order[]" value = "<?php echo $idGood + 1 ?>" id = "<?php echo "option$idGood" ?>">
                <label for="<?php echo "option$idGood" ?>" > <?php echo $good['good_name']; ?> </label><br/>
        <?php } ?>
        <br/>
    <input type = "submit" value = "Заказать">
    </form>
</div>
</body>
</html>
