<?php
include("db_con.php");
$z=$_GET['z'];
$id=$_GET['prodact'];
$sql=mysqli_query($conn,"SELECT * FROM `proudact` WHERE `id`='$id'");
$row=mysqli_fetch_array($sql);

$imgs= $row['img'];
$z=0;
if ((strpos($imgs, '[') !== false) || (strpos($imgs, ']') !== false) ) {
    
    $new_name = str_replace("]","", $imgs);
    $new_name = str_replace("[","", $new_name);
    $new_name = str_replace('"',"", $new_name);
    $extensions = explode(",", $new_name);
    
    foreach ($extensions as $extension) {
        $images[$z]=$extension;
        $z++;
    }
}
$value="[";
unset($images[$_GET['z']]);

foreach($images as $img){
    if(!empty($img)){
    $value.=$img.",";
}
}
$value=rtrim($value,",");
$value.="]";
if($value==="[]"){
    
$update=mysqli_query($conn,"UPDATE `proudact` SET `img`=null WHERE `id`='$_GET[prodact]'");
if($update){
    header("Location: ../../update_image.php?id=".$_GET['prodact']);
}
}else{

$update=mysqli_query($conn,"UPDATE `proudact` SET `img`='$value' WHERE `id`='$_GET[prodact]'");
if($update){
    header("Location: ../../update_image.php?id=".$_GET['prodact']);
}
}
?>