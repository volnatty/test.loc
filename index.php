<?php
echo 'hello world'.'<br>';
//print/_r(expression'   hm... to you too... Hello ');
//echo phpinfo();
echo '<br>';
$fruit1 = 'orange';
$fruit2 = 'grape';
$fruit_1_cost = 2;
$fruit_2_cost = 10;
$fruit_1_cost = $fruit_2_cost;
$fruit1 = 'pineapple';
echo 'Frist fruit name: '.$fruit1.'  and it costs:  '.$fruit_1_cost.'<br>';
echo 'Second fruit name: '.$fruit2.'  and it costs:  '.$fruit_2_cost.'<br>';
echo '<br>';
echo 'Current file name '.__FILE__.'<br>';
echo 'Current line  '.__LINE__.'<br>';
echo 'maybe i\'ll try to understand'.'<br>';
echo 'my files are here: C:\\*.*'.'<br>';
echo '<br>';
$name = "Natalie Volkova";
$age = 44;
echo "My name is $name.".'<br>';
echo 'I\'m '.$age.' years old'.'<br>';
unset($name);
$quantity=60;
echo '<br>';
$hour=$quantity*60;
$day=$hour*12;
$week=$day*7;
echo "there are $hour seconds in every hour".'<br>';
echo "there are $day seconds in every day".'<br>';
echo "there are $week seconds in every week".'<br>';
echo '<br>';
//$a=17;
//$b=10;
//$c=$a-$b;
//$d=7;
//$result=$c+$d;
$result=($a=17)-($b=10)+($d=7);
echo "we obtained $result".'<br>';
echo '<br>';
$now_hour=20;
$now_minute=50;
$now_second=11;
echo "and now is $now_hour:$now_minute:$now_second".'<br>';
echo '<br>';
$distance=85;
$time=2;
echo "you should to drive ".$velocity=$distance/$time." km/h".'<br>';
echo '<br>';
//didn't understend quitely - doing as i got it
echo 'integer"15"+srting"5"=';var_dump(15+'5');
echo '<br>';
//integer+string
echo "$day somethings".'<br>';
//or like that?)
echo "$day"." $fruit2".'<br>';
echo '<br>';
//string+integer
echo var_dump('77'+7).'=String "77"+integer "7"'.'<br>';
echo '<br>';
//string+string
echo "$fruit1 $fruit2".'<br>';
echo '<br>';
//float+integer
echo var_dump(55.5+6)." = float '55.5'+integer '6'".'<br>';
echo '<br>';
// I GOT IT!!!))) float+float
echo "float '33.33' + float '77.67' = ";var_dump(33.33+77.67);
echo'<br>';
echo'<br>';
//number 7 - currency exchange
$rate=23;
$uah=15698;
$usd=(int)($uah/$rate);
$cent=($uah%$rate);
echo "you can obtaine $usd US dollars and $cent cents just now and ".'<br>';
echo'<br>';
echo'<br>';
/*
homework. number 1 - done)))
2. perimeter and square calculation
 Вычислить периметр и площадь прямоугольника если вторая сторона в 4 раза больше первой (первую сторону придумать самому)
*/
$a=10;
$b=$a*4;
echo "if a= ".$a." and b= ".$b. " the perimeter is (a+b)*2, so it is ".$p=(($a+$b)*2)." mm, and square should be ".$s=$a*$b." mm*2".'<br>';
echo'<br>';
/* 3. true or false?
 Дано два числа. Вывести значение результата в логической переменной,
которое определяет,  отличаются ли первое от второго на 10.
(ответ true или false) */
$c=5;
$d=15;
var_dump(10==(abs($check=$c-$d)));
echo '<br>';
$c=255;
$d=15;
var_dump(10==(abs($check=$c-$d)));
echo '<br>';
echo '<br>';
/* 4. average and comparing - have i got the task?
 Даны три числа. Найдите их среднее арифметическое, умножить его на 4
и сравнить с каждым из чисел.
(ответ true или false + сами числа) */
$q=8;
$w=89;
$r=632.2;
$average=($q+$w+$r)/4;
echo "average of numbers $q, $w, $r is $average  ";
echo '<br>';
echo $q."  ".var_dump($average==$q).'<br>';
echo $w."  ".var_dump($average==$w).'<br>';
echo $r."  ".var_dump($average==$r).'<br>';
echo '<br>';
/* 5. Дано число. Увеличьте его на 30%, на 120% и
сравнить среднее арифметическое результатов с первоначальным числом
(ответ true или false + сами числа) */
$t=100;
$y=$t*1.3;
echo ", $t, $y ".var_dump($t==($t+$y)/2).'<br>';
$g=$t*2.2;
echo ", $t, $y, $g".var_dump($t==($t+$y+$g)/3).'<br>';
echo '<br>';
// 6. Найти сумму квадратов  36% от первого числа и 87% от второго числа
$a=200;
$a*=0.36;
$v=555;
$v*=0.87;
echo "sum of sguares is ".$smusq=($a*$a)+($v*$v).'<br>';
/* it wrote syntax error, unexpected '*'
in D:\php\OSPanel\domains\test.loc\index.php on line
while i did ($a**2) - probably, not supported((( */

?>

