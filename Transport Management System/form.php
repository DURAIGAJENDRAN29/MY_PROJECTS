<?php
$n = $_POST['stname'];
$c = $_POST['stnum'];
$d = $_POST['gender'];
$conn = mysqli_connect('localhost','root','','db1');
$sql = "INSERT INTO `STD` (`studend_name`, `studend_num`, `studend_gender`) VALUES  ('$n' , '$c' , '$d')";
$r = mysqli_query($conn, $sql);
if($r){
    echo "RUN SUCESSFULL";
}
else{
    echo "need improment";
}
header("Location: login.html");
mysqli_close($conn);
header("Location: signup.html");

?>