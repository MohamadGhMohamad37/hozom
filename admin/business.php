<?php
include("header.php");
$sql=mysqli_query($conn,"SELECT * FROM `busnies` WHERE 1");
?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          
        <form method="post" action="assets/php/class_add.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Upload Images</label>
                            <input class="form-control" name="file[]" type="file" id="formFileMultiple" multiple>
                          </div>
                          <button type="submit" name="add_busnies" class="btn btn-primary">Add</button>

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
    if(mysqli_num_rows($sql)>0){
        while($row=mysqli_fetch_array($sql)){
           
    ?>
    <tr>
        <th scope="row"><?php echo$row['id'];?></th>
        <td><img src="../upload/business/<?php echo$row['img'];?>" width="400px" alt=""></td>
        <td>        
        <a href="assets/php/class_delete.php?business=<?php echo$row['id'];?>?>" class="btn btn-danger">delete</a>
        </td>
    </tr>
    <?php
     
    }
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