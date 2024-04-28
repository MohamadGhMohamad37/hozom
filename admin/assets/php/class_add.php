<?php
include("db_con.php");
if(isset($_POST['add_proudact']) && isset($_FILES['img'])){
$nameer=$_POST['name'];
$disc=$_POST['disc'];
$name_ar=$_POST['name_ar'];
$disc_ar=$_POST['name_en'];

$target_dir="../../../upload/prodact/";
$upload_mult_img="[";
foreach($_FILES['img']['name'] as $key=>$name){
    $tmp_name_mult=$_FILES['img']['tmp_name'][$key];
    $name_file_images=uniqid($nameer,true).'_'. basename($name);
    $target_file=$target_dir.$name_file_images;
    $move=move_uploaded_file($tmp_name_mult,$target_file);
    $upload_mult_img.=$name_file_images.",";
}
$upload_mult_img=rtrim($upload_mult_img,',');
$upload_mult_img.="]";
$sql=mysqli_query($conn,"INSERT INTO `proudact`(`name`, `img`, `disc`, `name_ar`, `disc_ar`) VALUES ('$nameer','$upload_mult_img','$disc','$name_ar','$disc_ar')");
if($sql){
    header("Location: ../../proudact.php?req=Add Proudact Success");
}else{
    header("Location: ../../proudact.php?error=not Add Proudact");
}
}
if(isset($_POST['layout_add'])&&isset($_FILES['file']) ){
    $ar=$_POST['ar'];
    $en=$_POST['en'];
    
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
            $sql=mysqli_query($conn,"INSERT INTO `layout`(`disc_ar`, `disc_en`, `img`) VALUES ('$ar','$en','$new_image_name')");
            header("Location: ../../add_layout.php?req=Upload Success");
        }else{
            header("Location: ../../add_layout.php?error=Please Upload image");
        }
    }

}
if(isset($_POST['add_proudact_img'])&&isset($_FILES['file'])){
    $id=$_POST['id'];
    
    $file_name=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    if ($error === 0) {
        $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_ex_lc = strtolower($file_ex);
        
        $img_exs = array("png",'jpg','jpeg');
       
        if (in_array($file_ex_lc, $img_exs)) {
            $target_dir='../../../upload/prodact/';
            $new_image_name = uniqid("prodact-", true). '.'.$file_ex_lc;
            $image_file = $target_dir.$new_image_name;
            $upload=$image_file;
            $move1= move_uploaded_file($tmp_name, $upload);
        }else{
            header("Location: ../../update_image.php?id=".$id);
        }
        $sql=mysqli_query($conn,"SELECT * FROM `proudact` WHERE `id`='$id'");
        $row=mysqli_fetch_array($sql);
        if($row['img']!==null){
$imgs= $row['img'];
if ((strpos($imgs, '[') !== false) || (strpos($imgs, ']') !== false) ) {
    
    $new_name = str_replace("]","", $imgs);
    $new_name = str_replace("[","", $new_name);
    $new_name = str_replace('"',"", $new_name);
    $extensions = explode(",", $new_name);
    $new_value="[";
    foreach ($extensions as $extension) {
        $new_value.=$extension.",";
      }
      $new_value.=$new_image_name."]";
}
}else{
    $new_value="[".$new_image_name."]";
}
$update=mysqli_query($conn,"UPDATE `proudact` SET `img`='$new_value' WHERE `id`='$id'");
if($update){
    header("Location: ../../update_image.php?id=".$id);
}else{
    
    header("Location: ../../update_image.php?id=".$id);
}
    }
}
if(isset($_POST['add_busnies'])&&isset($_FILES['file'])){
    
$target_dir="../../../upload/business/";
foreach($_FILES['file']['name'] as $key=>$name){
    $tmp_name_mult=$_FILES['file']['tmp_name'][$key];
    $name_file_images=uniqid($nameer,true).'_'. basename($name);
    $target_file=$target_dir.$name_file_images;
    $move=move_uploaded_file($tmp_name_mult,$target_file);
    $insert=mysqli_query($conn,"INSERT INTO `busnies`(`img`) VALUES ('$name_file_images')");

}
header("Location: ../../business.php?req=Add iteams");
}