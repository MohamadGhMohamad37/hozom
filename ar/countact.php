<?php
include("../admin/assets/php/db_con.php");
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $massage=$_POST['message'];
    $sql=mysqli_query($conn,"INSERT INTO `massage`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$massage')");
    if($sql){
        header("Location: index.php?req=send massage");
    }else{ 
        header("Location: index.php?error=Not send massage");

    } 
}