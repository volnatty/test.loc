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


?>

