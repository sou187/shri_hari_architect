

<?php 
 include "header.php";
 include 'connect.php';
 $name="";
$number="";
$email="";
$message="";
 if(isset($_POST['enquiry'])){
    $name=$_POST['name1'];
    $number=$_POST['mobileno1'];
    $email=$_POST['email1'];
    $message=$_POST['message1'];
    $query="INSERT INTO `enquiry`(`enquiry_id`, `enquiry_name`, `mobile_number`, `Emial_id`, `message`) VALUES ('','$name','$number','$email','$message')";
 if($conn->query($query)==TRUE){
    echo "inserted";
    // header('Location:student_adm.php'); 

    $to = "krishnabenake@gmail.com";
        $subject = "Test mail";
        $message = "Hello! Good morning";
        $headers = "gajanandesai79@gmail.com";
        mail($to , $subject, $message, $headers );
        echo "<script>alert('Mail sent')</script>";

 } 

}
 
 ?>

<style>
.modal-body h1 {
  font-weight: 900;
  font-size: 2.3em;
  text-transform: uppercase;
}
.modal-body a.pre-order-btn {
  color: #000;
  background-color: gold;
  border-radius: 1em;
  padding: 1em;
  display: block;
  margin: 2em auto;
  width: 50%;
  font-size: 1.25em;
  font-weight: 6600;
}
.modal-body a.pre-order-btn:hover {
  background-color: #000;
  text-decoration: none;
  color: gold;
}
.enquiry-modal-css{
    border:none;
    border-bottom:1px solid white;
    background-color: transparent;
}
.enquiry-modal-css::-webkit-input-placeholder{
    color:#F7ECDE !important;
}
.enquiry-modal-css:-moz-placeholder {
    color:#F7ECDE !important;
}
.enquiry-modal-css::-webkit-input-placeholder{
    color:#F7ECDE !important;
}
.enquiry-modal-css:-moz-placeholder {
    color:#F7ECDE !important;
}
.enquery-select {
    color: #F7ECDE!important;
}
.enquery-select:invalid {
    color: #F7ECDE!important;
}
.enquery-select:focus {
    color: #F7ECDE!important;
}
</style>

<div class="my-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php
                    include "connect.php";
                    $i = 0;
                    $section_array=['active'];
                    $sql2 = "SELECT * FROM `home` WHERE `content_type`='section-1'";
                    $result1 = $conn->query($sql2);
                    while ($row = $result1->fetch_assoc()) {
                        $ddd1=json_decode($row['index_img']);
                            ?>
            <div class="carousel-item <?php echo $section_array[$i]?>">
                <img src="admin/<?php echo $ddd1[0]?>" class="d-block w-100 img-fluid" style="height:500px"
                    alt="...">
                <div class="carousel-caption d-md-block">
                    <p class="title1"><span style="font-weight:bold"> <?php echo $row['index_heading']?></span></p>
                    <p><?php echo $row['index_content']?></p>
                </div>
            </div>
            <?php
        $i++;
        } ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<section class="my-3">
    <div class="container-fluid mt-3 mb-3">
        <div class="row">
            <?php
                    include "connect.php";
                            $i = 0;
                            $class_heading1=['WELCOME WE1','WELCOME WE2','WELCOME WE3','WELCOME WE4'];
                            $class_heading2=['ARE MONOLIT1','ARE MONOLIT2','ARE MONOLIT3','ARE MONOLIT4'];
                            $class_array=['active'];
                            
                            $order1=['order-1','order-2','order-3','order-4']; 
                             $order2=['order-1','order-1','order-3','order-3']; 

                            $slider_id=['slider1','slider15','slider3','slider4'];
                            $resMultipaleImages=mysqli_query($conn,"SELECT * FROM `home` WHERE `content_type`='section-5'");
                            $multipaleImages=[];
                            if(mysqli_num_rows($resMultipaleImages)>0){
                                while($rowMultipaleImages=mysqli_fetch_assoc($resMultipaleImages)){
                                 //$multipaleImages[]=$rowMultipaleImages['index_img'];
                                 $ddd=json_decode($rowMultipaleImages['index_img']);

                            ?>
            <div class="col-sm-6 <?php echo $order1[$i]?>">
                <div class="center-div">
                    <p class="title1"> <?php echo $class_heading1[$i]?> <span style="font-weight:bold">
                            <?php echo $class_heading2[$i]?> </span></p>
                    <p> <?php echo $rowMultipaleImages['index_content']?></p><br><br>
                    <div class="row hr_line">
                        <p class="font-style text-center">
                        <div class="horizental-line"></div> FEBRUARY 18, 2016 <div class="horizental-line"></div>
                        CONSTUCTION <br class="mobile" />
                        <div class="horizental-line"></div> HOUSES</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 <?php echo $order2[$i]?>">

                <!-- Slider 1 -->
                <div class="slider" id="<?php echo $slider_id[$i]?>" style="width:100%; height:400px">
                    <!-- Slides -->

                    <?php foreach($ddd as $list){?>
                    <div style="background-image:url(admin/<?php echo $list?>)"></div>
                    <?php
         } 
         ?>
<i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
                            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
                        </svg></i>
                    <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
                            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"
                                transform="translate(100, 100) rotate(180) "></path>
                        </svg></i>
                    <!-- Title Bar -->
                    <span class="titleBar content-tit">
                        <p class="text-center"> <?php echo $rowMultipaleImages['index_heading']?></p>
                    </span>
                </div>
                <!-- End slider -->

            </div>
            <?php 
            $i++;
              }
            } ?>

        </div>
 </div>
    <div class="btn-styl d-flex justify-content-center mt-3">
        <a class="my_button" href="gall.php"> <span> Next >></span></a>
    </div>
