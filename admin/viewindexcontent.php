 <?php
// session_start();
// $a=$_SESSION['username'];
// if($a!="shrihariarchitect"){
//     echo "<script>location='index.php'</script>";
// }
?>
<?php 
include "header.php";
include "connect.php";
?>
        <!-- main content area start -->
        <div class="main-content">
       
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Index Content</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Admin<i class="fa fa-angle-down"></i></h4>
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
                                
                                <div class="data-tables datatable-dark">
                                    <table class="table table-bordered table-striped" id="aboutcontent" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Sl.No</th>
                                                <th>Heading</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $i=1;
                                            $q="SELECT * FROM `home`";
                                            $confirm=mysqli_query($conn,$q);
                                            while($out=mysqli_fetch_array($confirm)){ 
                                            ?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $out['index_heading'];?></td>
                                                <td><?php echo $out['index_content'];?></td>
                                                <td><img src="<?php echo $out['index_img'];?>" class="img-fluid service-img"></td>
                                                <td>
                                                        <ul class="d-flex justify-content-center">
                                                        <li class="mr-3"><a href="indexcontent.php?index_id=<?php echo $out['index_id']?>"><i class="fa fa-2x fa-edit"></i></a></li>
                                                            <li><a onClick="javascript: return confirm('Please confirm deletion');" href="indexcontentdelete.php?index_id=<?php echo $out['index_id']?>"><i class="fa-2x ti-trash"></i></a></li>
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
        <?php include "footer.php"?> -->