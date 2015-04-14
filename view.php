<?php
		include 'headers/connect_to_mysql.php';
		$news_id = $_GET['news_id'];
		$query_select = "SELECT * FROM news WHERE news_id = '$news_id'"
		or die ('error while fething news');
		$result  = mysqli_query($con,$query_select);
		$row = mysqli_fetch_array($result);
		$title = $row['title'];
		$description = $row['description'];
		$time_cone = $row['time_cone'];
		$facebook = $row['facebook'];
		$twitter  = $row['twitter'];
		$google = $row['google'];
		$pinterest = $row['pinterest'];
		$social = $row['social'];
	if(isset['mobilemode'] == 'true')
			{
		echo "success";	
			
		}
		else
		{
			echo"error";
		}	
		
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from thevectorlab.net/adminlab/news_details.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 04 Nov 2014 08:04:57 GMT -->
<head>
   <meta charset="utf-8" />
   <title>View</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style_responsive.css" rel="stylesheet" />
   <link href="css/style_default.css" rel="stylesheet" id="style_color" />
<link href="css/custom.css" rel="stylesheet" />
   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

   </head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<?php
include 'headers/menu-top-navigation.php'; 
?>
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">

                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     View Page
                     
                  </h3>
                   <ul class="breadcrumb">
                        <li>
                           <a href="index.php"><i class="icon-home"></i></a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">View</a><span class="divider-last">&nbsp;</span>
                       </li>
                                 
                                          </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-edit"></i> News Details</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>                    
                        </div>
                        <div class="widget-body">
					<div class="btn-group" >
				<a href="emulator.php?news_id=<?php echo $news_id;?>&mobilemode=true"><button id="addbutton" type="button" onClick="mobilemode();" class="btn btn-primary"> Enable Mobile Mode <i class="icon-plus"></i> </button></a>
				</div><br><br>
							<div class="row-fluid blog">

                                <div class="span12">
                                    <h2>
                                       <?php echo $title; ?>
                                    </h2>
                                    <br>

                                    <div class="row-fluid">
                                        <div class="span6">
                                            <ul>
                                                <li><?php echo $time_cone; ?></li>
                                            </ul>

                                        </div>
                                        <div class="span6">
                                            <ul class="show-right" style=" <?php if($social == null){echo "display:none";} ?>">
                                                <li><a href="<?php echo $facebook; ?>"><i class="icon-facebook"></i> Facebook</a></li>
                                                <li><a href="<?php echo $twitter; ?>"><i class="icon-twitter"></i> Twitter</a></li>
                                                <li><a href="<?php echo $google; ?>"><i class="icon-google-plus"></i> Goolge Plus</a></li>
                                                <li><a href="<?php echo $pinterest; ?>"><i class="icon-pinterest"></i> Pinterest</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                   
                                        <div class="View_box">
                                           <?php echo $description; ?>
                                        </div>
                                        
                                 <!--end post comments-->
                                </div>
                                </div></div>
                            </div>

                        </div>
                  </div>
               </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      
      <!-- END PAGE -->  
  
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
 <?php  
	include 'headers/footer.php';
	?>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>
    <script>
  function mobilemode(){ 
	var ele = document.getElementById("addbutton");
	ele.style.display = "none";
  }
</script>

   <!-- END JAVASCRIPTS -->   
</div>
   </body>

<!-- END BODY -->

<!-- Mirrored from thevectorlab.net/adminlab/news_details.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 04 Nov 2014 08:04:58 GMT -->
</html>
