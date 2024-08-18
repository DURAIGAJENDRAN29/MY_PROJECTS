<?php

$i = $_POST['vechile'];
$s = $_POST['exp'];
$k = $_POST['file'];
$o = $_POST['Username'];
$p = $_POST['password'];
$conn = mysqli_connect('localhost','root','','signup');
$sql = "INSERT INTO `signup1` ( `vechile` ,`exp` ,`file`,`username` ,`password`) VALUES  ( '$i', '$s','$k','$o','$p')";
$result = mysqli_query($conn, $sql);
if($result){

    header("Location: login.html");
  

}
else{
    echo "need improment";
}

?>