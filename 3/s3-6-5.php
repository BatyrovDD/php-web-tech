<html>
    <head>
    <title>Столбец</title>
    <h2>Батыров Денис Дамирович</h2>
    <h2>5. Вывести в столбец список слов, которые входят в данное</h2>
    </head>
<body>
Исходная строка: <br /> 
<?php
print($_POST['a']."<br><br>"."Список слов: <br />");
$exA=preg_split("/[\s.,]+/", $_POST['a'], -1, PREG_SPLIT_NO_EMPTY);
for ($i = 0; $i <= array_pop( array_keys($exA)); $i++) {
        echo $exA[$i] . "<br>";
      }
?>
</body>
</html> 