<?php

include 'headers/checkloginstatus.php'; 
include 'headers/connect_to_mysql.php';
include 'headers/session.php';
include 'headers/_user-details.php';

$categoryID = $_GET['categoryID'];

$query = "SELECT w.name FROM `webservice_category` wc, `webservices` w WHERE wc.`category` like '{$categoryID}' AND wc.webservice = w.id";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$fileName = $row['name'];

if(isset($fileName))
{
	header("Location: {$fileName}?categoryID={$categoryID}");
}



?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from thevectorlab.net/adminlab/blank.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 04 Nov 2014 07:58:59 GMT -->

<head>
<meta charset="utf-8" />
<title>Dashboard</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="css/custom.css" rel="stylesheet" />
<link href="css/style_responsive.css" rel="stylesheet" />
<link href="css/style_default.css" rel="stylesheet" id="style_color" />
<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
<link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />


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
        <h3 class="page-title"> Dashboard </h3>
        <ul class="breadcrumb">
          <li> <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
          <li> <a href="#">Muhammad Zohair></a> <span class="divider-last">&nbsp;</span> </li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB--> 
      </div>
    </div>
    <!-- END PAGE HEADER--> 
    <!-- BEGIN PAGE CONTENT-->
    <!-- <div class="row-fluid">
      <div class="span12"> 
        <!-- BEGIN RECENT ORDERS PORTLET
        <div class="widget">
          <div class="widget-title">
            <h4><i class="icon-tags"></i> <?php echo $username_allcaps; ?> Notification</h4>
            <span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
          <div class="widget-body">
          <div class="alert alert-success">
                                        <button class="close" data-dismiss="alert">×</button>
                                        <strong>Welcome to <?php echo $username_allcaps; ?> Mobile Application Portal</strong> 
                                    </div>

          
           </div>
        </div>
      </div>
    </div> -->
    <div class="row-fluid">
      <div class="span12"> 
        <!-- BEGIN RECENT ORDERS PORTLET-->
        <div class="widget">
          <div class="widget-title">
          
          <?php 
		  
		  $query = "select name from (select c.name ,c.id from `categories` c union select sc.name,sc.submenu_id from `subcategories` sc) `dd` where id ={$categoryID}";
		  $sth = $dbh->prepare($query);
		  $sth->execute();
		  $row = $sth->fetch(PDO::FETCH_ASSOC);
		  $name = $row['name'];
		  
		  
		  ?>
          
            <h4><i class="icon-tags"></i> <?php echo $name; ?> Articles</h4>
            <span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a></span> </div>
          <div class="widget-body">
            
            <table class="table table-striped table-bordered table-advance table-hover">
              <thead>
                <tr>
                  <th width="10%"><i class="icon-leaf"></i> <span class="hidden-phone">S No</span></th>
                  <th width="55%"><i class="icon-user"></i> <span class="hidden-phone ">Task</span></th>
                  <th width="10%"><i class="icon-tags"> </i><span class="hidden-phone">Status</span></th>
                  <th width="10%"><i class="icon-tags"> </i><span class="hidden-phone">Status</span></th>
                  <th width="10%"><i class="icon-tags"> </i><span class="hidden-phone">Status</span></th>
                  <th width="5%">Status</span></th>
                </tr>
              </thead>
              <tbody>
              
              <?php
			  	
				$category_id = $_GET['categoryID'];
				//if ((int) $category_id == $category_id) 
				//{
					
					$query = "SELECT n.* from `news` n where category = {$category_id}";
					$sth = $dbh->prepare($query);
					$sth->execute();
					$count = 0;
					while($row = $sth->fetch(PDO::FETCH_ASSOC))
					{
						$news_id = $row['news_id'];
						$count++;
						$published = "Unpublished";
						if($row['published']==1)
							$published = "Published";
							
						 echo "<tr>
								  <td class='highlight'><a href='#'>{$count}</a></td>
								  <td><a href='institutionDetail.php'>{$row['title']}</a></td>
								  <td><span class='label label-warning label-mini'>{$published}</span></td>
								  <td><a href='view.php?news_id={$news_id}' class='btn btn-mini'>View</a></td>
								  <td><a href='update.php' class='btn btn-mini'>Update</a></td>
								  <td><a href='delete.php' class='btn btn-mini'>Delete</a></td>
							  </tr>";
					}
					
					
				//}
				

				
			  ?>
              
              
                <!-- <tr>
                  <td class="highlight"><a href="#">1</a></td>
                  <td><a href="institutionDetail.php">Filling out Institution Information</a></td>
                  <td>
                    <a href="institutionDetail.php" class="btn btn-mini visible-phone hidden-tablet">View</a></td>
                <td><a href="institutionDetail.php" class="btn btn-mini">View</a></td>
                </tr> -->
              </tbody>
            </table>
            <div class="space7"></div>
          </div>
        </div>
        <!-- END RECENT ORDERS PORTLET--> 
      </div>
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
<div id="footer"> <a href ="https://www.facebook.com/avialdo.inc">2014-15 &copy; LinkedUnion</a>
  <div class="span pull-right"> <span class="go-top"><i class="icon-arrow-up"></i></span> </div>
</div>
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
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
   <script src="js/scripts.js"></script>

   <script src="js/table-editable.js"></script>

   <script>
       jQuery(document).ready(function() {
           App.init();
           TableEditable.init();
       });
   </script>
</body>
<!-- END BODY -->

<!-- Mirrored from thevectorlab.net/adminlab/blank.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 04 Nov 2014 07:58:59 GMT -->
</html>