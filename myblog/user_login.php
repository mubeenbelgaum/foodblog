<html>
  <head>
    <title>Login page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style.css" rel="stylesheet">
  </head>



    <body>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php"></a>

          </div>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"></span>Admin Login</a></li>
<li><a  href="index.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Logout</a></li>
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

<hr/>
    <form action="verify.php" method="post">


      <center>
      <h1>Login</h1><br>

      Username: <input type="text" name="uname" required><br><br>
      Password: <input type="password" name="pwd" required><br><br>
     <input type="submit" name="submit" value="Submit" onclick="myfunction()"><br><br>
   </center>
    </form>



  </body>
</html>
