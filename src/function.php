<?
//функция автодобавления Echo со вложенным тегом <p>
function add($text){
  echo ('<p>'.$text.'</p>');
};

//функция добавляющее заголовок "условие" и "решение" со вложенным текстом
function condition($text){
  echo ('<p class="condition">Условие</p>');
  echo ('<p>'.$text.'</p>');
  echo ('<p class="condition">Решение</p>');
};

//функция добавления начала и конца DIVа с авто-заголовком по запросу
function task($arg){
  if ($arg == 'start'):
    static $taskNum = 0;
    echo ('<div class="task"><h1>Задание '. ++$taskNum .'</h1>');
  elseif($arg == 'end'):
    echo ('</div>');
  endif;
};
?>