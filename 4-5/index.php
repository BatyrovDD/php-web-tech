<? session_start(); include("check_log.php");?>
<html>
<meta charset="utf-8">
<head> <title> Сведения о недвижимости </title> </head>
<style>
   body {
    background-image: url(https://static.tildacdn.com/tild6665-3339-4533-b430-353964313532/_.jpg); /* Путь к фоновому изображению */
    }
   table{ 
    background-color:#c5caf0;
    }
  </style>

<body align="center">
<?
 $conn=mysqli_connect("localhost", "a0657844_prop", "prop") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($conn,'SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($conn,"a0657844_prop") or die ("Нет такой таблицы!");
?>

<h2>Дома:</h2>
<table align="center" border="1">
<tr> 
 <th> Адрес дома </th> <th> Тип строения </th> <th> Площадь дома</th> <th> Кол-во комнат в доме </th> <th> Стоимость дома </th>
 <th> Редактировать </th> 
<th> Удалить </th>
 </tr>
<?php
$result=mysqli_query($conn,"SELECT id, address, type, area, rooms, cost
FROM property"); // запрос на выборку сведений о пользователях
while($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo ("<td>" . iconv("cp1251", "utf-8", $row['address']) . "</td>");
 echo ("<td>" . iconv("cp1251", "utf-8", $row['type']) . "</td>");
 echo ("<td>" . iconv("cp1251", "utf-8", $row['area']) . "</td>");
 echo ("<td>" . iconv("cp1251", "utf-8", $row['rooms']) . "</td>");
 echo ("<td>" . iconv("cp1251", "utf-8", $row['cost']) . "</td>");
 echo "<td><a href='edit.php?id=" . $row['id']. "'>Редактировать</a></td>";
 echo "<td><a href='delete.php?id=" . $row['id']. "'>Удалить</a></td>";
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего домов: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить дом </a>

<h2>Жильцы:</h2>
<table align="center" border="1">
<tr> 
 <th> ФИО жильца </th> <th> Год рождения </th> <th> ID дома_Адрес дома </th>
 <th> Редактировать </th> 
 <th> Удалить </th>
 </tr>
<?php
$result=mysqli_query($conn,"SELECT * FROM housemates LEFT JOIN property ON (housemates.id_house=property.id)"); // запрос на выборку сведений о пользователях
while($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo ("<td>" . iconv("cp1251", "utf-8", $row['fullname']) . "</td>");
 echo ("<td>" . iconv("cp1251", "utf-8", $row['birthdate']) . "</td>");
 echo ("<td>" . iconv("cp1251", "utf-8", $row['id_house']) . '_' . iconv("cp1251", "utf-8", $row['address']). "</td>");
 echo "<td><a href='edit_mate.php?id=" . $row['id_mate']. "'>Редактировать</a></td>";
 echo "<td><a href='delete_mate.php?id=" . $row['id_mate']. "'>Удалить</a></td>";
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего жильцов: $num_rows </p>");
?>
<p> <a href="new_mate.php"> Добавить жильца </a>

<h2>Должники:</h2>
<table align="center" border="1">
<tr> 
 <th> ID жильца_ФИО жильца </th> <th> Сумма долга </th>
 <th> Редактировать </th>
 <th> Удалить </th>
 </tr>
<?php
$result=mysqli_query($conn,"SELECT * FROM debtors LEFT JOIN housemates ON (debtors.id_mate=housemates.id_mate)"); 
while($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo ("<td>" . iconv("cp1251", "utf-8", $row['id_mate']) . ' _ '. iconv("cp1251", "utf-8", $row['fullname']) . "</td>");
 echo ("<td>" . iconv("cp1251", "utf-8", $row['debt']) . "</td>");
 echo "<td><a href='edit_debt.php?id=" . $row['id_deb']. "'>Редактировать</a></td>";
 echo "<td><a href='delete_debt.php?id=" . $row['id_deb']. "'>Удалить</a></td>";
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего должников: $num_rows </p>");
?>
<p> <a href="new_debt.php"> Добавить должника </a>
<br>
<a href="inf_pdf.php"> Создать PDF </a>
<p> <a href="inf_xls.php"> Создать Excel </a>

<? if (isset($_POST['quit'])) {
    session_destroy();
    echo '<script type="text/javascript"> window.open("login.php","_self");</script>';
   }
?>

</body> </html>
