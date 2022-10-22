<?php
session_start();
//datbase connection file
include('includes/config.php');
error_reporting(0);
// Code for Email Subscription

    ?>
	
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Task Management System | Home Page </title>
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
         <div class="wrapper home-02">
         
            <!--slider header area start-->
         <?php include_once('includes/header.php');?>
                <!-- header End-->
                <!--slider area are start-->
                <div class="slider-container slider-02 bg-overlay">
				<div id="mainSlider" class="nivoSlider slider-image"> 
                        <img src=""img/" alt="event-management-system" title="#htmlcaption1" height="50" /> 
                    </div>
                </div>
                <div class="down-arrow"> <a class="see-demo-btn" href="#about-event"><i class="zmdi zmdi-long-arrow-down"></i></a> </div>
            </div>
            <!--slider header area end-->
       <!-- Slider Caption 1 -->
                    <div id="htmlcaption1" class="nivo-html-caption slider-caption-1" >
                        <div class="container">
                            <div class="slide1-text">
                                <div class="middle-text slide-def">
                                    <div class="cap-dec wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.2s" style="margin-top:-0px">
                                        <h1 align="center">Task Management System</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div id="htmlcaption1" class="nivo-html-caption slider-caption-1" >
                        <div class="container">
                            <div class="slide1-text">
                                <div class="middle-text slide-def">
                                    <div class="cap-dec wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.2s" style="margin-top:-50px">
                                        <h1 align="center"></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div
                 <!--Remaining Tasks area-->
            <div class="upcomming-events-area off-white ptb100">
                  <div class="container">
                      <div class="row">
                          <div class="col-xs-12">
                           <h1 class="section-title">Project Dashboard</h1>
                        </div>
                          <div class="total-upcomming-event col-md-12 col-sm-12 col-xs-12">

<?php
// Fetching Remaining Projects

$isactive=1;
$sql = "SELECT proj_name,p_priority,id from tblprojects where IsActive=:isactive order by id desc limit 5";
$query = $dbh -> prepare($sql);
$query->bindParam(':isactive',$isactive,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
echo "";
if($query->rowCount() > 0)
{
foreach($results as $row)
{ 
    ?>

                              <div class="single-upcomming shadow-box">
                                
                                 <div class="col-md-3 col-sm-5 col-xs-12">
                                    <div class="uc-event-title">
                                        <div class="uc-icon"><i class="zmdi zmdi-globe-alt"></i></div>
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
 <a href="event-details.php?evntid=<?php echo htmlentities($row->id);?>" class="btn-def bnt-2 small">View Details</a>
                                     </div>
                                 </div>
                              </div>
 <?php } } ?>                        
                             
                            
                          </div>
                      </div>
                  </div>
              </div>       

<!--Button -->  
<div class="form-group col-md-12" align="center" style="justify-content:left;text-align:left;">                                         
<a href="add-project.php" type="submit" class="btn btn-primary" name="add" style="margin-left:20px;">Add Projects</a>
</div>
         
            

            <?php include_once('includes/footer.php');?>
            <!--footer area are start-->
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