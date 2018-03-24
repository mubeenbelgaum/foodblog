
<html>
<head>
</head>
<body>
<?php
session_start();
  $a=$_SESSION['ID'];
include_once('connection.php');

$i=$_GET['id'];


// Create connection

$q="delete from post where pid=$i";

if ($conn->query($q)  === TRUE) {

    echo "deleted";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}
 header("Location:admin_page.php");

?>
</body>
</html>
