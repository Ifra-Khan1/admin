<?php
require("shared/config.php");
include("shared/_navbar.php");

if(isset($_POST['submit']))
{
    $a = $_POST['cname'];

    $queryy = "INSERT INTO `category`(`Catg_Name`) VALUES ('$a')";
    $run = mysqli_query($conn, $queryy);
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
              <h3 class="page-title"> Category Form </h3>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Category form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="cname" placeholder="Category Name...">
                      </div>
                      <button name="submit" type="submit" class="btn btn-gradient-primary d-flex m-auto">Submit</button>
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