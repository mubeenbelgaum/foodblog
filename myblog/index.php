<!DOCTYPE html>
<html lang="en">
<head>
  <title>Food Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <?php
  include_once('connection.php');
  ?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Home</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="user_login.php"><span class="glyphicon glyphicon-log-in"></span> UserLogin</a></li>
      <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"></span>Admin Login</a></li>
    </ul>
  </div>
</nav>



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


<h1><center>OUR POSTS</center></h1>
<hr />
  <div class="row">
    <div class="col-md-4" style="margin-left:100px;height:30%;">
      <a href="choco_desc.php" data-toggle="tooltip" title="Chocolate cream pie">
        <img src="chocopie.jpg" width="130%">
      </a><br>
  <b>By Sally</b><br>
  <h3><font color:"brown">Easy Chocolate Cream Pie</font></h3>
  <p>Chocolate, pudding and pie—the best of all possible worlds!
    This easy, make-ahead pudding pie sets up in a few hours in the fridge,
    just in time for dessert. </p><br>
    <button class="btn" id="bid1" onclick="Location.href='choco_desc.php';" style="background-color:#808000; color:Red">
      View More->
    </button>
    </div>


    <script>
    document.getElementById('bid1').onclick=function()
    {
      location.href="choco_desc.php";
    };
    </script>


    <div class="col-md-4" >
      <p> &nbsp;</p>
    </div>


    <div class="col-md-4" style="margin-left:100px; margin-top:-30px;">
      <a href="gobi_desc.php" data-toggle="tooltip" title="Gobi Manchurian">
        <img src="gobi.jpeg" width="130%">
      </a><br>
  <b>By Sally</b><br>
  <h3><font color:"brown">Easy Chocolate Cream Pie</font></h3>
  <p>Chocolate, pudding and pie—the best of all possible worlds!
    This easy, make-ahead pudding pie sets up in a few hours in the fridge,
    just in time for dessert. </p><br>
    <button class="btn" id="bid2" onclick="Location.href='gobi_desc.php';" style="background-color:#808000; color:Red">
      View More->
    </button>
    </div>


    <script>
    document.getElementById('bid2').onclick=function()
    {
      location.href="gobi_desc.php";
    };
    </script>
</div>

<hr>
    <div class="row">



    <h2><font color:"brown"><center> RECENT POSTS</center></font></h2>
    <p>
      <?php
       $p="select * from post ";

      $r=$conn->query($p);
      if ($r->num_rows > 0)
      {
          // output data of each row
          while($row = $r->fetch_assoc())
          {  $i=0;
            $s=$i/2;
            if($s==0)
            {
                $pid=$row["pid"];
            $imageName  = $row["image"];
            echo '<div class="col-md-6" style="margin-left:0px">';

            echo ' <div class="panel panel-warning">
                    <div class="panel-heading">';
                    echo "<h3>".$row["title"]."</h3> </div>";
          //echo '<img src="images/'.$imageName.'" />';
          echo "<img src='images/$imageName' height='200px' width='auto' />";
          echo ' <div class="panel-body"> ';
          echo "Posted By: &nbsp;<b>".$row["author"]."</b><br>";
          echo "".$row["pdesc"]."<br><br>";
          echo "<a href='view.php?id=$pid' style='background-color: #808000;
color: Red;'>View More&nbsp;>> </a>";
          echo "</div>
          </div>
          </div>
        ";
              $i++;
            }
          }
        }
      else {
          echo "Error: " . $q . "<br>" . $conn->error;
            }

   ?>
   </p>





</div>




<script>
document.getElementById('bid2').onclick=function()
{
  location.href="gobi_desc.php";
};
</script>








<br>
<div class="fo" style="height:50px;width:100%;background-color:black;position:relative;">
<center>
<a target="_blank" href="http://www.google.com"><i class="fa fa-google" style="font-size:30px;color:white">&nbsp;</i></a>
<a target="_blank" href="http://www.facebook.com">  <i class="fa fa-facebook-square" style="font-size:30px;color:white">&nbsp;</i></a>
  <a target="_blank" href="http://www.googleplus.com"><i class="fa fa-google-plus-circle" style="font-size:30px;color:white">&nbsp;</i></a>
  <a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest" style="font-size:30px;color:white">&nbsp;</i></a>
  <a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter" style="font-size:30px;color:white"></i></a>
</center>


</div>
</body>
</html>
