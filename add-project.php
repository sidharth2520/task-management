<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['adminsession'])==1)
{   
header('location:logout.php');
}
else{ 
if(isset($_POST['add']))
  {
	  try{
$cat=$_POST['category'];
$decrption=$_POST['description'];
$status=1;
$pj_prio=$_POST['proj_priority'];
$sql="INSERT INTO tblprojects(proj_name,proj_desc,IsActive, p_priority) VALUES(:cat,:decrption,:status, :pj_prio)"; 
$query = $dbh->prepare($sql);
$query->bindParam(':cat',$cat,PDO::PARAM_STR);
$query->bindParam(':decrption',$decrption,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':pj_prio',$pj_prio,PDO::PARAM_STR); 
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
}catch(Exception $e) {
    echo 'Exception -> ';
    var_dump($e->getMessage());
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
                        <li class="active">Add Projects</li>
                    </ol>
                </div>
            </div> 
            <!--  breadcumb-area end--> 
<?php ?>
<div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Projects
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<form role="form" method="post" >
<!-- Success / Error Message -->
 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong> : <?php echo htmlentities($error); ?> </div><?php } 
else if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?> 

<!--Task Name -->
<div class="form-group">
<label>Project Name</label>
<input class="form-control" type="text" name="category" autocomplete="off" required autofocus>
</div>
<!--Task Description -->
<div class="form-group">
<label>Description</label>
<textarea class="form-control" name="description" autofocus required></textarea>
</div>


<div class="form-group">
<label>Priority : values can take the form (High, Mid, Low)</label>
<textarea class="form-control" name="proj_priority" autofocus required></textarea>
</div> -->

<!--Button -->  
<div class="form-group" align="center">                     
<button type="submit" class="btn btn-primary" name="add">Add</button>
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
        
       
    </body>
</html>