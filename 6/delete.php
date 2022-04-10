<? session_start(); 
include("check_log.php");
include("check_admin.php");



 $conn=mysqli_connect("localhost", "a0657844_prop", "prop") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_select_db($conn,"a0657844_prop") or die ("Нет такой таблицы!");
 $zapros="DELETE FROM property WHERE id=" . $_GET['id'];
 mysqli_query($conn,$zapros);
 header("Location: index.php");
 exit;
?>
