<?php
$n = $_POST['fname'];
$c = $_POST['lname'];
$d = $_POST['email'];
$e = $_POST['age'];
$f = $_POST['sex'];
$g = $_POST['mnum'];
$h = $_POST['address'];
$conn = mysqli_connect('localhost','root','','signup');
$sql = "INSERT INTO `signup1` (`firstname`, `lastname`,`email`,`age`, `gender`,`mobilenumber`,`address` ) VALUES  ('$n' , '$c' , '$d' , '$e' , '$f' , '$g','$h' )";
$r = mysqli_query($conn, $sql);
if($r){

    header("Location: signup1.html");
    
}
else{
    echo "need improment";
}

?>