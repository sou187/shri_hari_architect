<?php
// session_start();
// $a=$_SESSION['username'];
// if($a!="shrihariarchitect"){
//     echo "<script>location='index.php'</script>";
// }
?>
<?php
include "connect.php";
$id='';
$about_para1='';
$about_para2='';
$about_img='';
$about_img1='';
$about_heading='';
if(isset($_GET['about_id'])){          
    $id=$_GET['about_id'];
    $res=mysqli_query($conn,"SELECT * FROM `about` WHERE `about_id`=$id");
    $row=mysqli_fetch_assoc($res);
    $about_para1=$row['about_para1'];
    $about_para2=$row['about_para2'];
    $about_img=$row['about_img'];
    $about_img1=$row['about_img'];
    $about_heading=$row['about_heading'];
}
if(isset($_POST['about_submit'])){
    $about_para1=$_POST['about_para1'];
    $about_para2=$_POST['about_para2'];
    $about_heading=$_POST['about_heading'];
    $pro_img_name = $_FILES["about_img"]["name"];
    $pro_temp_name = $_FILES["about_img"]["tmp_name"];
    $about_img ="images1/upload/".$pro_img_name;
    move_uploaded_file($pro_temp_name,$about_img);
   
    if($pro_img_name==''){
        $about_img=$about_img1;
    }
    if($id>0){
        $query="UPDATE `about` SET `about_heading`='$about_heading',`about_para1`='$about_para1',`about_para2`='$about_para2',`about_img`='$about_img' WHERE `about_id`='$id'";
        
    }
    else{
        $query="INSERT INTO `about`(`about_id`, `about_heading`, `about_para1`, `about_para2`, `about_img`) VALUES ('','$about_heading',' $about_para1','$about_para2','$about_img')";
    }
    mysqli_query($conn,$query);
	echo "<script>location='aboutcontent.php'</script>";
}
?>
<?php include "header.php"?>
<div class="main-content">
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.php">Home</a></li>
                        <li><span>About Content</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Admin <i class="fa fa-angle-down"></i>
                    </h4>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="logout.php">Log Out</a>
                                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content-inner pt-5">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <label>Heading :</label>
            <input type="text" name="about_heading" value="<?php echo $about_heading?>"class="form-control"/><br/>
            <label>paragraph-1</label>
            <input type="text" name="about_para1" value="<?php echo $about_para1?>" class="form-control"/><br/>
            <label>paragraph-2</label>
            <input type="text" name="about_para2" value="<?php echo $about_para2?>" class="form-control"/><br/>
            <label>About Image</label>
            <input type="file" name="about_img" class="form-control"/><br/><img src="<?php echo $about_img?>"  alt="" srcset="" width="150" height="150"></br>
            <button type="submit" name="about_submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
<!-- page title area end -->

<?php include "footer.php"?>