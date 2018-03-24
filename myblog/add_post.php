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
            <a class="navbar-brand" href="admin_page.php">Back</a>

      </ul>

    </div>
  </nav>

<center>
<form action="addpostprocess.php" method="post" style="border:1px solid black;width:50%;margin-top:60px;"  enctype="multipart/form-data">
  <h1>POST YOUR RECIPE</h1>
<br>
<b>Title:&nbsp;&nbsp;&nbsp;&nbsp;</b><br>
<input type="text" name="title"><br><br>
<b>Author:</b><br>
<input type="text" name="author"><br><br>
<b>&nbsp;&nbsp;&nbsp;Brief Description:</b><br>
<input type="text" name="pdesc"><br><br>
<b>Recipe Image:</b>
<br>
<input type="file" name="image">
  <b>Description :</b>
  <br><textarea rows="10" cols="50" name="ldesc"> </textarea><br><br>
<input type="submit" name="upload" value="Post"><br><br>
</form>
</center>


<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>
