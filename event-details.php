
<?php
session_start();
error_reporting(0);
include('includes/config.php');
// Signup Process

?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Project Details </title>
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- icofont css -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Nivo css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
		<!-- animaton text css -->
        <link rel="stylesheet" href="css/animate-text.css">
		<!-- Metrial iconic fonts css -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- color css -->
		<link href="css/color/skin-default.css" rel="stylesheet">
        
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--body-wraper-are-start-->
         <div id="home" class="wrapper event-details">
         
           <!--slider header area are start-->
           <div id="home" class="header-slider-area">
                <!--header start-->
           <?php include_once('includes/header.php');?>
                <!-- header End-->
            </div>
           <!--slider header area are end-->

            <!--  breadcumb-area start-->
            <div class="breadcumb-area bg-overlay">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Project-details</li>
                    </ol>
                </div>
            </div> 
            <!--  breadcumb-area end--> 
<?php
// Event Details
$eid=intval($_GET['evntid']);
$isactive=1;
$sql = "SELECT EventName,EventLocation,id,EventDescription from tblevents where id=:eid and IsActive=:isactive";
$query = $dbh -> prepare($sql);
$query->bindParam(':isactive',$isactive,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
//project details

if($query->rowCount() > 0)
{
foreach($results as $row)
{ 
    ?>           
            <!--about area are start-->
             <div class="single-upcomming shadow-box">
                                
                                 <div class="col-md-3 col-sm-5 col-xs-12">
                                    <div class="uc-event-title">
                                        <!--<div class="uc-icon"><i class="zmdi zmdi-globe-alt"></i></div> -->
                                        <a href="#"><?php echo htmlentities($row->proj_name);?></a>
                                    </div> 
                                 </div> 
                                 <div class="col-md-2 col-sm-3 col-xs-12">
                                     <div class="venu-no">
                                         <p>Priority : <?php echo htmlentities($row->p_priority);?></p>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-sm-4 col-xs-12">
                                     <div class="upcomming-ticket text-center">
			<!-- Add Buttons to remove tasks -->
                                     </div>
                                 </div>
                              </div>
            <!--about area are end-->
        <?php }} else {?>
     <h3 align="center" style="color:red; margin-top: 4%">No record found</h3>
 <?php }?>
 
 <div class="form-group col-md-12" align="center" style="justify-content:left;text-align:left;">                                         
 <a href="add-tasks.php" type="submit" class="btn btn-primary" name="add" style="margin-left:20px;">Add Tasks</a>
</div>
         
            

            <!--information area are start-->
           <?php include_once('includes/footer.php');?>
            <!--footer area are start-->
         </div>   
        <!--body-wraper-are-end-->
        
        <!--==== all js here====-->
        <!-- jquery latest version -->
        <script src="js/vendor/jquery-3.1.1.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- Nivo js -->
        <script src="js/nivo-slider/jquery.nivo.slider.pack.js"></script>
        <script src="js/nivo-slider/nivo-active.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- Vedio js -->
        <script src="js/video.js"></script>
        <!-- Youtube Background JS -->
        <script src="js/jquery.mb.YTPlayer.min.js"></script>
        <!-- datepicker js -->
        <script src="js/bootstrap-datepicker.js"></script>
        <!-- waypoint js -->
        <script src="js/waypoints.min.js"></script>
        <!-- onepage nav js -->
        <script src="js/jquery.nav.js"></script>
        <!-- animate text JS -->
        <script src="js/animate-text.js"></script>
        <!-- plugins js -->
        <script src="js/plugins.js"></script>
        <!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>


            <!--information area are start-->
        <?php include_once('includes/footer.php');?>
            <!--footer area are start-->            
         </div>   
        <!--body-wraper-are-end-->
		
		<!--==== all js here====-->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-3.1.1.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- Nivo js -->
        <script src="js/nivo-slider/jquery.nivo.slider.pack.js"></script>
        <script src="js/nivo-slider/nivo-active.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- Youtube Background JS -->
        <script src="js/jquery.mb.YTPlayer.min.js"></script>
		<!-- datepicker js -->
        <script src="js/bootstrap-datepicker.js"></script>
		<!-- waypoint js -->
        <script src="js/waypoints.min.js"></script>
		<!-- onepage nav js -->
        <script src="js/jquery.nav.js"></script>
        <!-- animate text JS -->
        <script src="js/animate-text.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
        <!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>
