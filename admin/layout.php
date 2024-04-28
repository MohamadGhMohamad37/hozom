<?php
include("header.php");

?>
      <!--  Header End -->
      <style>
        table {
            width: 100%;
        }
        table tr td img{
            width: 50%;
        }
      </style>
      <div class="container-fluid">
        <div class="container-fluid">
            <a href="add_layout.php" class="btn btn-primary">ADD Layout</a>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Layout</h5>
                <div class="card">
                  <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Img</th>
                            <th scope="col">Disc</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql=mysqli_query($conn,"SELECT * FROM `layout` WHERE 1");
                          while($row=mysqli_fetch_array($sql)){
                          ?>
                          <tr>
                            <th scope="row"><?php echo$row['id'];?></th>
                            <td><img src="../upload/layout/<?php echo$row['img'];?>" alt=""></td>
                            <td style="width: 20%;"><?php echo$row['disc_en'];?></td>
                            <td>
                                <a href="assets/php/class_delete.php?layout=<?php  echo$row['id'];?>"><button type="button" class="btn btn-danger btn-sm m-1">Delete</button></a>
                                <a href="update_layout.php?id=<?php echo$row['id'];?>"><button type="button" class="btn btn-warning btn-sm">Update</button></a>
                            </td>
                          </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
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