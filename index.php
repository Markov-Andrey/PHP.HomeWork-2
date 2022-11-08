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
  $trueFalse = fn($a) => isset($a) ? add("$a - Верно") : add("$a - Неверно");
  $trueFalse(1);
  $trueFalse(3);
  $trueFalse(-3);
  $trueFalse(null);
  $trueFalse(true);
  $trueFalse('');
  $trueFalse('0');
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
  function task7($a, $b){
    $task7Num = [];
    for($j = $a; $j <= $b; $j++) if ($j % 5 == 0) array_push($task7Num, $j);
    add("Сумма чисел кратных 5 от $a до $b:");
    add(array_sum($task7Num));
    add('&nbsp;');
  }
  task7(20,45);
  task7(0,50);
  task7(-20,20);
  task7(-50,0);
  task('end');

  task('start');
  condition("Дано пятизначное число. Цифры на четных позициях «занулить».
  Например, из 12345 получается число 10305.");
  function task8($a){
    $str = (string)$a;
    for ($i = 1; $i < strlen($a); $i +=2) $str[$i] = '0';
    add("Было: $a; стало: $str");
  }
  task8(12345);
  task8(999999999);
  task8(11111111111111111);
  task('end');

  task('start');
  condition("Дано число \$num=1000. Делите его на 2 столько раз, пока результат
  деления не станет меньше 50. Какое число получится? Посчитайте
  количество итераций, необходимых для этого (итерация - это проход цикла).
  Решите задачу сначала через цикл while, а потом через цикл for.");
  //for
  $num = 1000;
  static $i = 0;
  for ($i = 0; $num >= 50; $i++) $num /= 2;
  add("Цикл 'For': $num; итераций: $i");
  //while
  $num = 1000;
  $i = 0;
  while ($num >= 50): 
    $num /= 2; 
    $i++; 
  endwhile;
  add("Цикл 'While': $num; итераций: $i");
  //рекурсия
  $num = 1000;
  $i = 0;
  function recursion($num){
    static $i;
    if ($num >= 50) {
      $num /=2;
      $i++;
      recursion($num);
    } else {
      return add("Рекурсия: $num; итераций: $i");
    }
  }
  recursion(1000);
  task('end');

  task('start');
  condition("Вывести на экран фигуру из звездочек:<br>
  *******<br>
  *******<br>
  *******<br>
  *******<br>
  (квадрат из n строк, в каждой строке n звездочек).");
  function square($a){
    echo "<p>Квадрат $a:<br>";
    for ($j = 0; $j < $a; $j++) {
      for ($i = 0; $i < $a; $i++) echo "*";
      echo '<br>';
    }
    echo "</p>";
  }
  square(5);
  square(2);
  square(6);
  square(10);
  task('end');

  include('./src/footer.php');
?>