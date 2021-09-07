<?php

$name = 'Anastasia Aslanova';
$password = '12345';
?>


<!DOCTYPE>
<html>
<head>
    <title>lesson 6</title>
</head>
<body>
    <div id="app">
        <form action="name">
            <label for="name">Name</label>
            <input type="text" id="name" value="<?php echo $name ?>" >
            <br/>
            <br/>
            <label for="password">Password</label>
            <input type="text" id="password" value="<?php echo $password ?>" >


        </form>
    </div>
</body>
</html>