</section>


<div class="container-fluid bg-clr p-3">
    <div class="row p-5">

        <div class="col-md-5">
            <div class="div-content">
                <p> our services</p><br>
                <h1 style="font-size:60px" class="txt-clor">We Provide <br> Best <br>Industrial Services</h1>
                <p class="txt-clor sect-txt">Cras tincidunt tellus at mi tristique.<br> Etiam dapibus rutrum leo
                    consectetur <br>accumsan.
                    Vivamus viverra ante turpi.</p>
            </div>
        </div>

        <div class="col-md-7">
            <div class="row my-2">
                <?php
                    include "connect.php";
                            $i = 1;
                            $sql2 = "SELECT * FROM `home` WHERE `content_type`='section-2'";
                            $result1 = $conn->query($sql2);
                            while ($row = $result1->fetch_assoc()) {
                                $ddd=json_decode($row['index_img']);
                                
                            ?>
                <div class="col-md-6 p-2">
                    <div class="first-img">
                        <img src=" admin/<?php echo $ddd[0] ?>" alt="" srcset="" class="img-fluid styl pb-3"
                            style="width: 265px; height: 265px;">
                        <!-- images/office-building-facade-U376XAY-1-1.jpg -->
                        <h4> <?php echo $row['index_heading']?> </h4>
                        <p> <?php echo $row['index_content']?> </p>
                    </div>
                </div>
                <?php } ?>
                
            </div>


        </div>
    </div>

</div>

