<?php
ob_start(); //緩衝區header不會先跑，會先等其他動作做完
session_start();
$Name=$_POST["Name"];
$Phone=$_POST["Phone"];
$Address=$_POST["Address"];
$AVG_price=$_POST["AVG_price"];
$Class=$_POST["Class"];

include("pro_conn.php");
$SQL="INSERT INTO store (Name,Phone,Address,AVG_price,Class)VALUES ('$Name','$Phone','$Address','$AVG_price','$Class')";



if($result = mysqli_query($link,$SQL))
{
    header('Location:manage.php');
}
else
{
    echo "新增失敗";
    echo "3秒後 將自動導向至管理者頁面";
    echo "<script>
    setTimeout(function(){window.location.href='manage.php';},3000);
    </script>";
}
?>

