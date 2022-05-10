<?php include "header.php"?>

<section class="top-class">
    <div class="container-fluid sect-img">
        <div class="sect-title">
            <p class="sect-tit">ABOUT<span> US</span>
        </div>
    </div>
    <div style="margin-top:-90px" class="container">
        <div class="row">


            <div class="col-lg-3">

            </div>
            <div class="col-lg-4">

            </div>
            <div class="col-lg-5">
                <div class="bord-line p-5" style="margin:10px; background-color:white">
                    <!-- <i class="fa fa-angellist" aria-hidden="true"></i> -->
                    <h4 class="text-center">Call Us Today</h4>
                    <p>
                    <h2 class="text-center" style="color:#1A1A40 ">+91 9481561989</h2>
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="container-fluid p-5">
    <div class="row">
    <?php
                    include "connect.php";
                            $i = 1;
                            $sql2 = "SELECT * FROM `about`";
                            $result1 = $conn->query($sql2);
                            $row = $result1->fetch_assoc();
                            ?>
        <div class="col-md-5">
            <div class="about-img">
                <img class="img-fluid plan-img" src="admin/<?php echo $row['about_img']?>" alt="about-img">
            </div>
        </div>

        <div class="col-md-7">
        <div class="about-title text-center">
                <p style="color:#16213e; font-weight: 900; font-size:45px"><?php echo $row['about_heading']?></p>
            </div>
         <div class="row aboutusbox">
                <div class="col-md-4">
                    <img src="images/Layer-img.png" alt="" srcset="" class="img-fluid plan-img2">
                </div>
                <div class="col-md-8">
                    <p style="margin-top:-20px"><?php echo $row['about_para1']?></p>
                    <br>
                    <h5 style="color:#16213e;">Sean Bradshaw, CEO</h5>
                </div>

            </div><br>
            <p><?php echo $row['about_para2']?></p><br>
            <div class="btn-styl d-flex justify-content-center mt-3">
        <a class="my_button" href="gall.php"> <span> Enquiry </span></a>
        </div>
        </div>
    </div>
</div>

<div class="">
<div class="pt-5 about-backimg">
<p style="font-weight: 400; font-size: 34px; line-height: 38px; text-align: center; color: #ebecee;">Get a Quote</p>
<h2 style="text-align: center;"><span style="color: #ffffff;">Build Your Future Today</span></h2>
<p style="margin-bottom: 14px; text-align: center; max-width: 500px; margin-right: auto; margin-left: auto;"><span style="color: #ffffff;">Pellentesque ex ex, suscipit et lectus at, mollis tempus ligula. Praesent sagittis eros orci, at sodales dolor rutrum</span></p>
</div>
<div style="margin-top:-100px" class="container">
    <div class="row">

   
    <div class="col-lg-4 ">
        <div style="margin:10px;background-color:white" class="p-3">
        <div class="row">
            <div class="col-md-3">
                <div style="background-color:#F45905; height:50px; width:50px">
                <h2 class="text-white p-2">01</h2>
                </div>
            </div>
            <div class="col-md-9">
        <h3 class="text-center">Consultation</h3>
        <p class="text-center">Etiam ac leo at quam aliquet</p>
        </div>
            </div>    
        </div>
    </div>
    <div  class="col-lg-4">
    <div style="margin:10px;background-color:white" class="p-3">
        <div class="row">
            <div class="col-md-3">
            <div style="background-color:#001ED3; height:50px; width:50px">
                <h2 class="text-white p-2">02</h2>
                </div>
            </div>
            <div class="col-md-9">
        <h3 class="text-center">Planning</h3>
        <p class="text-center">Etiam ac leo at quam aliquet</p>
        </div>
            </div>    
        </div>
    </div>
    <div  class="col-lg-4">
    <div style="margin:10px;background-color:white" class="p-3">
        <div class="row">
            <div class="col-md-3">
            <div style="background-color:#F45905 ; height:50px; width:50px">
                <h2 class="text-white p-2">03</h2>
                </div>
            </div>
            <div class="col-md-9">
        <h3 class="text-center">Inovations</h3>
        <p class="text-center">Etiam ac leo at quam aliquet</p>
        </div>
            </div>    
        </div>
    </div>
</div>

</div>
</div>





<?php include "footer.php"?>