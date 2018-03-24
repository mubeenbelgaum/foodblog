<!-- <?php
session_start();
$servername = "localhost";
$username = "root";
$password = "aissel123";
$dbname = "Blogdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$a=$_SESSION['ID'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$res="select * from login where userid=$a";
$result = $conn->query($res);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $indi=$row['type'];
      $abc=$row['pwd'];
    }
}
	$name=$row['id'];
    $id =$row['id'];
 ?> -->

 <?php
 session_start();
 if(isset($_POST['submit'])){
   $con=mysqli_connect("localhost","root","aissel123","Blogdb");
   $user=$_POST['uname'];
   $password=$_POST['pwd'];
   $res=mysqli_query($con,'select * from users where uname="'.$user.'" and pwd="'.$password.'"');
     if($res == TRUE){
       header("Location:user_page.php");
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a  href="add_post.php">Add Post</a></li>
    <li><a  href="index.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Logout</a></li>
    </ul>

  </div>
</nav>
</div>


<div class="container">
<div class="row">
  <center>
    <h1><font color="brown">Yum...Yum...Yummy Recipes</font></h1>
    <img src="tasty.jpeg" style="height:45px;">
  </center>
</div>
</div>


<div class="container">
  <div class="row">
    <hr/>
    <img src="chat.jpeg"></img>
    <img src="samosa.jpeg"></img>
    <img src="biryani.jpeg"></img>
    <img src="gobi.jpeg"></img>
<hr/>
  </div>
</div>

<?php
include_once('connection.php');
 $sql="select * from post";
 $result = $conn->query($sql);

if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc())
    {
      $i=0;
        $s=$i/2;
        if($s==0)
        {
      $pid=$row["pid"];

    $imageName  = $row["image"];
    echo '<div class="col-md-6" style="margin-left:0px">';

    echo ' <div class="panel panel-warning">
              <div class="panel-heading">';
              echo "<h3>".$row["title"]."</h3>
              </div>";
    //echo '<img src="images/'.$imageName.'" />';
    echo "<img src='images/$imageName' height='200px' width='auto' />";
    echo ' <div class="panel-body"> ';
    echo "Posted By: &nbsp;<b>".$row["author"]."</b><br>";




      echo "".$row["pdesc"]."";
      echo "  <a href='edit_post.php?id=$pid'>edit</a>&nbsp;&nbsp;

      <br> <a href='view.php?id=$pid' style='background-color: #808000;
  color: Red;'>View More&nbsp;>> </a><br>";
     // echo "<input type=$n3 name=$n2> <input type=$n3 name=$n1>";
      //echo " <a href='coment.php?id=$pid'> post</a>
      echo "</div></div></div>";
      $i++;
    }

    }
}
else
 {
    echo "0 results";
  }
// echo "</table>";
?>

</body>
</html>
