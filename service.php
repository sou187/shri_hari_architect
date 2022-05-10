<?php include "header.php"?>

<section class="top-class">
    <div  class="container-fluid sect-img">
         <div class="sect-title">
            <p class="sect-tit">OUR<span> SERVICES</span>
        </div> 
    </div>
</section>

<div class="container-fluid mt-5">
        <div class="section-heading mb-sm-5 mb-4 text-center">
            <h3 class="title-style mb-2">Our Specialties</h3>
            <p class="lead">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque,<br>
                eaque ipsa quae ab illo inventore.
            </p><br>
        </div>
        <div class="row ">
            <?php
                    include "connect.php";
                            $i = 1;
                            $sql2 = "SELECT * FROM `service` WHERE `content_type`='Specialties-1'";
                            $result1 = $conn->query($sql2);
                            while ($row = $result1->fetch_assoc()) {
                            ?>
            <div class="col-sm-4">

                <div class="card">
                    <img class="card-img-top" src="admin/<?php echo $row['service_img']?>" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $row['heading']?></h5>
                        <input type="submit" class="btn btn btn-special " value="Read more"
                            style="background-color: orange;">

                    </div>
                </div>

            </div>
            <?php } ?>

            
        </div> 
        

    </div>
    <!-- /heading -->

    <div class="container-fluid my-5 BGimg">

    </div>
    <div style="margin-top:-100px" class="container">
        <div class="row">

       
        <div class="col-lg-4 ">
            <div style="margin:10px;background-color:white">
            <!-- <i class="fa fa-xing" aria-hidden="true"></i> -->
            <h3 class="text-center">Perfect Design</h3>
            <p class="text-center">Amus a ligula quam tesque et libero<br> ut justo, ultrices in. Ut eu leo non.<br> Duis
                sed et dolor amet.</p>
                </div>
        </div>
        <div  class="col-lg-4">
            <div style="margin: 10px; background-color:white">
            <!-- <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> -->
            <h3 class="text-center">Carefully Planned</h3>
            <p class="text-center">Amus a ligula quam tesque et libero <br>ut justo, ultrices in. Ut eu leo non. <br>Duis
                sed dolor et amet.</p>
            </div>
        </div>
        <div  class="col-lg-4">
            <div style="margin:10px;background-color:white">
            <!-- <i class="fa fa-angellist" aria-hidden="true"></i> -->
            <h3 class="text-center">Smartly Execute</h3>
            <p class="text-center">Amus a ligula quam tesque et libero <br>ut justo, ultrices in. Ut eu leo non.<br> Duis
                sed dolor et amet.</p>
            </div>
        </div>
    </div>

    </div>
    

    <div class="container-fluid">
        <div class="row">
        <?php
                include "connect.php";
                        $i = 1;
                        $sql2 = "SELECT * FROM `service` WHERE `content_type`='Specialties-2'";
                        $result1 = $conn->query($sql2);
                        $row = $result1->fetch_assoc();
                        ?>
            <div class="col-lg-6 mb-lg-0 mb-5">
                <img class="img-fluid img-responsive" src="admin/<?php echo $row['service_img']?>" alt=" ">
            </div>
            <div class="col-lg-6  pl-lg-5 mt-lg-4" style="text-align: center;">
                <!--about-right-faq align-self -->
                <h2 class="title-style mb-2"><?php echo $row['heading']?></h2>
                
                <p class="mt-3"><?php echo $row['content']?></p>
                

            </div>
        
</div>
</div>

<?php include "footer.php"?>