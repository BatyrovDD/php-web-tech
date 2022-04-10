<?php
echo "<h2>Вариант 15</h2>";
echo "Исходное слово: ".$_POST["t"]."<br>";
echo "Зашифрованное слово: ";
$string=$_POST["t"];
$arr = array ();
$strlen = mb_strlen ($string);
while ($strlen) {
$arr[] = mb_substr ($string, 0, 1);
$string = mb_substr ($string, 1, $strlen);
$strlen = mb_strlen ($string);
}
for ($i = 0; $i <= (count($arr)-1); $i++) {
if ($i%2<>0) {
echo $arr[$i];
}
}
for ($i = (count($arr)-1); $i >=0 ; $i--) {
if ($i%2==0) {
echo $arr[$i];
}
}

?>



