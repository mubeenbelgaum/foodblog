<html>
<head>
</head>
<body>
<?php

//session_start();
if(isset($_POST['upload'])){
    $uploaddir="images/";
  $target = $uploaddir.basename($_FILES['image']['name']);
//  $target = "images/" .basename($_FILES['image']['name']);
     //connect to the database
     $db=mysqli_connect("localhost","root","aissel123","Blogdb");
 // get a ll the submitted data from the form
     $image =$_FILES['image']['name'];

      $text=$_POST['pdesc'];
      $ldesc=$_POST['ldesc'];
      $author=$_POST['author'];
      $title=$_POST['title'];

      //Now lets move the uploaded images to folder:images
      if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg="Image Uploaded successfully ";
        $sql="insert into post(image,pdesc,author,title,ldesc,status) values('$image','$text','$author','$title','$ldesc',1)";
        mysqli_query($db,$sql);//stores the submitted data into db table:images
      }else {
        $msg="There was problem uploading the image";
}

}



header("Location:index.php");


?>
</body>
</html>
