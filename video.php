<?php
include ('../conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
   
<?php
include ("aside.php");

?>

  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Video Song</h1>
<div class="row">

                        <!-- Grow In Utility -->
                        <div class="col-lg-8">

                            <div class="card position-relative">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Add Video</h6>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                    <h5>s_name</h5>
                                        <!-- <input type="email" name="txtemail" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..."> -->
                                    </div>
                                    <div class="form-group">
                                            <input type="text" name="txtname" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Song Name">
                                        </div>

                                        <div class="form-group">
                                            <input type="file" name="txtfile" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Add Artist">
                                        </div>

                                    <div class="mb-3">
                                    <h5>s_artist</h5>
                                    </div>
                                    <div class="form-group">
                                            <input type="text" name="txtartist" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Add Artist">
                                        </div>

                                    <div class="mb-3">
                                        <h5>s_singer</h5>
                                    </div>
                                    <div class="form-group">
                                            <input type="text" name="txtsinger" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Add Singer">
                                        </div>
                                        <div class="mb-3">
                                        <h5>movie_name</h5>
                                    </div>
                                        <div class="form-group">
                                            <input type="text" name="txtmovie" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Add Movie">
                                        </div>
                                        <input type="submit" name="btnadd" value="Add" class="btn btn-primary" >
                                         
                                       
                                         
                            </div>
                            </form>

                        </div>

                        
                    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include ("footer.php");
?>

</div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php
if(isset($_POST['btnadd'])){
    $name=$_POST['txtname'];
    $vidname=$_FILES['txtfile']['name'];
    $imgloc=$_FILES['txtfile']['tmp_name'];
     move_uploaded_file($imgloc,'video/'.$vidname);
    $artist=$_POST['txtartist'];
    $singer=$_POST['txtsinger'];
    $movie=$_POST['txtmovie'];
    $check=mysqli_query($conn,"
    INSERT INTO `video`(`id`, `s_name`, `s_video`, `s_artist`, `s_singer`, `movie_name`) VALUES ('','$name','$vidname','$artist','$singer','$movie')");
    if($check>0){
        
        echo "<script>alert('record is inserted')</script>";
    }
    else{
        echo "<script>alert('record is not inserted')</script>";
    }
}
?>
