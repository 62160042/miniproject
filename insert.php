<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <div class="container p-3 my-3 bg-dark text-white">
    <center><h1><p class="text-primary">Add complete</p></center></h1>
</div>
    <center><h2><form method="post" action="main.html">
        <input type="submit" value="Back to main" class="btn btn-dark">
    </form><h2></center><h2> 
    <style>
        body{
            background-image: url("https://wallpaperaccess.com/full/260170.png");
            background-size: cover;
        }
        </style>

<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "pj3";
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
    $mysqli->set_charset("utf8");

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
       
    }
    if(isset($_POST['upload']))
{
    $gdname = $_POST['gdname'];
    $detail = $_POST['detail'];
    $price = $_POST['price'];
    $imagess = $_FILES['imagess']['name'];
    $target = "image/".basename($imagess);


    $sql = mysqli_query($mysqli,"INSERT INTO steam VALUES ('$gdname', '$detail' , '$price' , '$imagess')");
    if (move_uploaded_file($_FILES['imagess']['tmp_name'], $target)) {
    }
}