<?php
// session_start();
// $a=$_SESSION['username'];
// if($a!="shrihariarchitect"){
//     echo "<script>location='index.php'</script>";
// }

    include('connect.php');
    if(isset($_GET['index_id']))
      {
        $id=$_GET['index_id'];
        $query1=mysqli_query($conn,"DELETE FROM `home` WHERE `index_id`='$id'");
        if($query1)
          {
            echo "<script>alert('data deleted succesfully')</script>";
            header("Location:slidercontent.php");
          }
      }
?>