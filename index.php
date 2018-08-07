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


?>

