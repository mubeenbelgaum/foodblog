
<html>
<head>
</head>
<body>
<?php
//session_start();
include_once('connection.php');
$id=$_GET['id'];
$a=$_GET['author'];
$t=$_GET['title'];
$pd=$_GET['pdesc'];
$ld=$_GET['ldesc'];
$i=$_GET['image'];


$q="update post set pdesc='$pd',ldesc='$ld' where pid='$id'";

if ($conn->query($q)  === TRUE) {
    echo " updated successfully";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}

// print "<H2><FONT COLOR=RED><CENTER>WITH THE ID:$p2</FONT></H2>";
header("Location:admin_page.php");
?>
</body>
</html>
