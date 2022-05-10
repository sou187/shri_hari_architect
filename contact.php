 <?php 
 include "header.php";
 include 'connect.php';
 $name="";
$number="";
$email="";
$message="";
 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $number=$_POST['mobileno'];
    $email=$_POST['emailid'];
    $message=$_POST['msg1'];
    $query="INSERT INTO `contact_us`(`contact_id`, `name`, `number`, `email`, `message`) VALUES ('','$name','$number','$email','$message')";
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

 <section class="top-class">
    <div  class="container-fluid sect-img">
        <div class="sect-title">
            <p class="sect-tit">CONTACT<span> US</span>
            <!-- <hr style="color:white; width:90px; height:3px;"></p> -->
            
        </div>
    </div>
</section>

 <div class="container-fluid mt-5">
 <p class="title1">CONTACT<span style="font-weight:bold"> US</span></p> 
     <div class="row">
         <div class="col-md-6">
             <form action="" method="post">
                 <div class="form-group my-3">
                     <label for="name" class="text-dark">Your Name</label>
                     <input type="text" class="form-control border-style" id="name" name="name">
                 </div>
                 <div class="form-group my-3">
                     <label for="name" class="text-dark">Contact Number</label>
                     <input type="text" class="form-control border-style" id="number" name="mobileno">
                 </div>
                 <div class="form-group my-3">
                     <label for="name" class="text-dark">Email Address</label>
                     <input type="text" class="form-control border-style" id="email" name="emailid">
                 </div>
                 <div class="form-group my-3">
                     <label for="message" class="text-dark">Your Message</label>
                     <textarea id="message" cols="30" rows="3" class="form-control border-style" name="msg1"></textarea>
                 </div><br>
                 <div class="form-group my-3 text-center">
                     <label for="name"></label>
                     <input type="submit" class="btn btn btn-special" name="submit" value="Send Message"
                         style="background-color:#1A1A40; color:#fff">
                 </div>
             </form>
         </div>

         <div class="col-md-6 col-md-6">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.3114587862515!2d74.50759401485553!3d15.840219389022808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbf669aba9a0329%3A0x5ed0a13d9a3263e1!2s1st%20Cross%20Rd%2C%20Hindwadi%2C%20Belagavi%2C%20Karnataka%20590011!5e0!3m2!1sen!2sin!4v1628772875054!5m2!1sen!2sin"
                 width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         </div>
     </div>
 </div>

 <div class=" contact-left mt-3 pt-lg-2">
     <div class="row cont-detai mx-5">
         <div class="col-sm-3 col-lg-3">
             <div class="d-flex contact-grid">
                 <div class="cont-left text-center mr-1">
                     <span class="fa fa-globe contact-icon"></span>
                 </div>
                 <div class="cont-right px-2">
                     <h6>Company Address</h6>
                     <p>10001, 5th Avenue, London.</p>
                 </div>
             </div>
             </div>
             <div class="col-sm-3 col-lg-3 pt-lg-2">
             <div class="d-flex contact-grid">
                 <div class="cont-left text-center mr-1">
                     <span class="fa fa-phone contact-icon"></span>
                 </div>
                 <div class="cont-right px-2">
                     <h6>Call Us</h6>
                     <p>+1(21) 112 7368</p>
                 </div>
             </div>
             </div>

         <div class="col-sm-3 col-lg-3 pt-lg-2">
             <div class="d-flex contact-grid">
                 <div class="cont-left text-center mr-1">
                     <span class="fa fa-envelope-open contact-icon"></span>
                 </div>
                 <div class="cont-right px-2">
                     <h6>Email Us</h6>
                     <p><a href="example@mail.com" class="mail">example@mail.com</a></p>
                 </div>
             </div>
             </div>
<div class="col-sm-3 col-lg-3 pt-lg-2">
             <div class="d-flex contact-grid">
                 <div class="cont-left text-center mr-1">
                     <span class="fa fa-headphones contact-icon"></span>
                 </div>
                 <div class="cont-right px-2">
                     <h6>Customer Support</h6>
                     <p><a href="mailto:info@support.com" class="mail">info@support.com</a></p>
                 </div>
             </div>
             </div>
     </div>
 </div>
 <?php include "footer.php"?>