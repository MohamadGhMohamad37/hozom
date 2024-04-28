<?php
include("header.php");

?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Add Img For Slider</h5>
                <div class="card">
                  <div class="card-body">
                    <form method="post" action="assets/php/class_add_slider.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Upload Images</label>
                            <input class="form-control" name="file" type="file" id="formFileMultiple">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1">Explanation of Slider in English</label>
                            <textarea class="form-control" name="en" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1">Explanation of Slider in Arabic</label>
                          <textarea class="form-control" name="ar" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                      <button type="submit" name="layout_add" class="btn btn-primary">Add</button>
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