<?php include "header.php" ?>

<section class="top-class">
    <div  class="container-fluid sect-img">
        <div class="sect-title">
            <p class="sect-tit">OUR<span> GALLERY</span>
            <!-- <hr style="color:white; width:90px; height:3px;"></p> -->
            
        </div>
    </div>
</section>
<div class="row">
    <div class="col-sm-2"></div>
<div class="col-sm-8">
                <div class="center-div">
                    <p class="title1">WELCOME WE <span style="font-weight:bold">ARE MONOLIT</span></p>
                    <p>Our team takes over everything, from an idea and concept development to realization. We believe
                        in traditions and incorporate them within our innovations. All our projects incorporate a unique
                        artistic image and functional solutions. Client is the soul of the project. Our main goal is to
                        illustrate his/hers values and individuality through design.</p><br><br>
						<div class="row hr_line">
                        <p class="font-style text-center">
                        <div class="horizental-line"></div> FEBRUARY 18, 2016 <div class="horizental-line"></div> CONSTUCTION <br class="mobile" />
						 <div class="horizental-line"></div> HOUSES</p>
                    </div>		
                </div>
            </div>
            <div class="col-sm-2"></div>
            </div>
<div class="container-fluid p-4"> 
<p class="title1">GALL<span style="font-weight:bold">ERY</span></p>  
    <div class="row">
                <?php
                include "connect.php";
                        $i = 1;
                        $sql2 = "SELECT * FROM `portfolio`";
                        $result1 = $conn->query($sql2);
                        while ($row = $result1->fetch_assoc()) {
                        ?>
        <div style="background:url('admin/<?php echo $row['portfolio_img']?>');background-size: 100% 100%;background-repeat:no-repeat;height:220px;" class="col-md-3 bg-img background-img img-fluid">
            <div class="wrap">
                <div class="sticker"></div>
                <div class="msg"><i class="fa fa-2x fa-arrow-right"></i></div>
            </div>
        </div>
<?php }?>
        
    </div>
</div>

<?php include "footer.php"?>