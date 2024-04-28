<?php
include("header.php");
$sql=mysqli_query($conn,"SELECT * FROM `user` WHERE `id`='$id'");
$row=mysqli_fetch_array($sql);
?>
      <style>
        .profile{
            width: 200px;
            border-radius: 50%;
        }
      </style>
      <div class="container-fluid">
        <div class="container-fluid">
            <div class="cardes">
                <div><label> Email </label>: <span id="email"><?php echo$row['email'];?></span></div> 
                <div><label> Name </label<span id="name"><?php echo$row['name'];?></span></div> 
                <?php
                if($row['img']!=="" AND $row_user['img']!==null){
                ?>
                <div><img src="assets/images/profile/<?php echo$row['img'];?>" alt="" class="profile"></div>
                <?php
                }else{
               ?>   
                <div><img src="assets/images/profile/user-1.jpg" alt="" class="profile"></div>
                <?php
              }
                ?>
            </div>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title fw-semibold mb-4">For Edit info Enter Password</h5>
                  <div class="card">
                    <div class="card-body">
                      <form method="get">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Password</label>
                          <input type="password" name="passowrding" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1"  class="form-label">RePassword</label>
                            <input type="password" name="repassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        <button type="submit" name="Check" class="btn btn-primary">Check</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <?php
              if(isset($_GET['Check'])){
                $password=md5($_GET['passowrding']);
                $repassword=md5($_GET['repassword']);
                if($password===$repassword){
                  if($password===$row['password']){

              ?>
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title fw-semibold mb-4">For Edit info Enter Password</h5>
                  <div class="card">
                    <div class="card-body">
                      <form method="post" enctype="multipart/form-data" action="assets/php/class_info.php">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Upload Images</label>
                            <input class="form-control" name="file" type="file" id="formFileMultiple" multiple>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" value="<?php echo$row['email'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Name</label>
                              <input type="text" name="name" value="<?php echo$row['name'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">New Password</label>
                              <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">New RePassword</label>
                                <input type="password" name="repassowrd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <input type="text" value="<?php echo$id;?>" name="id" hidden>
                        <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              
            }else{
              //error the password not match
            }
          }else{
            //error the password not match
          }
        }
        ?>
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