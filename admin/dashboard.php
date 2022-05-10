<?php
session_start();
$a=$_SESSION['username'];
if($a!="shrihariarchitect"){
    echo "<script>location='index.php'</script>";
}
?>
<?php include "header.php"?>
<div class="main-content">
       <div class="page-title-area">
           <div class="row align-items-center">
               <div class="col-sm-6">
                   <div class="breadcrumbs-area clearfix">
                       <h4 class="page-title pull-left">Dashboard</h4>
                       <!-- <ul class="breadcrumbs pull-left">
                           <li><a href="index.html">Home</a></li>
                           <li><span>Dashboard</span></li>
                       </ul> -->
                   </div>
               </div>
               <div class="col-sm-6 clearfix">
                   <div class="user-profile pull-right">
                       <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Admin <i class="fa fa-angle-down"></i></h4>
                       <div class="dropdown-menu">
                           <a class="dropdown-item" href="logout.php">Log Out</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="main-content-inner pt-5">
        <div class="row">
            <?php include "connect.php";
                        $sql="SELECT count(*) as reg FROM `registration`";
                        $confirm=$conn->query($sql);
                        $out=$confirm->fetch_assoc();
                        $total_reg = $out['reg'];
                      
                        ?>
            <div class="col-md-4">
                <div style="border-left:4px solid blue;" class="dashboard-div">
                   <h4></h4><br/>
                   <h6><?php echo $total_reg?></h6>
                </div>
            </div>
           
           

        </div>
    
    </div>



    </div>
    <!-- page title area end -->
    
<script>
$('.count').each(function() {

$(this).prop('counter', 0).animate({

  counter: $(this).text()

}, {

  duration: 4000,

  easing: 'swing',

  step: function(now) {

    $(this).text(Math.ceil(now));
  }
});
});
</script>
<?php include "footer.php"?>