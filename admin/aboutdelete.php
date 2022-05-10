<?php
// session_start();
// $a=$_SESSION['username'];
// if($a!="shrihariarchitect"){
//     echo "<script>location='index.php'</script>";
// }


    include('connect.php');
    if(isset($_GET['about_id']))
      {
        $id=$_GET['about_id'];
        $query1=mysqli_query($conn,"DELETE FROM `about` WHERE `about_id`='$id'");
        if($query1)
          {
            echo "<script>alert('data deleted succesfully')</script>";
            header("Location:viewaboutcontent.php");
          }
      }
?>