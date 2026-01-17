<?php
// Your code here!

// Глава 5: Функции (Основы)

// 1 - Напиши функцию, которая принимает имя и возвращает "Привет, [имя]".

/*
function sayHello($name) {
    return $name;
}

echo sayHello("Erasyl") . "\n";
*/

// 2 - Создай функцию square($n), которая возвращает квадрат числа.

/*
function square($n) {
    //$c = $n * $n;
    return $n * $n;
}

echo square(4) . "\n";
*/

// 3 - Напиши функцию, которая принимает два числа и возвращает их среднее арифметическое.
/*
function inputTwo($a, $b) {
    $c = ($a + $b) / 2;
    return $c;
}

echo inputTwo(3,1) . "\n";
*/

// 4 - Создай функцию, которая переводит строку в верхний регистр (strtoupper).
/*
function bigMyStr($word) {
    return strtoupper($word);
}

echo bigMyStr("astanahab") . "\n";
*/

// 5 - Напиши функцию isPositive($n), которая возвращает true, если число положительное.
/*
function positive($n) {
    if($n > 0) {
        return true;
    } else {
        return false;
    }
}

echo positive(28);
*/

// Отдельное задание
/*
function greet($name, $timeOfDay = "Привет") {
    return "Добрый " . $timeOfDay . ", " . $name . "!";
}

echo greet ("Erasyl","вечер") . "\n";
echo greet ("Erasyl");
*/

// Массивы + Функции
/*
function sumArray($numbers) {
    $total = 0;
    foreach($numbers as $item) {
        $total += $item;
    }
    return $total;
}

echo sumArray([10, 20, 30]);
*/

// Глава 6: Работа со строками (trim, str_replace, explode)

// Задание 1 - Удали лишние пробелы по краям строки " PHP это круто "

$str1 = "  PHP это круто  ";
echo(trim($str1)) . "\n";

// Задание 2 - Замени во фразе "Я люблю JS" буквы "JS" на "PHP".

$str2 = "Я люблю JS";
$newStr = str_replace("JS","PHP",$str2);
echo($newStr) . "\n";

// Задание 3 - Разрежь строку "яблоко,банан,груша" в массив по запятой.

$fruits = "яблоко,банан,груша";
$newFruites = explode(",",$fruits);
print_r($newFruites) . "\n";
//echo($newFruites);

// Задание 4 - Удали все дефисы из номера телефона "8-777-123-45-67".

$number = "8-777-123-45-67";
echo(str_replace("-"," ",$number)) . "\n";

// Задание 5 - Посчитай количество слов в предложении, сначала разрезав его по пробелу в массив.

$word = "Программирование это очень интересное занятие";
$newWord = explode(" ",$word);
print_r(count($newWord)) . "\n";

// Функция-очиститель имен Представь, что пользователи вводят свои имена как попало: 
//с пробелами, маленькими буквами или лишними символами. Нам нужна функция, которая приводит имя в порядок.

$name = "";

function cleanName($name) {
    
    $name = trim($name);
    $name = strtoupper($name);
    return $name;
    
}

echo cleanName(" abai");


// Глава 7: Фильтрация данных (is_numeric, empty)

// Задание 1 - Проверь переменную: если она пустая — выведи "Пусто", если нет — её значение.

$variableF = "Бобро пожаловать";
if (!empty($variableF)) {
    echo($variableF) . "\n";
} else {
    echo "Пусто" . "\n";
}

// Задание 2 - Дан массив [10, "текст", 20]. Выведи только те элементы, которые являются числами.

$numberAr = array(10, "текст", 20);

foreach ($numberAr as $item) {
    if(is_numeric($item)) {
        echo($item . " ") . "\n";
    } 
}

// Задание 3 - Напиши функцию, которая принимает массив и возвращает новый массив только с числами.

$varArray = [10, "ошибка", 20, "неизвестно", 30];

function onlyNumbers($varArray) {
    $result = [];
    
    foreach ($varArray as $item) {
        if(is_numeric($item)) {
            $result[] = $item;
        }
    }
    
    return $result;
}

print_r(onlyNumbers($varArray)) . "\n";

// Задание 4 - Проверь переменную через isset. Если её нет — создай её со значением 0.

$score = 0;

if(isset($score)) {
    echo "Переменная есть" . "\n";
} else {
    echo "Переменной нет" . "\n";
}

/*
$score = 10; // Попробуй удалить или закомментировать эту строку

if (!isset($score)) {
    echo "Переменной НЕ СУЩЕСТВУЕТ, создаю её... \n";
    $score = 0;
} else {
    echo "Переменная уже СУЩЕСТВУЕТ, её значение: " . $score . "\n";
}
*/

