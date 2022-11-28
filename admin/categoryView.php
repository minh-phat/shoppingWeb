<?php
    include('header.php');
?>
        <div class="main-panel">
          <div class="content-wrapper" >
            <div class="row" style="justify-content: center;">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Thểm Thể Loại</h4>
                    <p class="card-description"> Thông Tin Thể Loại </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Tên Thể Loại</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <!--  Image upload and preview -->
                      <div class="form-group" style="height: auto;">
                        <!-- <label for="image">Thêm Hình Ảnh</label>
                        <div class="input-group col-xs-12"> -->
                          <!-- multiple command use to add many picture by hold ctrl key anh select picture  -->
                          <!-- <input type="file" name="image" id="file-input" class="default" onchange="loadFile(event)" multiple=""> 
                        </div>
                        <br>
                        <h4>Ảnh Đã Thêm </h4>
                        <img id="output" width="400px">
                        <br> -->


                        <!-- <script>
                          //JS to preview image when uploaded 
                          var loadFile = function (event) {
                            var output = document.getElementById('output');
                            output.src = URL.createObjectURL(event.target.files[0]);
                            output.onload = function () {
                                URL.revokeObjectURL(output.src) //Free memory
                            }
                          };
                        </script> -->
                        <!-- <script>
                            function previewImages() {
                                var preview = document.querySelector('#output');
                                preview.innerHTML = '';     //clear previous previews
                                //preview.style = "width:fit-content";    //change the preview <div> style to fit the new childs (images in this case)
                                if (this.files) {
                                    [].forEach.call(this.files, readAndPreview);
                                }
                                function readAndPreview(file) {
                                    // Make sure `file.name` matches our extensions criteria
                                    if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                                        return alert(file.name + " is not an image");
                                    }
                                    var reader = new FileReader();
                                    reader.addEventListener("load", function() {
                                        var image = new Image();
                                        image.height = 210;
                                        image.width = 210;
                                        image.title = file.name;
                                        //image.style = "border-radius: 10px; margin: 5px"    //image attributes
                                        image.src = this.result;
                                        preview.appendChild(image);
                                    });
                                    reader.readAsDataURL(file);
                                }
                            }
                            document.querySelector('#file-input').addEventListener("change", previewImages);
                        </script> -->
                        <label for="images" class="form-label">Images</label>
                            <input type="file" name="images[]" class="form-control <?php echo (!empty($ProductImage_err)) ? 'is-invalid' : ''; ?>" multiple="" style="width: 350px" id="file-input">
                            <span class="invalid-feedback"><?php echo $ProductImage_err; ?></span>

                            <br>
                            <label for="preview">Previews</label>
                            <div id="preview" style="width:300px;height:300px" class="form-control" ></div> <!--preview area-->
                            <br>
                            <!-- Script to preview multiple uploaded images -->

                            <script>
                                function previewImages() {
                                    var preview = document.querySelector('#preview');
                                    preview.innerHTML = '';     //clear previous previews
                                    preview.style = "width:auto; height:auto;";    //change the preview <div> style to fit the new childs (images in this case)
                                    if (this.files) {
                                        [].forEach.call(this.files, readAndPreview);
                                    }
                                    function readAndPreview(file) {
                                        // Make sure `file.name` matches our extensions criteria
                                        if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                                            return alert(file.name + " is not an image");
                                        }
                                        var reader = new FileReader();
                                        reader.addEventListener("load", function() {
                                            var image = new Image();
                                            image.height = 300;
                                            image.width = 300;
                                            image.title = file.name;
                                            image.style = "border-radius: 10px; margin: 5px"    //image attributes
                                            image.src = this.result;
                                            preview.appendChild(image);
                                        });
                                        reader.readAsDataURL(file);
                                    }
                                }
                                document.querySelector('#file-input').addEventListener("change", previewImages);
                            </script>
                      </div>       
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
    <!-- End custom js for this page-->
  </body>
</html>