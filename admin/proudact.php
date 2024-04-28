<?php
include("header.php");

?>
      <!--  Header End -->
      
      <div class="container-fluid">
        <div class="container-fluid">
          <a href="add_proudact.php" class="btn btn-primary">ADD Proudact</a>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <?php
                $sql=mysqli_query($conn,"SELECT * FROM `proudact` WHERE 1");
                if(mysqli_num_rows($sql)>0){
                  while($row=mysqli_fetch_array($sql)){
                      
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
                <div class="col-md-4">
                  <div class="card">
                    <img src="../upload/prodact/<?php echo$array[0];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo$row['name'];?></h5>
                      <p class="card-text"><?php echo$row['disc'];?></p>
                      <a href="pro.php?id=<?php echo$row['id'];?>" class="btn btn-primary">View</a>
                      <a href="update_pro.php?id=<?php echo$row['id'];?>" class="btn btn-warning">Update</a>
                      <a href="assets/php/class_delete.php?prodact=<?php echo$row['id'];?>" class="btn btn-danger">delete</a>
                    </div>
                  </div>
                </div>
                <?php
                }
                }
              ?>
              </div>
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