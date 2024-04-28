<?php
include("header.php");

?>
      <!--  Header End -->
      <style>
        .cardes{
            display: flex;
            justify-content: space-around;
            flex-direction: column;
        }
        .carding{
            width: 100%;
            height: 100%;
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
                <?php
                $sql_massage=mysqli_query($conn,"SELECT * FROM `massage` WHERE 1");
                while($row=mysqli_fetch_array($sql_massage)){
                ?>
                <div class="carding">
                    <div><label for="">Name : </label><span><?php echo$row['name'];?></span></div>
                    <div><label for="">Email : </label><span><?php echo$row['email'];?></span></div>
                    <div><label for="">Subject : </label><span><?php echo$row['subject'];?></span></div>
                    <label for="">Message : </label><span><?php echo$row['message'];?></span>
                </div>
                <?php
                }?>
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