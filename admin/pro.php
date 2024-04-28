<?php
include("header.php");

?>
      <!--  Header End -->
      <style>
        .proudact{
            display: flex;
            justify-content: center;
        }
        .countiener_img{
            width: 50%;
        }
        .countiener_img img{
            margin-top: 14px;
            width: 100%;
        }
        .proudact .disc{
            width: 50%;
            padding: 10px;
        }
        </style>
      <div class="container-fluid">
        <div class="container-fluid">
            <div class="proudact" >
              <?php
              
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
                <div class="countiener_img">
                  <?php
                  foreach($array as $arrays){
                  ?>
                    <img src="../upload/prodact/<?php echo$arrays?>" alt="">
                <?php
                  }?>
                </div>
                <div class="disc">
                    <h2><?php echo$row['name'];?></h2>
               <p><?php echo$row['disc'];?></p> 
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/dashboard.js"></script>
</body>

</html>