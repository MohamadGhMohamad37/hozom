<?php

include("db_con.php");
if(isset($_POST['update_proudact']) && isset($_FILES['img'])){
$nameer=$_POST['name'];
$disc=$_POST['disc'];
$name_ar=$_POST['name_ar'];
$disc_ar=$_POST['name_en'];
$id=$_POST['id'];
$target_dir="../../../upload/prodact/";
$upload_mult_img="[";
if(!empty($_FILES['img']['name'][0])){
foreach($_FILES['img']['name'] as $key=>$name){
    $tmp_name_mult=$_FILES['img']['tmp_name'][$key];
    $name_file_images=uniqid($nameer,true).'_'. basename($name);
    $target_file=$target_dir.$name_file_images;
    $move=move_uploaded_file($tmp_name_mult,$target_file);
    $upload_mult_img.=$name_file_images.",";
}
$upload_mult_img.="]";
$sql=mysqli_query($conn,"UPDATE `proudact` SET `name`='$name',`img`='$upload_mult_img',`disc`='$disc',`name_ar`='$name_ar',`disc_ar`='$disc_ar' WHERE `id`='$id'");
if($sql){
    header("Location: ../../proudact.php?req=Add Proudact Success");
}else{
    header("Location: ../../proudact.php?error=not Add Proudact");
}
}else{
    $sqle=mysqli_query($conn,"SELECT * FROM `proudact` WHERE `id`='$id'");
    $row=mysqli_fetch_array($sqle);
    $sql=mysqli_query($conn,"UPDATE `proudact` SET `name`='$name',`img`='$row[img]',`disc`='$disc',`name_ar`='$name_ar',`disc_ar`='$disc_ar' WHERE `id`='$id'");
    if($sql){
        header("Location: ../../proudact.php?req=Add Proudact Success");
    }else{
        header("Location: ../../proudact.php?error=not Add Proudact");
    }

}
}
if(isset($_POST['layout_update'])&&isset($_FILES['file'])){
    $id=$_POST['id'];
    
    $ar=$_POST['ar'];
    $en=$_POST['en'];
    if($_FILES['file']['name']!==""){
    $file_name=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    if ($error === 0) {
        $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_ex_lc = strtolower($file_ex);
        
        $img_exs = array("png",'jpg','jpeg');
       
        if (in_array($file_ex_lc, $img_exs)) {
            $target_dir='../../../upload/layout/';
            $new_image_name = uniqid("layout-", true). '.'.$file_ex_lc;
            $image_file = $target_dir.$new_image_name;
            $upload=$image_file;
            $move1= move_uploaded_file($tmp_name, $upload);
        }else{
            header("Location: ../../layout.php?error=error .");
        }
        $sql=mysqli_query($conn,"UPDATE `layout` SET `disc_ar`='$ar',`disc_en`='$en',`img`='$new_image_name' WHERE `id`='$id'");
        if($sql){

            header("Location: ../../layout.php?req=Success ADD .");
        }else{

            header("Location: ../../layout.php?error=error .");
        }
    }
}else{
    $sql_req=mysqli_query($conn,"SELECT * FROM `layout` WHERE `id`='$id'");
    $row=mysqli_fetch_array($sql_req);
    $sql=mysqli_query($conn,"UPDATE `layout` SET `disc_ar`='$ar',`disc_en`='$en',`img`='$row[img]' WHERE `id`='$id'");
    if($sql){

        header("Location: ../../layout.php?req=Success Update .");
    }else{

        header("Location: ../../layout.php?error=error .");
    }
}
}
?>