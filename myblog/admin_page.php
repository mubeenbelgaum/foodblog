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

</head>
<body>
  <form action="delete.php" method="GET">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Admin Page</a>

    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="add_post.php"><span class=""></span>Add Post</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-login"></span>Logout</a></li>
    </ul>
  </div>
</nav>
</div>


<div class="container">
<div class="row">
    <img src="foodies-and-friends.png" width="120px" height="100px">
  <center>
    <h1 style="margin-top:-50px;"><font color="brown">Yum...Yum...Yummy Recipes</font></h1>
    <img src="tasty.jpeg" style="height:45px;">
  </center>
</div>
</div>


<div class="container">
  <div class="row">
    <hr/>
    <img src="chat.jpeg"></img>
    <img src="samosa.jpeg"></img>
    <img src="biryani.jpeg" height="190px"></img>
    <img src="gobi.jpeg"></img>
<hr/>
  </div>
</div>
<?php
include_once('connection.php');
 $sql="select * from post ";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
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
    $n1="coment";
    $n2="cauthor";
    $n3="text";

    echo "  <a href='edit_post.php?id=$pid'>edit</a>&nbsp;&nbsp;
    <a href='delete.php?id=$pid'> delete</a>&nbsp;&nbsp;
    <br> <a href='view.php?id=$pid' style='background-color: #808000;
color: Red;'>View More&nbsp;>> </a><br>";
   // echo "<input type=$n3 name=$n2> <input type=$n3 name=$n1>";
    //echo " <a href='coment.php?id=$pid'> post</a>
    echo "</div></div></div>";

      $i++;
    }
} }else {
    echo "0 results";
}
// header("Location:admin_page.php");

?>
</form>
</body>
</html>
