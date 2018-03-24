<html>
<head>
</head>
<body>
<?php
session_start();
include_once('connection.php');

$a=$_POST['uname'];
$b=$_POST['pwd'];

$res="select * from users where uname='$a' and pwd='$b'";
$result = $conn->query($res);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $indi=$row['type'];
      $abc=$row['pwd'];
    }
}

if($indi==0)
{
 header("Location:user_page.php");
 $_SESSION['ID']=$abc;
}
else if($indi==1)
{
 header("Location:admin_page.php");
 $_SESSION['ID']=$abc;
}
else
{
	header("Location:index.php");
}

?>
</body>
</html>
