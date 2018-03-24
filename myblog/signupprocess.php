<html>
<head>
</head>
<body>
<?php
session_start();
include_once('connection.php');

$a2=$_POST['name'];
$a3=$_POST['email'];
$a4=$_POST['contact'];
$a6=$_POST['pwd'];
$sql="select uid from users";
$res=$conn->query($sql);
if ($res->num_rows > 0) {
    // output data of each row
    while($row = $res->fetch_assoc()) {
      $p1=$row['uid'];
    }
}

$p2=$p1+1;
$q="insert into users values($p2,'$a2','$a3','$a4','$a6')";


if ($conn->query($q) === TRUE) {
echo "Account created successfully";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}

header("Location:index.php");
?>
</body>
</html>
