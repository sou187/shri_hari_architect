<?php
session_start();
$a=$_SESSION['username'];
if($a!="killedarpackers"){
    echo "<script>location='index.php'</script>";
}

    include('connect.php');
    if(isset($_GET['portfolio_id']))
      {
        $id=$_GET['portfolio_id'];
        $query1=mysqli_query($conn,"DELETE FROM `portfolio` WHERE `portfolio_id`='$id'");
        if($query1)
          {
            echo "<script>alert('data deleted succesfully')</script>";
            header("Location:portfolio.php");
          }
      }
?>