<?php
include("db_con.php");
if(isset($_POST['edit']) && isset($_FILES['file'])){
    $id=$_POST["id"];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $repassword=md5($_POST['repassword']);
    $sql=mysqli_query($conn,"SELECT * FROM `user` WHERE `id`='$id'");
    $row=mysqli_fetch_array($sql);
    if($password!=="d41d8cd98f00b204e9800998ecf8427e"){
        if($password===$repassword){
        }else{
            header("../../profile.php?error=password not match");
        }
    }else{
        $password=$row['password'];
    }
    if(!empty($_FILES['file']['name'])){
        
    $file_name=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    if ($error === 0) {
        $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_ex_lc = strtolower($file_ex);
        
        $img_exs = array("png",'jpg','jpeg');
       
        if (in_array($file_ex_lc, $img_exs)) {
            $target_dir='../images/profile/';
            $new_image_name = uniqid("profile-", true). '.'.$file_ex_lc;
            $image_file = $target_dir.$new_image_name;
            $upload=$image_file;
            $move1= move_uploaded_file($tmp_name, $upload);
            $insert=mysqli_query($conn,"UPDATE `user` SET `name`='$name',`email`='$email',`password`='$password',`img`='$new_image_name' WHERE `id`='$id'");
            header("Location: ../../profile.php?req=update info");
        }else{
            header("Location: ../../profile.php?error=Please Upload Img Png Or jpg or jpeg");
        }
    }

    }else{
        $insert=mysqli_query($conn,"UPDATE `user` SET `name`='$name',`email`='$email',`password`='$password',`img`='$row[img]' WHERE `id`='$id'");
        header("Location: ../../profile.php?req=update info");

    }
}