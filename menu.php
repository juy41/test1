<?php
echo "Меню:\n";
echo "1. Ввести два числа\n";
echo "2. Сложение\n";
echo "3. Вычитание\n";
echo "4. Деление\n";
echo "5. Возведение в степень\n";
echo "Выберите пункт: ";
$choice = trim(fgets(STDIN));
?>

<?php
echo "Введите два числа через пробел: ";
$input = trim(fgets(STDIN));
list($a, $b) = explode(' ', $input);
echo "Числа введены: $a и $b\n";
?>

<?php
echo "Сложение: " . ($a + $b) . "\n";
?>

<?php
echo "Вычитание: " . ($a - $b) . "\n";
?>

<?php
if ($b != 0) {
    echo "Деление: " . ($a / $b) . "\n";
} else {
    echo "Ошибка: деление на ноль невозможно.\n";
}
?>