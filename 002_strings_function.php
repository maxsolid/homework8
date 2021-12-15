<?php
// Функции по работе со строками

// 1. Уберите слеши "/" в начале и в конце строки, если они есть
$url = '/some/path/to/page/';
$urlTrim = trim($url, '/');
var_dump($urlTrim);



// 2. Уберите из строки все запятые и точки, а пробелы замените на тире
$line = 'Good news, everyone.';
$lineTrim = str_replace(',', '', $line);
$lineTrim2 = str_replace('.', '', $lineTrim);
echo $lineTrim2;
$lineReplace = str_replace(' ','-',$lineTrim2);
echo $lineReplace;


// 3. Посчитайте и выведите длину строки переменной $line
 $length = strlen($line);
 var_dump($length);


// 4. Найдите на какой позиции находится запятая в строке $line и выведите это значение
// $position = strpos(',', $line);   не понял
// var_dump($position);


// 5. Вырежьте из строки $line подстроку после запятой до предпоследнего символа с конца
 $resultLine = substr($line , -9, -1);
 var_dump($resultLine);

