<?php
include("header.php");

?>
      <!--  Header End -->
      <style>
        .cardes{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .carding{
            width: 200px;
            height: 80px;
            background-color: #5d87ff;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            color: aliceblue;
        }
      </style>
      <div class="container-fluid">
        <div class="container-fluid">
            <div class="cardes">
                <div class="carding">
                    Proudact <br>
                   <?php
                   
														$sqli="SELECT  COUNT(*) as total FROM `proudact` WHERE 1";
														$ss=mysqli_query($conn,$sqli);
														$ff=mysqli_fetch_assoc($ss);
														echo$ff['total'];
                   ?>
                </div>
                <div class="carding">
                    Admin <br>
                   <?php
                   
														$sqli="SELECT  COUNT(*) as total FROM `user` WHERE 1";
														$ss=mysqli_query($conn,$sqli);
														$ff=mysqli_fetch_assoc($ss);
														echo$ff['total'];
                   ?>
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