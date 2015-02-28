
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
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!-- BEGIN LOGO -->
               <a class="brand" href="index-2.html">
                   <img src="img/logo.png" alt="Admin Lab" />
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <div id="top_menu" class="nav notify-row">
                   <!-- BEGIN NOTIFICATION -->
                   <ul class="nav top-menu">
                       <!-- BEGIN SETTINGS -->
                       <li class="dropdown">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Settings">
                               <i class="icon-cog"></i>
                           </a>
                       </li>
                       <!-- END SETTINGS -->
                       <!-- BEGIN INBOX DROPDOWN -->
                       <li class="dropdown" id="header_inbox_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-envelope-alt"></i>
                               <span class="badge badge-important">5</span>
                           </a>
                           <ul class="dropdown-menu extended inbox">
                               <li>
                                   <p>You have 5 new messages</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Rafiqul Islam</span>
									<span class="time">10 mins</span>
									</span>
									<span class="message">
									 Hi, Mosaddek Bhai how are you ?
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Sumon Ahmed</span>
									<span class="time">3 hrs</span>
									</span>
									<span class="message">
									    This is awesome dashboard templates
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">See all messages</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END INBOX DROPDOWN -->
                       <!-- BEGIN NOTIFICATION DROPDOWN -->
                       <li class="dropdown" id="header_notification_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                               <i class="icon-bell-alt"></i>
                               <span class="badge badge-warning">7</span>
                           </a>
                           <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>You have 7 new notifications</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Server #3 overloaded.
                                       <span class="small italic">34 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-warning"><i class="icon-bell"></i></span>
                                       Server #10 not respoding.
                                       <span class="small italic">1 Hours</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Database overloaded 24%.
                                       <span class="small italic">4 hrs</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-success"><i class="icon-plus"></i></span>
                                       New user registered.
                                       <span class="small italic">Just now</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                       Application error.
                                       <span class="small italic">10 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">See all notifications</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END NOTIFICATION DROPDOWN -->

                   </ul>
               </div>
               <!-- END  NOTIFICATION -->
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       <!-- BEGIN SUPPORT -->
                       <li class="dropdown mtop5">

                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                               <i class="icon-comments-alt"></i>
                           </a>
                       </li>
                       <li class="dropdown mtop5">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                               <i class="icon-headphones"></i>
                           </a>
                       </li>
                       <!-- END SUPPORT -->
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="img/avatar1_small.jpg" alt="">
                               <span class="username">Mosaddek Hossain</span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu">
                               <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                               <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                               <li><a href="#"><i class="icon-calendar"></i> Calendar</a></li>
                               <li class="divider"></li>
                               <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">

         <div class="sidebar-toggler hidden-phone"></div>   

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-dashboard"></i></span> Dashboard
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="index-2.html">Dashboard 1</a></li>
                      <li><a class="" href="index_2.html">Dashboard 2</a></li>

                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-book"></i></span> UI Elements
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="ui_elements_general.html">General</a></li>
                      <li><a class="" href="ui_elements_buttons.html">Buttons</a></li>
                      <li><a class="" href="jquery_ui.html">jQuery UI Component</a></li>
                      <li><a class="" href="ui_elements_tabs_accordions.html">Tabs & Accordions</a></li>
                      <li><a class="" href="ui_elements_typography.html">Typography</a></li>
                      <li><a class="" href="tree_view.html">Tree View</a></li>
                      <li><a class="" href="nestable.html">Nestable List</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-cogs"></i></span> Components
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="calendar.html">Calendar</a></li>
                      <li><a class="" href="grids.html">Grids</a></li>
                      <li><a class="" href="charts.html">Visual Charts</a></li>
                      <li><a class="" href="messengers.html">Conversations</a></li>
                      <li><a class="" href="gallery.html"> Gallery</a></li>
                  </ul>
              </li>
              <li class="has-sub active">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-tasks"></i></span> Form Stuff
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="form_layout.html">Form Layouts</a></li>
                      <li class="active"><a class="" href="form_component.html">Form Components</a></li>
                      <li><a class="" href="form_wizard.html">Form Wizard</a></li>
                      <li><a class="" href="form_validation.html">Form Validation</a></li>
                      <li><a class="" href="dropzone.html">Dropzone File Upload </a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-th"></i></span> Data Tables
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="basic_table.html">Basic Table</a></li>
                      <li><a class="" href="managed_table.html">Managed Table</a></li>
                      <li><a class="" href="editable_table.html">Editable Table</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class=" icon-qrcode"></i></span> Portlets
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="general_portlet.html">General Portlets</a></li>
                      <li><a class="" href="draggable_portlet.html">Draggable Portlets</a></li>
                  </ul>
              </li>

              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-fire"></i></span> Icons
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="font_awesome.html">Font Awesome</a></li>
                      <li><a class="" href="glyphicons.html">Glyphicons</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-map-marker"></i></span> Maps
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="maps_google.html"> Google Maps</a></li>
                      <li><a class="" href="maps_vector.html"> Vector Maps</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-file-alt"></i></span> Sample Pages
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="blank.html">Blank Page</a></li>
                      <li><a class="" href="sidebar_closed.html">Sidebar Closed Page</a></li>
                      <li><a class="" href="coming_soon.html">Coming Soon</a></li>
                      <li><a class="" href="blog.html">Blog</a></li>
                      <li><a class="" href="news.html">News</a></li>
                      <li><a class="" href="about_us.html">About Us</a></li>
                      <li><a class="" href="contact_us.html">Contact Us</a></li>
                      <li><a class="" href="email_templates.html">Email Templates</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-glass"></i></span> Extra
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="lock.html">Lock Screen</a></li>
                      <li><a class="" href="profile.html">Profile</a></li>
                      <li><a class="" href="invoice.html">Invoice</a></li>
                      <li><a class="" href="pricing_tables.html">Pricing Tables</a></li>
                      <li><a class="" href="inbox.html">Inbox</a></li>
                      <li><a class="" href="search_result.html">Search Result</a></li>
                      <li><a class="" href="faq.html">FAQ</a></li>
                      <li><a class="" href="404.html">404 Error</a></li>
                      <li><a class="" href="500.html">500 Error</a></li>
                  </ul>
              </li>
              <li><a class="" href="login.html"><span class="icon-box"><i class="icon-user"></i></span> Login Page</a></li>
          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-navy-blue" data-style="navy-blue"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <h3 class="page-title">
                     Form Components
                     <small>form components and widgets</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Form Stuff</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Form Components</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
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
                                 <input type="text" class="span6 " />
                                 
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
                    <ul class="social-icon">
                    <div class="control-group">
                      <label class="control-label">Facebook</label>
                              <div class="controls">
                          <div class="input-icon left"> <i class="icon-facebook"></i>
                          <input name="" placeholder="www.Facebook.com" type="text" 
                          class="input-large" value="" />
                      </div>
                      </div>
                      </div>
                       <div class="control-group">
                      <label class="control-label">Twitter</label>
                              <div class="controls">
                          <div class="input-icon left"> <i class="icon-twitter"></i>
                          <input name="" placeholder="www.Twitter.com" type="text" 
                          class="input-large" value="" />
                      </div>
                      </div>
                      </div>
                      <div class="control-group">
                      <label class="control-label">Pinterest</label>
                              <div class="controls">
                          <div class="input-icon left"> <i class="icon-pinterest"></i>
                          <input name="" placeholder="www.Pinterest.com" type="text" 
                          class="input-large" value="" />
                      </div>
                      </div>
                      </div>
                       <div class="control-group">
                      <label class="control-label">Google</label>
                              <div class="controls">
                          <div class="input-icon left"> <i class="icon-google-plus"></i>
                          <input name="" placeholder="www.Google++.com" type="text" 
                          class="input-large" value="" />
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
                                 <input type="text" class="span6 " />
                                </div>
                                </div> 
                                </div>
                             <div class="control-group">
                      <label class="control-label">Publish</label>
                    <div class="controls">            
                        <div class="publish">
                        <input type="checkbox" name="" class="publish-checkbox" id="mypublish" >
                        <label class="publish-label" for="mypublish">
                        <span onClick="Toogles();" id="hideText" class="publish-inner"></span>
                        <span onClick="Toogles();" id="hideText" class="publish-switch"></span> 
                        </label>
                        </div> 
                        </div>
                              <div class="controls">
                                <div id="showText" style=" display:none">
                                 <input type="text" class="span6 " />
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
   <div id="footer">
       2013 &copy; Admin Lab Dashboard.
      <div class="span pull-right">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div>
   </div>
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
<script>
function Toogles() {
	var ele = document.getElementById("showText");
	var text = document.getElementById("hideText");
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

