<?php
include("../assets/php/db_con.php");
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql=mysqli_query($conn,"SELECT * FROM `user` WHERE `email`='$email'");
    if(mysqli_num_rows($sql)>0){
        $row=mysqli_fetch_array($sql);
        if($password===$row['password']){
            session_start();
            $_SESSION['hozom_id']=$row['id'];
            header("location: ../index.php?req=Welcome Admin");
        }else{
        header("Location: index.php?error=The password does not match");

        }
    }else{
        header("Location: index.php?error=The Email Not Used");
    }
}