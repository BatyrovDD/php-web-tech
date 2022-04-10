<?
session_start();
?>
<html>
<title> Авторизация </title>
<style>
   body {
    background-image: url(https://static.tildacdn.com/tild6665-3339-4533-b430-353964313532/_.jpg); /* Путь к фоновому изображению */
    }
  </style>
  <h2>Вариант 5 - Недвижимость</h2>
<body style="text-align: center" aling="center">
    
<div aling="center">
<form method="post" action="<?php print $PHP_SELF ?>">
<?
//include("check_log.php");
echo "Введите логин:<br><input type='text' name='login' required>";
echo "<br>Введите пароль:<br><input type='password' name='password' required>";
?>
<br><br><input type='submit' name='sign' value='Вход'>
</form>
   <h2>Администратор: <br>логин - den-admin; <br>пароль - den-admin
<br><br> Оператор: <br>логин - ghost; <br>пароль - ghost
</h2>
<?
if (isset($_POST["sign"])) {
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 $conn=mysqli_connect("localhost", "a0657844_prop", "prop") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($conn,'SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($conn,"a0657844_prop") or die ("Нет такой таблицы!");
$result=mysqli_query($conn,"SELECT id, type FROM users WHERE username = '".$_POST['login']."' and password = md5('".$_POST['password']."')");
if (mysqli_affected_rows($conn)>0) {
 $row=mysqli_fetch_array($result);
 $_SESSION['userid'] = $row['id'];
 $_SESSION['type'] = $row['type'];
 echo '<script type="text/javascript">window.open("index.php","_self");</script>';
 exit;
} else { echo "<br>Неверный логин/пароль"; }
}
?>
 </div>
 </body>
 </html>