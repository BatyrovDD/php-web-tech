
<p> 5.PHP-скрипт, в котором вычисляется значение заданного выражения (4*c + d-1)/(c- (a/2)), для случайных аргументов из интервала [-20, 20]:

    <?php
$a = rand(-20,20);
$d = rand(-20,20);
$c = rand(-20,20);
echo '<br> a ='. $a;
echo '<br> d ='. $d;
echo '<br> c ='. $c;
echo '<br>';
print ('(4*c + d-1)/(c- (a/2))' . '=' . (4*$c + $d-1)/($c- ($a/2)) . '<br><br>');
?>
<p> 10.PHP-скрипт, в котором вычисляется значение заданного выражения ((2*c/d)+2)/(d- a*a-1)), для случайных аргументов из интервала [-20, 20]:

 <?php
$a = rand(-20,20);
$d = rand(-20,20);
$c = rand(-20,20);
echo '<br> a ='. $a;
echo '<br> d ='. $d;
echo '<br> c ='. $c;
echo '<br>';
print ('((2*c/d)+2)/(d- a*a-1))' . '=' . (((2*$c/$d)+2)/(d- $a*$a-1)) . '<br>');
?>