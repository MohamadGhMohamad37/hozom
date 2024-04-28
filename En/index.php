<?php
include("header.php");
?>
<style>
          #slider img{
            width: 100%;
          }
        </style>
        <!-- Slider -->
        <section id="slider">
          <div class="slidering">
            <?php
            $sql=mysqli_query($conn,"SELECT * FROM `layout` WHERE 1");
            if(mysqli_num_rows($sql)>0)
            while($row=mysqli_fetch_array($sql)){
            ?>
            <div class="slide">
              <img src="../upload/layout/<?php echo$row['img'];?>" alt="Image 1">
              <div class="text">
                
                <h2>Ho<span class="text_red">z</span>om Al-Ja<span class="text_red">z</span>eera</h2>
                <p><?php echo$row['disc_en'];?></p>
              </div>
            </div>
            <?php
            }
            ?>
          </div>
<div class="abs-profiles">
  <a href="https://wa.me/+966504156140" rel="nofollow noreferrer" target="_blank">
    <i class="fa-brands fa-square-whatsapp" style="color: #63E6BE; font-size: 50px;"></i>
</a>

</div>
        </section>
      </section>
      <section id="about_us">
          <div class="img slider">
              <img src="../img/h 1.jpg" alt="Slide 1">
              <img src="../img/h2 .jpg" alt="Slide 2">
              <img src="../img/h3.jpg" alt="Slide 3">
          </div>
          <div class="disc">
              <h1>About Us</h1>
              <p>Our company was established in 2007, and we inherited this heritage from our ancestors, and we are proud to follow the path and spread our creativity in this field.
                Hazoum Al Jazeera Tents and Awnings Establishment is proud to provide the finest services in the field of tents and awnings, including manufacturing and installation.
                <br>
                We are committed to standards that express our authenticity and our complete and comprehensive standards for all safety tests.
                <br>
                We present the most important designs in your hands or they are presented by you, to provide exceptional service to our customers by implementing the smallest details to the fullest extent and within record time.
                <br>
                It is our priority to make high-quality materials that guarantee users protection and safety. <br>
                What distinguishes us is the high quality of fabrics that provide double support. The continuity and confidence of customers over time are among the most important factors that make us proud of what we offer through ease of use and flexibility in the designs of tensile structures.</p>
          </div>
      </section>
<section id="feature" class="section-p1">
<div class="fe-box">
  <img src="../img/guarantee.svg" alt="">
  <h6>Guarantee</h6>
</div>

<div class="fe-box">
  <img src="../img/5 star.svg" alt="">
  <h6>High Quality</h6>
</div>

<div class="fe-box">
  <img src="../img/save money.svg" alt="">
  <h6>Save Money</h6>
</div>


<div class="fe-box">
  <img src="../img/happy sell.svg" alt="">
  <h6>Happy Sell</h6>
</div>

<div class="fe-box">
  <img src="../img/24 support.svg" alt="">
  <h6>F24/7 Support</h6>
</div>

</section>

<section id="product1" class="section-p1">
<h2>Products</h2>
<p>Different sizes and shapes with attractive designs and different colours</p>
<div class="pro-container">
  <?php
$sql_proudact=mysqli_query($conn,"SELECT * FROM `proudact` WHERE 1");
while($row=mysqli_fetch_array($sql_proudact)){
  
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
  <div class="pro" onclick="window.location.href='proudact.php?id=<?php echo$row['id'];?>'">
    <img src="../upload/prodact/<?php echo$array[0];?>" alt="">
    <div class="des">
      <span><?php echo$row['name'];?></span>
      <div class="star">
        <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
    </div>
  </div>
  
  <?php
}
  ?>
</div>
</section>

<section id="sm-banner" class="section-p1"> 
<div class="banner-box">
  <h4 class="tital1">Our Business</h4>

<div class="gallery" id="business">
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