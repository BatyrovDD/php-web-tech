<HTML>
<TITLE>Батыров Денис Дамирович</TITLE>
<BODY>
 <h1>Батыров Денис Дамирович</h1><p>
5.Дана квадратная матрица порядка N. Для каждого столбца матрицы вычислить и
напечатать разность между квадратом суммы и суммой квадратов элементов этого
столбца<p>
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
print("<br><tr><th></th>");
for ($j = 1; $j <= $n; $j++) {print("<th>$j</th>");}
print("<th>Сумма квадратов</th><th>Квадрат суммы</th>");
print("</tr><tr>");
$u=0;
$sum=0;
$ksum=0;
for ($k = 1; $k <= $n; $k++) {
    print('<td>'.$k.'</td>');
        for ($r = 1; $r <= $n; $r++) {
            print('<td>'.$mass[$u].'</td>');
            $sum=$sum+$mass[$u]*$mass[$u];
            $ksum=$ksum+$mass[$u];
            $u++;
        }
        
        $sk[$k]=$sum;
        $ks[$k]=$ksum*$ksum;
        $sum=0;
        $ksum=0;
        print('<td>'.$sk[$k].'</td>');
        print('<td>'.$ks[$k].'</td>');
    print_r("</tr>");
}
?>
</TABLE>
</BODY>
</HTML>
</HTML>