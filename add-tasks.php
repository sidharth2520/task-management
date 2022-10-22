<?php
session_start();
error_reporting(0);
include('includes/config.php');
$eid=intval($_GET['evntid']);
if(strlen($_SESSION['adminsession'])==1)
{   
header('location:logout.php');
}
else{ 
if(isset($_POST['add']))
  {
$cat=$_POST['task'];
$decrption=$_POST['description'];
$priority=$_POST['priority'];
$status=1;
$sql="INSERT INTO tblevents(EventName,EventDescription,IsActive,EventLocation,id) VALUES(:cat,:decrption,:status, :priority,:eid)";
$query = $dbh->prepare($sql);
$query->bindParam(':cat',$cat,PDO::PARAM_STR);
$query->bindParam(':decrption',$decrption,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':priority',$priority,PDO::PARAM_STR);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Task added successfully.";
}
else 
{
$error="Something went wrong. Please try again";  
}
}
}    
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Task Management</title>
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
    <body style="width:100%;">
        <!--body-wraper-are-start-->
         <div class="wrapper home-02" style="margin-top:100px;">
         
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
                        <li class="active">Add Tasks</li>
                    </ol>
                </div>
            </div> 
            <!--  breadcumb-area end--> 
<?php ?>
<div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Tasks
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<form role="form" method="post" >
<!-- Success / Error Message -->
 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong> : <?php echo htmlentities($error); ?> </div><?php } 
else if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?> 

<!--Category Name -->
<div class="form-group">
<label>Task Name</label>
<input class="form-control" type="text" name="category" autocomplete="off" required autofocus>
</div>
<!--New Pasword -->
<div class="form-group">
<label>Description</label>
<textarea class="form-control" name="description" autofocus required></textarea>
</div>

<div class="form-group">
<label>Priority : values can take the form (High, Mid, Low)</label>
<textarea class="form-control" name="priority" autofocus required></textarea>
</div>


<!--Button -->  
<div class="form-group" align="center">                     
<button type="submit" class="btn btn-primary" name="add">Submit</button>
</div>

<!--<a href="event_details.php?evntid=<?php echo htmlentities($row->id);?>"><div class="form-group" align="left">                     
<button type="button" class="btn btn-primary" name="back">Go back</button> -->
</div> 
                                    </form>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<!--information area are start-->
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