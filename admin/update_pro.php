<?php
include("header.php");
$sql=mysqli_query($conn,"SELECT * FROM `proudact` WHERE `id`='$_GET[id]'");
$row=mysqli_fetch_array($sql);
?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
              <div class="card-body">
              <a href="update_image.php?id=<?php echo$_GET['id'];?>" class="btn btn-primary">Update Images</a>

                <h5 class="card-title fw-semibold mb-4">Forms</h5>
                <div class="card">
                  <div class="card-body">
                    <form method="post" action="assets/php/class_update.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Upload Images</label>
                            <input class="form-control" name="img[]" type="file" id="formFileMultiple" multiple>
                          </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Name Proudact in English</label>
                          <input type="text" name="name" value="<?php echo$row['name'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Name Proudact in Arabic</label>
                          <input type="text" name="name_ar" value="<?php echo$row['name_ar'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>o
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1">Explanation of products in English</label>
                          <textarea name="disc" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo$row['disc'];?></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1">Explanation of products in Arabic</label>
                          <textarea name="disc_ar" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo$row['disc_ar'];?></textarea>
                        </div>
                        <input type="text" value="<?php echo$_GET['id'];?>" name="id" hidden>
                      <button type="submit" name="update_proudact" class="btn btn-primary">Update</button>
                    </form>
                  </div>
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