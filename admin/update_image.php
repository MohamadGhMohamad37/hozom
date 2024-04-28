<?php
include("header.php");
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
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          
        <form method="post" action="assets/php/class_add.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Upload Images</label>
                            <input class="form-control" name="file" type="file" id="formFileMultiple" multiple>
                          </div>
                          <input type="text" name="id" value="<?php echo$_GET['id'];?>" hidden>
                          <button type="submit" name="add_proudact_img" class="btn btn-primary">Add</button>

        </form>
        <table class="table table-striped">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">img</th>
      <th scope="col">action</th>
    </tr>

  </thead>
  <tbody>
    <?php
$i=1;
$z=0;
foreach ($array as $arrayes) {
    ?>
    <tr>
        <th scope="row"><?php echo$i;?></th>
        <td><img src="../upload/prodact/<?php echo$arrayes?>" width="400px" alt=""></td>
        <td>        
        <a href="assets/php/class_delete_image.php?prodact=<?php echo$row['id'];?>&z=<?php echo$z;?>" class="btn btn-danger">delete</a>
        </td>
    </tr>
    
    <?php
    $z++;
    $i++;
}
    ?>
  </tbody>
</table>
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