// Задание 5 - Проверь, является ли строка числом после удаления из неё знака $.

// Доп задание - 1

$price = "$500";

$newPrice = str_replace("$","",$price);

if(is_numeric($newPrice)) {
    echo "Цена принята " . $newPrice . "\n";
}

// Доп задание - 2
//Проверь переменную $userScore через isset. Если её нет — создай её со значением 0. Если она есть — прибавь к ней 10.

$userScore = 0;

if(isset($userScore)) {
    $userScore += 10;
    echo($userScore);
} else {
    echo "Переменной нет, не создана ";
    $userScore = 0;
    echo($userScore) . " Теперь создана";
}

// Глава 8: Продвинутые функции и логика

// Задание 1 - Создай функцию, которая принимает массив цен и возвращает их сумму с учетом налога 10%.

$price = array (100,200,500,750);

function priceToArray($price) {

    $total = 0;
    
    foreach ($price as $item) {
        $total += $item;
    }
    
    $finalPrice;
    
    $finalPrice = $total * 1.1;
    
    return $finalPrice;
    
}

echo priceToArray($price) . "\n";

// Задание 2 - Напиши функцию, которая принимает массив строк и возвращает самую длинную строку.

$words = array("super-programming","banan","apple","car","superDuper-programming","pepsi","USA","computer");

function longWords($words) {
    
    $longest = "";
    
    foreach ($words as $itemWord) {
        echo " Массив " . $itemWord . " Длина " . strlen($itemWord) . "\n";
    
        if(strlen($itemWord) > strlen($longest)) {
            $longest = $itemWord;
            echo "Самый длинный массив " . $itemWord . " и размер длины равен: " . strlen($itemWord) . "\n";
        }
        
    }
    
    return "Самая длинная строка " . $longest . "\n";
    
}

echo longWords($words);

// Задание 3 - Создай функцию-валидатор: она должна возвращать true, если в строке есть и точка, и запятая.

$varWords = "колбаса, сыр.";

function Validatin($varWords) {
    
    /*
    foreach ($varWords as $wordsFor) {
        if (str_contains($wordsFor,",") && str_contains($wordsFor,".")) {
            return true;
        } else {
            return false;
        }
    }
    */
    
    if (str_contains($varWords,",") && str_contains($varWords,".")) {
        return true;
    } else {
        return false;
    }
    
    return $varWords;
    
}

echo Validatin($varWords) . "\n";

// Задание 4 - Напиши функцию, которая «чистит» массив от пустых элементов (используй empty).

$justWords = [10, "", 0, "Apple", false, "Orange"];

function cleanArray($justWords) {
    
    $result = [];
    
    foreach ($justWords as $justItem) {
        
        if(!empty($justItem)) {
            $result[] = $justItem;
        }
        
    }
    
    return $result;
    
}

print_r(cleanArray($justWords)) . "\n";

// Задание 5 - Сделай функцию formatMoney($value), которая заменяет запятую на точку, удаляет пробелы и добавляет в конце " тг.".

$oldPrice = "1 200,50";

function formatMoney($oldPrice) {
    
    $newPrice = str_replace(",",".",$oldPrice);
    
    $newPrice = str_replace(" ","",$newPrice);
    
    $totalPrice = $newPrice . " тг. ";
    
    return $totalPrice;
    
}

echo formatMoney($oldPrice);

// Глава 9: HTML Формы (Практика вытаскивания данных)

// Задание 1: Создай форму с одним полем name. После отправки выведи "Привет, " и то, что ввел пользователь.

// Задание 2: Создай форму с двумя полями (число А и число Б). После нажатия кнопки выведи их сумму.

// Задание 3: Создай форму с полем textarea. Пользователь вводит список покупок через запятую. Выведи этот список на экран в виде нумерованного списка <li>.

// Глава 10: Супер-финал (Твой проект)

// Задание 1 - Создай калькулятор скидок: поле для цены и поле для процента скидки. Выведи итоговую цену.

// Задание 2 - Создай "Очиститель текста": форма принимает текст с кучей лишних пробелов и запрещенных слов (например, "плохо"), а PHP выводит очищенную версию.

// Задание 3 - Создай форму "Дневник расходов": поле для названия товара и поле для цены. PHP должен вывести: "Вы купили [название] за [цена] тг." (с проверкой на число).

// Задание 4 - Создай конвертер валют: вводим сумму в тенге, PHP выводит сумму в долларах (курс задай в переменной).

// Задание 5 - Мега-задание: Сделай форму, куда можно ввести список цен через запятую (с буквами, пробелами и т.д.). 
//Используй свою функцию calculateTotal, чтобы вывести финальную сумму.


?>
