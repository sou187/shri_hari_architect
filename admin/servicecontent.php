<?php
// session_start();
// $a=$_SESSION['username'];
// if($a!="shrihariarchitect"){
//     echo "<script>location='index.php'</script>";
// }
?>
<?php include "header.php"?>
<?php include "connect.php"?>
<?php 
$id='';
$content='';
$service_img='';
$heading='';
$type='';
if(isset($_GET['service_id'])){          
    $id=$_GET['service_id'];
    $res=mysqli_query($conn,"SELECT * FROM `service` WHERE `service_id`='$id'");
    $row=mysqli_fetch_assoc($res);
    $content=$row['content'];
    $service_img=$row['service_img'];
    $heading=$row['heading'];
    $type=$row['content_type'];
}
if(isset($_POST['submit'])){
    $heading=$_POST['heading'];
    $content=$_POST['content'];
    
    $pro_img_name = $_FILES["service_img"]["name"];
    $pro_temp_name = $_FILES["service_img"]["tmp_name"];
    $service_img ="images1/upload/".$pro_img_name;
    move_uploaded_file($pro_temp_name,$service_img);
    if($pro_img_name==''){
        $service_img=$row['service_img'];
    }
    $type=$_POST['msg'];

   if($id>0){
        $query="UPDATE `service` SET `heading`='$heading',`content`='$content',`service_img`='$service_img ',`content_type`='$type' WHERE `service_id`='$id'";
    }
    else{
        $query="INSERT INTO `service`(`service_id`, `heading`, `content`, `service_img`, `content_type`) VALUES ('','$heading','$content','$service_img','$type')";
    }
    mysqli_query($conn,$query);
	echo "<script>location='servicecontent.php'</script>";
}
?>
<div class="main-content">
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Service Content</span></li>
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
    <!-- page title area end -->
    <div class="main-content-inner">
        <div class="container py-5">
            <form method="post" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label>Content type</label>
                    </div>
                    <div class="col-md-6">
                        <select name="msg" class="form-control">
                            <option value=""> select content type</option>
                            <option value="Specialties-1">Specialties-1</option>
                            <option value="Specialties-2">Specialties-2</option>
                            
                        </select>
                    </div>
                    <div class="col-md-2"></div>
                </div><br />

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label>Heading :</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="heading" value="<?php echo $heading?>" class="form-control" />
                    </div>
                    <div class="col-md-2"></div>
                </div><br />
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label>Service Description :</label>
                    </div>
                    <div class="col-md-6">
                        <textarea rows="10" name="content" class="form-control"><?php echo $content?></textarea>
                    </div>
                    <div class="col-md-2"></div>
                </div><br />

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label>Service Image :</label>
                    </div>
                    <div class="col-md-6">
                        <input type="file" value="<?php echo $service_img?>" name="service_img" class="form-control" /><img src="<?php echo $service_img?>"  alt="" srcset="" width="150" height="150">
                    </div>
                    <div class="col-md-2"></div>
                </div><br />

                <!-- <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label>Back Image :</label>
                    </div>
                    <div class="col-md-6">
                        <input type="file" value="" name="back_image"
                            class="form-control" />
                    </div>
                    <div class="col-md-2"></div>
                </div><br /> -->

                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg m-1" name="submit">Submit</button>
                    <button type="reset" class="btn btn-warning  btn-lg m-1" name="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php"?>