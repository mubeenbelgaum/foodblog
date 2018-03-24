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
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Logout</a></li>
      </ul>
    </div>
  </nav>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
      <center>
<?php
include_once('connection.php');
$id=$_GET['id'];

$sql="select pid,image,pdesc,author,title,ldesc from post where pid=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc())
   {
   $id=$row["pid"];
   $pd=$row["pdesc"];
   $a=$row["author"];
  $t=$row["title"];
  $ld=$row["ldesc"];
  $i=$row["image"];
   }
} else {
   echo "0 results";
}
  ?>
  <form action="edit.php" method="GET" style="border:1px solid black;width:50%;margin-top:60px;">
    <center>
          <h1>EDIT YOUR RECIPE</h1>
              <br>
              <b>Title:&nbsp;&nbsp;&nbsp;&nbsp;</b><br>

<input type="hidden" name="id" value=<?php echo $id ?> ><br><br>
              <input type="text" name="title" value=<?php echo $t ?> readonly><br><br>
              <b>Author:</b><br>
              <input type="text" name="author" value=<?php echo $a ?> readonly><br><br>
              <b>&nbsp;&nbsp;&nbsp;Brief Description:</b><br>
              <input type="text" name="pdesc" value="<?php echo htmlspecialchars($pd); ?>"><br><br>
                <b>Description :</b>
                <br><textarea  name="ldesc"> "<?php echo htmlspecialchars($ld); ?>"</textarea><br><br>
                    <input type="submit"><br><br>
    </center>

</form>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>
