<?php
include("db_con.php");

if(isset($_POST['layout_add'])&&isset($_FILES['file'])){
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
        }else{
            header("Location: ../../add_layout.php?error=error .");
        }
        $sql=mysqli_query($conn,"INSERT INTO `layout`(`disc_ar`, `disc_en`, `img`) VALUES ('$ar','$en','$new_image_name')");
        if($sql){

            header("Location: ../../add_layout.php?req=Success ADD .");
        }else{

            header("Location: ../../add_layout.php?error=error .");
        }
}
}