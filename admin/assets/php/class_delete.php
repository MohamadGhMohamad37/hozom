<?php
include("db_con.php");
if(isset($_GET['prodact'])){
    $sql=mysqli_query($conn,"DELETE FROM `proudact` WHERE `id`='$_GET[prodact]'");
    header("Location: ../../proudact.php?error=Delete This item");
}
if(isset($_GET['layout'])){
    $sql=mysqli_query($conn,"DELETE FROM `layout` WHERE `id`='$_GET[layout]'");
    header("Location: ../../layout.php?error=Delete This item");

}
if(isset($_GET['business'])){
    $sql=mysqli_query($conn,"DELETE FROM `busnies` WHERE `id`='$_GET[business]'");
    header("Location: ../../business.php?error=Delete This item");
}