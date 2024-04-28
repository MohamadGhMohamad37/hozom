<?php
include("header.php");
?>
<style>
          #slider img{
            width: 100%;
            
          }
          #slider .text{
            width: 40%;
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
                
                <h2 style="direction: rtl; text-align: right;">ح<span class="text_red">ز</span>وم الج<span class="text_red">ز</span>يرة</h2>
                <p style="direction: rtl; text-align: right;"><?php echo$row['disc_ar'];?></p>
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
          <div class="disc">
              <h1 style="direction: rtl; text-align: right;">حولنا</h1>
              <p style="direction: rtl; text-align: right;">
تأسست شركتنا منذ  2007   وورثنا هذا التراث من أجدادنا وفخورون بمتابعة الطريق ونشر إبداعنا في هذا المجال .
تفتخر مؤسسة حزوم الجزيرة للخيم والمظلات بتقديم أرقى خدماتها في مجال الخيم والمظلات من تصنيع وتركيب .
<br>
ملتزمون بالمعايير التي تعبر عن أصالتنا ومعاييرنا الكاملة والشاملة لكافة اختبارات السلامة.
<br>
أهم التصاميم نقدمها بين يديكم أو يتم طرحها من قبلكم ، لتقديم خدمة استثنائية لعملائنا بتتفيذ أدق التفاصيل وعلى أكمل وجه وضمن وقت قياسي .
<br>
من أولوياتنا صنع المواد عالية الجودة تضمن للمستخدمين الحماية و الأمان .
<br>
ما يميزنا الجودة العالية للأقمشة التي توفر الدعم المضاعف ، استمرارية وثقة العملاء مع الزمن من أهم العوامل التي جعلتنا نفخر بما نقدمه من خلال سهولة الاستخدام والمزونة في تصاميم هياكل الشد.</p>
          </div>
          <div class="img slider">
              <img src="../img/h 1.jpg" alt="Slide 1">
              <img src="../img/h2 .jpg" alt="Slide 2">
              <img src="../img/h3.jpg" alt="Slide 3">
          </div>
      </section>
<section id="feature" class="section-p1">
<div class="fe-box">
  <img src="../img/guarantee.svg" alt="">
  <h6>الضمان</h6>
</div>

<div class="fe-box">
  <img src="../img/5 star.svg" alt="">
  <h6>جودة عالية</h6>
</div>

<div class="fe-box">
  <img src="../img/save money.svg" alt="">
  <h6>توفير المال</h6>
</div>


<div class="fe-box">
  <img src="../img/happy sell.svg" alt="">
  <h6>عملاء سعيدون</h6>
</div>

<div class="fe-box">
  <img src="../img/24 support.svg" alt="">
  <h6>F24/7 دعم</h6>
</div>

</section>

<section id="product1" class="section-p1">
<h2>منتجاتنا</h2>
<p>مقاسات وأشكال مختلفة بتصميمات جذابة وألوان مختلفة</p>
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
      <span><?php echo$row['name_ar'];?></span>
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
  <h4 class="tital1">اعمالنا</h4>

<div class="gallery" id="business">
  <?php
  $sql_bus=mysqli_query($conn,"SELECT * FROM `busnies` WHERE 1");
  while($row=mysqli_fetch_array($sql_bus)){
  ?>
  <img src="../upload/business/<?php echo$row['img'];?>" alt="">
  <?php
  }
  ?>
</div>
</div>

<div class="banner-box banner-box2">
  <h4 style="direction: rtl; text-align: right;">ربيع/الخريف/الشتاء/الصيف</h4>
  <span style="direction: rtl; text-align: right;">أفضل العلامات التجارية</span>
  <button class="btn white">تواصل معنا</button> 

</div>

</section>
<?php
include("footer.php");
?>