<!-- Service section start -->
<section class="service-section mt-5">
    <div class="container-fluid">
        <div class="section-title">

        </div>
        <div class="row">
            <?php
                    include "connect.php";
                            $i = 1;
                            $sql2 = "SELECT * FROM `home` WHERE `content_type`='section-3'";
                            $result1 = $conn->query($sql2);
                            while ($row = $result1->fetch_assoc()) {
                                $ddd=json_decode($row['index_img']);
                            ?>
            <div class="col-lg-4 col-md-6">
                <div class="service-box">
                    <div class="sb-icon">
                        <div class="sb-img-icon">
                            <img src="admin/<?php echo $ddd[0]?>" alt="">
                        </div>
                    </div>
                    <h3 class="title"> <?php echo $row['index_heading']?> Plans and Projects</h3>
                    <p> <?php echo $row['index_content']?> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer sed dui eget lorem tincidunt.
                    </p>
                    <a href="#" class="readmore">READ MORE</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- slider last--- -->
<div class="container-fluid text-center my-3">

    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel carousel1 slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php
                    include "connect.php";
                            $i = 0;
                            $class_array=['active'];
                            $sql2 = "SELECT * FROM `home` WHERE `content_type`='section-4'";
                            $result1 = $conn->query($sql2);
                            while ($row = $result1->fetch_assoc()) {
                                $ddd=json_decode($row['index_img']);
                            ?>
                <div class="carousel-item carousel-item1 <?php echo $class_array[$i]?>">

                    <div class="col-md-3 p-2 haver-border">
                        <div class="card">
                            <div class="card-img">
                                <img src="admin/<?php echo $ddd[0]?>" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">
                                <h3 class="text-white img-over-txt"> <?php echo $row['index_heading']?></h3>
                                <p class="text-white"> <?php echo $row['index_content']?></p>

                            </div>
                        </div>
                    </div>

                </div>
                <?php 
            $i++;
            } ?>

            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>
<!-- =============================================================================== -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">  
        <!-- Modal content-->
        <div style="background: linear-gradient(rgba(2, 65, 124, 0.7),rgba(2, 65, 124, 0.7)),url('../img/contatimg.jpg');" class="modal-content">
        <div style="border-bottom:0px solid red" class="modal-header">
            <button style="background-color:transparent;font-size:30px" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
            <h1 style="color:white">Request Your <br/> Proposal</h1><br/>
            <form method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="name1" placeholder="Enter Name" class="form-control enquiry-modal-css"/><br/>
                    </div>
                    <div class="col-md-6">
                    <input type="text" name="mobileno1" placeholder="Enter Mobile No" class="form-control enquiry-modal-css"/><br/>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <input type="email" name="email1" placeholder="Enter Email ID" class="form-control enquiry-modal-css"/><br/>

                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea name="message1" rows="3" placeholder="Enter Your message Here.." class="form-control enquiry-modal-css"></textarea><br/>
                    </div>
                </div>
                
                <div class="text-center">
                    <button style="font-weight:bold;font-size:20px" class="btn-learn-more mt-3 p-3" type="submit" name="enquiry">Send Enquiry</button>
                </div>
            </form>
        </div>
        <div style="border-top:0px solid red" class="modal-footer">
            <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        </div>
        </div>
        </div>
    </div>

<script>
$(document).ready(function() {
    // $('#myModal').modal('show');
    setTimeout(function() {
    $('#myModal').modal('show');
}, 5000);
});
</script>

<!-- ============================================================================= -->
<script>
(function($) {
    "use strict";
    $.fn.sliderResponsive = function(settings) {

        var set = $.extend({
                slidePause: 5000,
                fadeSpeed: 800,
                autoPlay: "on",
                showArrows: "off",
                hideDots: "off",
                hoverZoom: "on",
                titleBarTop: "off"
            },
            settings
        );

        var $slider = $(this);
        var size = $slider.find("> div").length; //number of slides
        var position = 0; // current position of carousal
        var sliderIntervalID; // used to clear autoplay

        // Add a Dot for each slide
        $slider.append("<ul></ul>");
        $slider.find("> div").each(function() {
            $slider.find("> ul").append('<li></li>');
        });

        // Put .show on the first Slide
        $slider.find("div:first-of-type").addClass("show");

        // Put .showLi on the first dot
        $slider.find("li:first-of-type").addClass("showli")

        //fadeout all items except .show
        $slider.find("> div").not(".show").fadeOut();

        // If Autoplay is set to 'on' than start it
        if (set.autoPlay === "on") {
            startSlider();
        }

        // If showarrows is set to 'on' then don't hide them
        if (set.showArrows === "on") {
            $slider.addClass('showArrows');
        }

        // If hideDots is set to 'on' then hide them
        if (set.hideDots === "on") {
            $slider.addClass('hideDots');
        }

        // If hoverZoom is set to 'off' then stop it
        if (set.hoverZoom === "off") {
            $slider.addClass('hoverZoomOff');
        }

        // If titleBarTop is set to 'on' then move it up
        if (set.titleBarTop === "on") {
            $slider.addClass('titleBarTop');
        }

        // function to start auto play
        function startSlider() {
            sliderIntervalID = setInterval(function() {
                nextSlide();
            }, set.slidePause);
        }

        // on mouseover stop the autoplay
        $slider.mouseover(function() {
            if (set.autoPlay === "on") {
                clearInterval(sliderIntervalID);
            }
        });

        // on mouseout starts the autoplay
        $slider.mouseout(function() {
            if (set.autoPlay === "on") {
                startSlider();
            }
        });

        //on right arrow click
        $slider.find("> .right").click(nextSlide)

        //on left arrow click
        $slider.find("> .left").click(prevSlide);

        // Go to next slide
        function nextSlide() {
            position = $slider.find(".show").index() + 1;
            if (position > size - 1) position = 0;
            changeCarousel(position);
        }

        // Go to previous slide
        function prevSlide() {
            position = $slider.find(".show").index() - 1;
            if (position < 0) position = size - 1;
            changeCarousel(position);
        }

        //when user clicks slider button
        $slider.find(" > ul > li").click(function() {
            position = $(this).index();
            changeCarousel($(this).index());
        });

        //this changes the image and button selection
        function changeCarousel() {
            $slider.find(".show").removeClass("show").fadeOut();
            $slider
                .find("> div")
                .eq(position)
                .fadeIn(set.fadeSpeed)
                .addClass("show");
            // The Dots
            $slider.find("> ul").find(".showli").removeClass("showli");
            $slider.find("> ul > li").eq(position).addClass("showli");
        }

        return $slider;
    };
})(jQuery);



//////////////////////////////////////////////
// Activate each slider - change options
//////////////////////////////////////////////
$(document).ready(function() {

    $("#slider1").sliderResponsive({
        // Using default everything
        // slidePause: 5000,
        // fadeSpeed: 800,
        // autoPlay: "on",
        // showArrows: "off", 
        // hideDots: "off", 
        // hoverZoom: "on", 
        // titleBarTop: "off"
    });
    $("#slider4").sliderResponsive({
        // Using default everything
        // slidePause: 5000,
        // fadeSpeed: 800,
        // autoPlay: "on",
        // showArrows: "off", 
        // hideDots: "off", 
        // hoverZoom: "on", 
        // titleBarTop: "off"
    });
    $("#slider5").sliderResponsive({
        // Using default everything
        // slidePause: 5000,
        // fadeSpeed: 800,
        // autoPlay: "on",
        // showArrows: "off", 
        // hideDots: "off", 
        // hoverZoom: "on", 
        // titleBarTop: "off"
    });

    $("#slider15").sliderResponsive({
        // fadeSpeed: 300,
        // autoPlay: "off",
        // showArrows: "on",
        // hideDots: "off"
    });

    $("#slider3").sliderResponsive({
        // hoverZoom: "off",
        // hideDots: "on"
    });

});
</script>

<script>
let items = document.querySelectorAll('.carousel1 .carousel-item1')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i = 1; i < minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})
</script>

<?php include "footer.php"?>