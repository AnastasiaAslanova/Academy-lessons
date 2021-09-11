<?php
$array = ["english", "русский", "українська"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home work array</title>
    <style>
        .row {
            margin: 10px 0;
        }
    </style>
</head>
<body>
<div id="app">
    <form action="#" method="get">
        <div class="row">
            <select>
                <?php
                foreach ($array as $keyname => $list) {
                    echo '<option value="' . $keyname . '">' . $list . '</option>';
                }
                ?>

            </select>
        </div>

    </form>
</div>
</body>
</html>
