<?php
$options = getopt('c:t:', ['count:', 'try:']);
$endValue = (int) $options['c'] ?? $options['count'] ?? 50;
$tryCount = (int) $options['t'] ?? $options['try'] ?? 5;
$guess = rand(1, $endValue);
while ($tryCount > 0) {
    echo 'Введите число: ';
    $value = (int) trim(fgets(STDIN));
    echo PHP_EOL;
    if ($value > $endValue || $value < 1) {
        echo "Число должно быть в диапазоне от 1 до $endValue" . PHP_EOL;
        continue;
    }
    if ($guess === $value) {
        echo 'Вы угадали!' . PHP_EOL;
        die;
    } elseif ($guess < $value) {
        echo "Я загадал число меньше $value" . PHP_EOL;
    } else {
        echo "Я загадал число больше $value" . PHP_EOL;
    }
    $tryCount--;
}
echo 'Вы превысили количество попыток' . PHP_EOL;
echo "Было загадано: $guess" . PHP_EOL;
