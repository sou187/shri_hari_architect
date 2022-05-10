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
if(isset($_GET['index_id'])){          
    $id=$_GET['index_id'];
    $res=mysqli_query($conn,"SELECT * FROM `home` WHERE `index_id`='$id'");
    $row=mysqli_fetch_assoc($res);
    $heading=$row['index_heading'];
    $content=$row['index_content'];
    $service_img=$row['index_img'];
    $type=$row['content_type'];
}
if(isset($_POST['submit'])){
    $heading=$_POST['heading'];
    $content=$_POST['content'];
    $pro_img_name = $_FILES["service_img"]["name"];
    $array=[];
    $pro_temp_name = $_FILES["service_img"]["tmp_name"];
    for($i=0;$i<count($_FILES["service_img"]["name"]);$i++){
        $pro_img_name=$_FILES["service_img"]["name"][$i];
        $pro_temp_name = $_FILES["service_img"]["tmp_name"][$i];
        $service_img ="images1/upload/".$pro_img_name;
         move_uploaded_file($pro_temp_name,$service_img);
         $array[$i]=$service_img;
    }
    $ddd=json_encode($array);
    if($pro_img_name==''){
        $service_img=$row['index_img'];
    }
        $type=$_POST['msg'];

       if($id>0){
            $query="UPDATE `home` SET `index_heading`='$heading',`index_content`='$content',`index_img`='$ddd',`content_type`='$type' WHERE `index_id`='$id '";
        }   
        else{
            $query="INSERT INTO `home`(`index_id`, `index_heading`, `index_content`, `index_img`, `content_type`) VALUES ('','$heading','$content','$ddd','$type')";
        }
        mysqli_query($conn,$query);
    	echo "<script>location='indexcontent.php'</script>";
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
                        <li><span>Home Content</span></li>
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
                            <option value="section-1" <?php if($type=='section-1'){ echo 'selected'; } else{ echo '';}?>>section-1</option>
                            <option value="section-2" <?php if($type=='section-2'){ echo 'selected'; } else{ echo '';}?>>section-2</option>
                            <option value="section-3" <?php if($type=='section-3'){ echo 'selected'; } else{ echo '';}?>>section-3</option>
                            <option value="section-4" <?php if($type=='section-4'){ echo 'selected'; } else{ echo '';}?>>section-4</option>
                            <option value="section-5" <?php if($type=='section-5'){ echo 'selected'; } else{ echo '';}?>>section-5</option>
                            <option value="section-6" <?php if($type=='section-6'){ echo 'selected'; } else{ echo '';}?>>section-6</option>

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
                        <label>Index Description :</label>
                    </div>
                    <div class="col-md-6">
                        <textarea rows="10" name="content" class="form-control"><?php echo $content?></textarea>
                    </div>
                    <div class="col-md-2"></div>
                </div><br />

                <div class="row" id="image-box">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label>Index Image :</label>
                    </div>
                    <div class="col-md-5">
                    <input type="file" name="service_img[]" class="form-control"/> 
                    <?php
                                        
                                        $i=1;
                                           $resMultipaleImages=mysqli_query($conn,"SELECT * FROM `home` WHERE `index_id`='$id'");
                                           $multipaleImages=[];
                                           if(mysqli_num_rows($resMultipaleImages)>0){
                                               while($rowMultipaleImages=mysqli_fetch_assoc($resMultipaleImages)){
                                                //$multipaleImages[]=$rowMultipaleImages['index_img'];
                                                $ddd=json_decode($rowMultipaleImages['index_img']);
                                        
                                            ?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                             
                                                <td><?php foreach($ddd as $list){echo "<img class='img-fluid' height='100px' width='100px' src=".$list.">";}?></td>
                                               </tr>
                                               <?php
                                            $i++;   
                                               }
                                            }?>
                        
                    </div>

                    <div class="col-md-1 p-1 ">     
                        <button type="button" id="" name="" class="btn btn-info btn-block"
                            onclick="add_more_images()"><span id="">Add Image</span></button>
                    </div>
                    <div class="col-md-2"></div>
                </div><br />

                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg m-1" name="submit">Submit</button>
                    <button type="reset" class="btn btn-warning  btn-lg m-1" name="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var total_image=1;
function add_more_images() {
    total_image++;
    var html ='<div class="row" id="add_image_box_'+ total_image +'"><div class="col-md-2"></div><div class="col-md-2"><label>Index Image :</label></div><div class="col-md-5"><input type="file" name="service_img[]" class="form-control" /></div><div class="col-md-1 p-1 "> <button type="button"class="btn btn-lg btn-danger btn-block" onclick=remove_image("'+total_image+'")><span id="payment-button-amount">Remove</span></button></div> <div class="col-md-2"></div></div>';
    jQuery('#image-box').after(html);
}

function remove_image(id) {
jQuery('#add_image_box_'+id).remove();
}
</script>
<?php include "footer.php"?>
