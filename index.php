<?php
  $htmlTitle = 'HomeWork PHP#2';
  include('./src/header.php');
  include('./src/function.php');

  //функция автодобавления Echo со вложенным тегом <p>
  //function add($text)
  
  //функция добавляющее заголовок "условие" со вложенным текстом
  //condition($text)
  
  //функция добавления начала и конца DIVа с авто-заголовком по запросу
  //task($arg), $arg = "start" или "end"

  task('start');
  condition("Если переменная \$a пустая, то выведите 'Верно', иначе выведите 'Неверно'.
  Проверьте работу скрипта при \$a, равном 1, 3, -3, 0, null, true, '', '0'.");
  //функция проверки аргумента на его наличие
  function trueFalse ($a) {
    if (isset($a)):
      add("$a - Верно");
    else:
      add("$a - Неверно");
    endif;
  }
  trueFalse(1);
  trueFalse(3);
  trueFalse(-3);
  trueFalse(null);
  trueFalse(true);
  trueFalse('');
  trueFalse('0');
  task('end');
  
  task('start');
  condition("Дано трехзначное число. Поменяйте среднюю цифру на ноль.");
  //функция для ввода 3-значных чисел
  function num2($numBefore) {
    $numAfter = (string)$numBefore;
    $numAfter[1] = 0;
    add("До: $numBefore, После: $numAfter");
  }
  num2(110);
  num2(191);
  num2(252);
  num2(333);
  num2(994);
  task('end');

  task('start');
  condition("Если переменная \$a равна или меньше 1, а переменная \$b больше или
  равна 3, то выведите сумму этих переменных, иначе выведите их разность
  (результат вычитания). Проверьте работу скрипта при \$a и \$b, равном 1 и 3, 0
  и 6, 3 и 5.");
  function num3 ($a, $b){
    if ($a <= 1 && $b >= 3): 
      add("Сумма $a + $b = ".$a + $b);
    else: 
      add("Разность $a + $b = ".$a - $b);
    endif;
  }
  num3(1,3);
  num3(0,6);
  num3(3,5);
  task('end');

  task('start');
  condition("Дана строка с символами, например, 'abcde'. Проверьте, что первым
  символом этой строки является буква 'a'. Если это так - выведите 'да', в
  противном случае выведите 'нет'.");
  $taskStr = fn($text) => $text[0] == 'a' ? add("$text - Да") : add("$text - Нет");
  $taskStr('abcde');
  $taskStr('application');
  $taskStr('абвгде');
  $taskStr('Apple');
  $taskStr('Антон');
  $taskStr('Геннадий');
  $taskStr('gdfdfgs');
  task('end');

  task('start');
  condition("Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр
  равняется сумме вторых трех цифр. Если это так - выведите 'да', в противном
  случае выведите 'нет'.");
  function taskNum5 ($num){
    $arr = str_split($num);
    $numStart = current($arr) + next($arr)+ next($arr);
    $numEnd = end($arr) + prev($arr)+ prev($arr);
    $numStart == $numEnd ? add("$num - Да") : add("$num - Нет");
  }
  taskNum5(123321);
  taskNum5(111222);
  taskNum5(909666);
  task('end');

  task('start');
  condition("Разработайте программу, которая определяла количество прошедших
  часов по введенным пользователем градусах. Введенное число может быть от
  0 до 360.");
  function degree($deg){
    for ($i = 0; $i <= 12; $i++){
      if($deg <= $i*30){
        $hour = $i;
        add($deg."° - это $hour-й час");
        break;
      }
    }
  }
  degree(0);
  degree(29);
  degree(60);
  degree(90);
  degree(120);
  degree(180);
  degree(220);
  degree(245);
  degree(300);
  degree(330);
  degree(360);
  task('end');

  task('start');
  condition("Разработайте программу, которая из чисел 20 .. 45 находила те, которые
  делятся на 5 и найдите сумму этих чисел.");
  $task7Num = [];
  for($j = 20; $j <= 45; $j++) if ($j % 5 == 0) array_push($task7Num, $j);
  var_dump($task7Num);
  add("Сумма чисел: ".array_sum($task7Num));
  task('end');

  include('./src/footer.php');
?>