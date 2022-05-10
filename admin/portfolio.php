<?php 
// session_start();
// 
// $a=$_SESSION['username'];
// if($a!="shrihariarchitect"){
//     echo "<script>location='index.php'</script>";
// }
include "connect.php";
$id='';
$portfolio_img='';
if(isset($_GET['portfolio_id'])){          
    $id=$_GET['portfolio_id'];
    $res=mysqli_query($conn,"SELECT * FROM `portfolio` WHERE `portfolio_id`='$id'");
    $row=mysqli_fetch_assoc($res);
    $portfolio_img=$row['portfolio_img'];
}
if(isset($_POST['add_image'])){
    $pro_img_name = $_FILES["portfolio_img"]["name"];
    $pro_temp_name = $_FILES["portfolio_img"]["tmp_name"];
    $portfolio_img ="images1/upload/".$pro_img_name;
    move_uploaded_file($pro_temp_name,$portfolio_img);
    if($pro_img_name==''){
        $portfolio_img=$row['portfolio_img'];
    }
    if($id>0){
        $query="UPDATE `portfolio` SET `portfolio_img`='$portfolio_img' WHERE `portfolio_id`='$id'";
    }
    else{
        $query="INSERT INTO `portfolio`(`portfolio_id`, `portfolio_img`) VALUES ('','$portfolio_img')";
    }
    mysqli_query($conn,$query);
	echo "<script>location='portfolio.php'</script>";
}
?>

<?php include "header.php"?>
<!-- main content area start -->
<div class="main-content">

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.php">Home</a></li>
                        <li><span>Portfolio Content</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Admin<i class="fa fa-angle-down"></i>
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
        <div class="row">

            <!-- Dark table start -->
            <div class="col-12 mt-5">

                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="<?php echo $portfolio_img?>" class="img-fluid"/>
                                </div>
                                <div class="col-md-6">
                                    <label>Upload Image</label>
                                    <input type="file" name="portfolio_img" class="form-control" />
                                </div>
                                <div class="col-md-2 pt-4">
                                    <button type="submit" name="add_image" class="btn btn-success">Add Image</button>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </form>
                        <br/><br/>

                        <div class="data-tables datatable-dark">
                            <table class="table table-bordered table-striped" id="aboutcontent" class="text-center">
                                <thead class="text-capitalize">
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                            include ("connect.php");
                                            $q="SELECT * FROM `portfolio`";
                                            $confirm=mysqli_query($conn,$q);
                                            $i=1;
                                            while($out=mysqli_fetch_array($confirm)){ 
                                            ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><img src="<?php echo $out['portfolio_img'];?>" class="img-fluid service-img">
                                        </td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="portfolio.php?portfolio_id=<?php echo $out['portfolio_id']?>"><i
                                                            class="fa fa-2x fa-edit"></i></a>
                                                        </li>
                                                <li><a onClick="javascript: return confirm('Please confirm deletion');" href="portfoliodelete.php?portfolio_id=<?php echo $out['portfolio_id']?>"><i
                                                            class="fa-2x ti-trash"></i></a>
                                                        </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <?php
                                            $i++;
                                            }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dark table end -->
        </div>
    </div>
</div>
<!-- main content area end -->




<?php include "footer.php"?>