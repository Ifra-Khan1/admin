<?php
require("shared/config.php");
include("shared/_navbar.php");

if(isset($_POST['submit']))
{
   $a = $_POST['prod_name'];
   $b = $_POST['prod_desc'];
   $c = $_POST['prod_price'];
   $imgname = $_FILES['prod_image']['name'];
   $imgname = $_FILES['prod_image']['tmp_name'];
   move_uploaded_file($imgpath,"assets/images/".$imgname);
   $d = $_POST['pro_select'];

   $insertt = "INSERT INTO `products`(`Prod_Name`, `Prod_Desc`, `Prod_Image`, `Prod_Price`, `Prod_Catg_ID`) 
   VALUES ('$a','$b','$imgname','$c','$d')";
   $run = mysqli_query($conn,$insertt);
}

?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <?php
             include("shared/_sidebar.php");
         ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product Form </h3>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="prod_name" placeholder="Product Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Product Description</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="prod_desc" placeholder="Product Description">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Product Image</label>
                        <input type="file" class="form-control" id="exampleInputPassword1" name="prod_image" placeholder="Product Image">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Product Price</label>
                        <input type="number" class="form-control" id="exampleInputConfirmPassword1" name="prod_price" placeholder="Product Price">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Product Category</label>
                        <select class="form-control" name="pro_select">
                          <?php
                          $queryy = "SELECT * FROM `category`";
                          $result = mysqli_query($conn,$queryy);
                          while($data=mysqli_fetch_assoc($result))
                          {
                          ?>
                           <option value="<?php echo $data['Catg_ID']?>"><?php echo $data['Catg_Name']?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary d-flex m-auto" name="submit">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
       
          <?php
          include("shared/_footer.php");
          ?>