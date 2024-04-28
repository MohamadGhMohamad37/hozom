<?php
include("header.php");
?>
<style>
  #about_us{
    padding-top: 50px;
  }
</style>
        <section id="about_us" class="proudacted">
          <?php
          if(isset($_GET['id'])){
            $sql=mysqli_query($conn,"SELECT * FROM `proudact` WHERE `id`='$_GET[id]'");
            $row=mysqli_fetch_array($sql);
  $imgs= $row['img'];
  if ((strpos($imgs, '[') !== false) || (strpos($imgs, ']') !== false) ) {
      
      $new_name = str_replace("]","", $imgs);
      $new_name = str_replace("[","", $new_name);
      $new_name = str_replace('"',"", $new_name);
      $extensions = explode(",", $new_name);
  }
  $i=0;
  foreach ($extensions as $extension) {
    $array[$i]=$extension;
    $i++;
  }
          ?>
            <div class="img slider">
              <?php
              foreach($array as $arrays){
              ?>
                <img src="../upload/prodact/<?php echo$arrays?>" alt="Slide 1">
                <?php
              }
                ?>
            </div>
            <div class="disc">
                <h1><?php echo$row['name'];?></h1>
            </div>
        </section>
        <?php
          }?>
        
<section id="sm-banner" class="section-p1"> 
  <div class="banner-box">
    <h4 class="tital1">Our Business</h4>

<div class="gallery">
  
<?php
  $sql_bus=mysqli_query($conn,"SELECT * FROM `busnies` WHERE 1");
  while($row=mysqli_fetch_array($sql_bus)){
  ?>
  <img src="../upload/business/<?php echo$row['img'];?>" alt="">
    <?php
    }?>
  </div>
  </div>
  
  <div class="banner-box banner-box2">
    <h4>spring/summer/winter/fall</h4>
    <span>The best tents</span>
    <button class="btn white">Collection</button> 
  
  </div>
  
</section>
<?php
include("footer.php");
?>