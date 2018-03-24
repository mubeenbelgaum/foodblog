<?php
session_start();
if(isset($_POST['submit'])){
  $con=mysqli_connect("localhost","root","aissel123","Blogdb");
  $user=$_POST['uname'];
  $password=$_POST['pwd'];
  $res=mysqli_query($con,'select * from admin where aname="'.$user.'" and apwd="'.$password.'"');
    if($res == TRUE){
      header("Location:admin_page.php");
    }
    else{
      echo "your user name or password is wrong";
      exit;
    }
}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Food Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Post</a>

    </div>

    <ul class="nav navbar-nav navbar-right">

    </ul>
  </div>
</nav>
</div>

</head>
<body>
  <form action="delete.php" method="GET">

<?php
include_once('connection.php');
$id=$_GET['id'];


 $sql="select * from post where pid=$id";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
    {


      $pid=$row["pid"];

    $imageName  = $row["image"];
    echo '<div class="col-md-12" style="margin-left:0px">';

    echo '<center> <div class="panel panel-warning">
              <div class="panel-heading">';
              echo "<h3>".$row["title"]."</h3>
              </div>";
    //echo '<img src="images/'.$imageName.'" />';
    echo "<br><img src='images/$imageName' height='300px' width='auto' />";
    echo ' <div class="panel-body"> ';
    echo "Posted By: &nbsp;<b>".$row["author"]."</b><br>";
    echo "".$row["pdesc"]."<br>";
    echo "".$row["ldesc"]."</div></div></div></center>";

} }else {
    echo "0 results";
}
// header("Location:admin_page.php");

?>
</form>
</body>
</html>
