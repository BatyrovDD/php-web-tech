<HTML>
<TITLE>Батыров Д.Д.</TITLE>
<BODY>
 <h1>Батыров Д.Д.</h1><p>
Задача 2.4.<p>
5. Найти среднее арифметическое S элементов таблицы A(N). Выяснить, сколько
элементов таблицы равно S, больше S, меньше S.<p>
<table border="1">
<?php
$n=rand(4, 12);
$sum=0;
$rs=0;
$bs=0;
$ms=0;
$num = range(-99, 99); //Создаём набор чисел
$s=rand(-99, 99);
shuffle($num); //Смешиваем набор чисел
$mass = array_slice($num, 0, $n*$n); //Создаём массив от 0 до 99 со смешанными чиселами
for ($i = 0; $i < $n*$n; $i++) {
    $sum=$sum+$mass[$i];
    if ($mass[$i]==$s){
        $rs++;
    }elseif ($mass[$i]>$s){
        $bs++;
    }elseif ($mass[$i]<$s){
        $ms++;
    }
}
print('S ='); 
print_r($s); //Выводим исходный массив
print('<br>Кол-во элементов равных S: '); 
print_r($rs); //Выводим исходный массив
print('<br>Кол-во элементов больше S: '); 
print_r($bs); //Выводим исходный массив
print('<br>Кол-во элементов меньше S: '); 
print_r($ms); //Выводим исходный массив
print('<br>Cреднее арифметическое = '); 
print_r($sum/($n*$n)); //Выводим исходный массив
print("<br><tr><th></th>");
for ($j = 1; $j <= $n; $j++) {print("<th>$j</th>");}
print("</tr><tr>");
$u=0;
for ($k = 1; $k <= $n; $k++) {
    print('<td>'.$k.'</td>');
        for ($r = 1; $r <= $n; $r++) {
            print('<td>'.$mass[$u].'</td>');
            $u++;
        }
    print_r("</tr>");
}
?>
</TABLE>
</BODY>
</HTML>
</HTML>