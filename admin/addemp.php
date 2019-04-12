<?php
//include('functions.php');
$Employee_Id1=$_GET['Employee_Id'];
/*echo $Employee_Name1;*/

$con = mysqli_connect('localhost', 'root', '', 'ois_management');

                           if (!$con)
                             {
                             die('Could not connect: ' . mysqli_error());
                             }

                       /*echo "Connections are made successfully::";*/


//Image




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/date.css">
    <title>Hello, world!</title>
    <!-- date  -->
    <link rel="stylesheet" type="text/css" media="all" href="daterangepicker.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="moment.min.js"></script>
    <script type="text/javascript" src="daterangepicker.js"></script>
  </head>
  <body>
    <!-- Main navigation -->
    <header class="pb-2">
      <!-- Full Page Intro -->
      <div class="view" style="background-image: url('images/slider.png'); background-repeat: no-repeat; background-size: cover;">
        <div class="container pb-5">
          <div class="row">
            <!--Grid column-->
            <div class="col-md-9 white-text text-center text-md-left mt-xl-3 mb-5">
              <img src="images/oislogo.png" alt="Logo">
            </div>
            <div class="col-md-3 mt-xl-3 mb-5">
              <div class="btn-group">
                <!-- <a class="btn btn-success" href="#" role="button">Export</a> -->
              </div>
              <div class="btn-group">
                <a class="btn btn-primary" href="index.php" role="button">Home</a>
              </div>
              <div class="btn-group">
                <a class="btn btn-primary" href="../login.php" role="button">Logout</a>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="avatar-upload">
                  
                  <div class="avatar-edit">
                    <input class="inpimg" type='file' name="files" multiple="multiple" id="imageUpload" data-error="Please select an image"accept=".png, .jpg, .jpeg" />
                    <label class="labvew" for="imageUpload"><i class="fas fa-upload upimg"></i></label>
                  </div>
                  
                </div>
                <div class="avatar-preview">
                  <div id="imagePreview" class="prv" style="background-color: white;">
                    </div>
                </div>
                <!-- <img class="rounded-circle" src="images/user.jpg" alt="username"> -->
              </div>
            </div>
          </div>
          <!-- date -->
        </div>
      </div>
      <!-- Full Page Intro -->
    </header>
    <!-- Main navigation -->

    <!-- form -->
    <div class="container pt-4">
      <div class="row">
        <div class="col-lg-12">
          <form method="POST">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="Employee_Id" placeholder="Employee_Id" aria-label="Employee_Id" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="Employee_Name" placeholder="Employee_Name" aria-label="Employee_Name" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="Designation" placeholder="Designation" aria-label="Designation" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="Password" placeholder="password" aria-label="password" aria-describedby="basic-addon1">
          </div>
          <div class="btn-group">
            <!-- <a class="btn btn-primary upload" name="upload" role="button">Save</a> -->
            <input type="submit" class="btn btn-primary upload" name="upload" value="Save">
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script type="text/javascript" src="js/main.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $("#imageUpload").change(function() {
    readURL(this);
    });
    </script>
  </body>
</html>
<?php
if(isset($_POST['upload']))
{
  $Employee_Id=$_POST['Employee_Id'];
  $Employee_Name=$_POST['Employee_Name'];
  $Designation=$_POST['Designation'];
  echo $Employee_Id, $Employee_Name, $Designation;
  //path to store the uploaded image
  $target = "images/".basename($_FILES['files']['name']);

  //Get all the submitted data from the form
  $image = $_FILES['files']['name'];
  //$text = $_POST['text'];
  /*if(isset($_FILES["files"])==false)
    {
      echo "<b>Please, Select the files to upload!!!</b>";
      return;
    }
foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
    {
      $uploadThisFile = true;
      
      $file_name=$_FILES["files"]["name"][$key];
      $file_tmp=$_FILES["files"]["tmp_name"][$key];  
      $ext=pathinfo($file_name,PATHINFO_EXTENSION);

      if($uploadThisFile){
        $filename=basename($file_name,$ext);
        $newFileName=$filename.$ext;        
        move_uploaded_file($_FILES["files"]["tmp_name"][$key],"../Uploads/".$newFileName);

}
*/

  $sql = "INSERT INTO attendance (Employee_Id, Employee_Name, Designation) VALUES ('$Employee_Id', '$Employee_Name', '$Designation')";
  mysqli_query($db, $sql); //store the submitted data into the database table: images
//}
  //Now let's move the uploaded image into the folder: images
  /*if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
    $msg = "Image uploaded successfully";
  }else{
    $msg = "There was a problem uploading image";
  }*/
  // header('location: index.php?Employee_Id='.$Employee_Id1.'');
   echo "<script>setTimeout(\"location.href = 'index.php?Employee_Id='.$Employee_Id1.'';\",1000);</script>";
 }
 ?>