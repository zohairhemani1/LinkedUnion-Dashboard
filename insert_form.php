<?php 
include 'headers/checkloginstatus.php'; 
include 'headers/connect_to_mysql.php';
include 'headers/_user-details.php';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from thevectorlab.net/adminlab/form_component.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 04 Nov 2014 07:57:43 GMT -->
<head>   <meta charset="utf-8" />
   <title>Form Components</title>
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
   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />    
   <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />   
   <link rel="stylesheet" type="text/css" href="css/custom.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
   <link rel="stylesheet" type="text/css" href="css/highlight.css" />
   <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<?php
include 'headers/menu-top-navigation.php'; 
?>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">

                   <!-- END THEME CUSTOMIZER-->
                  <h3 class="page-title">
                     Insert News
                     <small>Insert News page</small>
                  </h3>
                   <ul class="breadcrumb">
                        <li>
                           <a href="index.php"><i class="icon-home"></i></a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Insert News</a><span class="divider-last">&nbsp;</span>
                       </li>
                       
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN SAMPLE FORM widget-->   
                  <div class="widget">
                     <div class="widget-title">
                        <h4><i class="icon-reorder"></i>Sample Form</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                        </span>
                     </div>
                     <div class="widget-body form">
                        <!-- BEGIN FORM-->
                        <form action="insert_form.php" class="form-horizontal">
                           <div class="control-group">
                              <label class="control-label">News</label>
                              <div class="controls">
                                 <input type="text" class="span12 " />
                                 
                              </div>
                           </div>
                              <div class="control-group">
                              <label class="control-label">Description</label>
                              <div class="controls">
                                 <textarea class="span12 wysihtml5" rows="6"></textarea>
                              </div>
                           </div>
                              <div class="control-group">
                                  <label class="control-label">Social</label>
                                  <div class="controls">
                          <div class="onoffswitch">
                    <input type="checkbox" name="social"  class="onoffswitch-checkbox" id="myonoffswitch">
                    <label class="onoffswitch-label" for="myonoffswitch"> 
                    <span onClick="Toggle();" id="displaytext" class="onoffswitch-inner"></span>
                    <span onClick="Toggle();" id="displaytext" class="onoffswitch-switch"></span> 
                    </label>
                    </div>
                    </div>
                    </div>
                        <div class="controls">
                        
                    <div id="toggletext" style=" display:none">
                    <div class="row-fluid">
                             <div class="span8">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Social Icon</h4>
                                </div>
                                <div class="widget-body">
                               <div class="control-group">
                      <label class="control-label">Facebook</label>
                              <div class="controls">
                          <div class="input-icon left"> <i class="icon-facebook"></i>
                          <input name="" placeholder="www.Facebook.com" type="text" 
                          class="span12" value="" />
                      </div>
                      </div>
                      </div>
                       <div class="control-group">
                      <label class="control-label">Twitter</label>
                              <div class="controls">
                          <div class="input-icon left"> <i class="icon-twitter"></i>
                          <input name="" placeholder="www.Twitter.com" type="text" 
                          class="span12" value="" />
                      </div>
                      </div>
                      </div>
                      <div class="control-group">
                      <label class="control-label">Pinterest</label>
                              <div class="controls">
                          <div class="input-icon left"> <i class="icon-pinterest"></i>
                          <input name="" placeholder="www.Pinterest.com" type="text" 
                          class="span12" value="" />
                      </div>
                      </div>
                      </div>
                       <div class="control-group">
                      <label class="control-label">Google</label>
                              <div class="controls">
                          <div class="input-icon left"> <i class="icon-google-plus"></i>
                          <input name="" placeholder="www.Google++.com" type="text" 
                          class="span12" value="" />
                      </div>
                      </div>
                      </div>
                    
                    </div>
                    </div>
                            </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Notification</label>
                    <div class="controls">            
                        <div class="pushNotification">
                        <input type="checkbox" name="social" class="pushNotification-checkbox" id="mypushNotification" >
                        <label class="pushNotification-label" for="mypushNotification">
                        <span onClick="toggle();" id="DisplayText" class="pushNotification-inner"></span>
                        <span onClick="toggle();" id="DisplayText" class="pushNotification-switch"></span> 
                        </label>
                        </div> 
                        </div>
                              <div class="controls">
                                <div id="ToggleText" style=" display:none">
                            <div class="row-fluid">
                             <div class="span8">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Social Icon</h4>
                                </div>
                                <div class="widget-body">
						<div class="control-group">
                      <label class="control-label">Message</label>
                      <div class="controls">
                                 <input placeholder="Type your message" type="text" class="span11 " />
                                </div></div>
                                </div>
                             </div> 
                            </div>
                          </div>
                       </div>
                          </div>
                              </div>
	                         <div class="control-group">
                      <label class="control-label">Publish</label>
                    <div class="controls">            
                        <div class="publish">
                        <input type="checkbox" name="" class="publish-checkbox" id="mypublish" >
                        <label class="publish-label" for="mypublish">
                        <span class="publish-inner"></span>
                        <span class="publish-switch"></span> 
                        </label>
                        </div> 
                        </div>
                        </div>
   			<div class="form-actions clearfix">
				<input type="submit"  class="btn btn-success " />
                   </div>
                              </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END EXTRAS widget-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
  <?php  
	include 'headers/footer.php';
	?>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->

   </script>
   <script src="js/jquery-1.8.2.min.js"></script>    
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>   
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>
   <script>
function toggle() {
	var ele = document.getElementById("ToggleText");
	var text = document.getElementById("DisplayText");
	if(ele.style.display == "block") {
 		ele.style.display = "none";
  	}
	else {
		ele.style.display = "block";
	}
} 
</script>
<script>
function Toggle() {
	var ele = document.getElementById("toggletext");
	var text = document.getElementById("displaytext");
 	if(ele.style.display == "block") {
 		ele.style.display = "none";
 
  	}
	else {
		ele.style.display = "block";
	}
} 
</script>


   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->

<!-- Mirrored from thevectorlab.net/adminlab/form_component.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 04 Nov 2014 07:58:52 GMT -->
</html>

