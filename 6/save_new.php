<? session_start(); include("check_log.php");
 // Подключение к базе данных:
 $conn=mysqli_connect("localhost", "a0657844_prop", "prop") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером

 mysqli_query($conn,'SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
mysqli_select_db($conn,"a0657844_prop") or die ("Нет такой таблицы!");
 // Строка запроса на добавление записи в таблицу:
 
 $sql_add = "INSERT INTO property SET address='" . iconv("utf-8", "cp1251", $_GET['address'])
."', type='".iconv("utf-8", "cp1251", $_GET['type'])."', area='".$_GET['area']."', rooms='".$_GET['rooms'].
"', cost='".$_GET['cost']."'";
 mysqli_query($conn,$sql_add); // Выполнение запроса
 if (mysqli_affected_rows($conn)>0) // если нет ошибок при выполнении запроса
 { print "<p> Информация внесена в базу данных.";
 print "<p><a href=\"index.php\"> Вернуться к списку недвижимости </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку недвижимости </a>"; }
?>
