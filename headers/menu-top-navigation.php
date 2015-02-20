<?php


$query = "SELECT id,name FROM `categories` WHERE `app_id` = 1";
$sth = $dbh->prepare("SELECT name, colour FROM fruit");
$sth->execute();




echo "<!-- BEGIN HEADER -->
   <div id='header' class='navbar navbar-inverse navbar-fixed-top'>
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class='navbar-inner'>
           <div class='container-fluid'>
               <!-- BEGIN LOGO -->
               <a class='brand' href='index.php'>
                   <img src='img/logo/{$logo}' alt='Admin Lab' />
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class='btn btn-navbar collapsed' id='main_menu_trigger' data-toggle='collapse' data-target='.nav-collapse'>
                   <span class='icon-bar'></span>
                   <span class='icon-bar'></span>
                   <span class='icon-bar'></span>
                   <span class='arrow'></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <div id='top_menu' class='nav notify-row'>
                   <!-- BEGIN NOTIFICATION -->
                   <ul class='nav top-menu'>
                       
                       <!-- BEGIN NOTIFICATION DROPDOWN -->
                       <li class='dropdown' id='header_notification_bar'>
                           <a href='#' class='dropdown-toggle' data-toggle='dropdown'>

                               <i class='icon-bell-alt'></i>
                               
                           </a>
                           <ul class='dropdown-menu extended notification'>
                               <li>
                                   <p>You have 1 new notifications</p>
                               </li>
                               <li>
                                   <a href='#'>
                                       <span class='label label-important'><i class='icon-bolt'></i></span>
                                       Welcome To {$username_allcaps} Portal              
                                   </a>
                               </li>
                               
                               <li>
                                   <a href='#'>See all notifications</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END NOTIFICATION DROPDOWN -->

                   </ul>
               </div>
               <!-- END  NOTIFICATION -->
               <div class='top-nav '>
                   <ul class='nav pull-right top-menu' >
                       <!-- BEGIN SUPPORT -->
                     
                       <li class='dropdown mtop5'>
                           <a class='dropdown-toggle element' data-placement='bottom' data-toggle='tooltip' href='#' data-original-title='Help'>
                               <i class='icon-headphones'></i>
                           </a>
                       </li>
                       <!-- END SUPPORT -->
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class='dropdown'>
                           <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                               <img src='img/image/{$image}' alt='' id='profilePic'>
                                             
                               <span class='username'>{$username_allcaps}</span>
                               <b class='caret'></b>
                           </a>
                           <ul class='dropdown-menu'>
                               <li><a href='invoice.php'><i class='icon-file'></i> Invoice</a></li>
                               <li><a href='password.php'><i class='icon-asterisk'></i> Password</a></li>
                               <li class='divider'></li>
                               <li><a href='login.php?logout=true'><i class='icon-key'></i> Log Out</a></li>
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
   <!-- END HEADER -->";
	
	 
		 /* SIDEBAR CODE BELOW */
		 
		 /* getting categories and subcategories from database according to the app_id logged in user*/
		 
		
		 
		$query = "SELECT id,name,(select count(*) from `subcategories` sc where sc.menu_id = c.id) as count FROM `categories` c WHERE `app_id` = 1";
		$sth = $dbh->prepare($query);
		$sth->execute();
		echo "<div id='container' class='row-fluid'>
				  <!-- BEGIN SIDEBAR -->
				  <div id='sidebar' class='nav-collapse collapse'>
				  <div class='sidebar-toggler hidden-phone'></div>   
				  <!-- BEGIN SIDEBAR MENU -->
				  <ul class='sidebar-menu'>";
				
		while($row = $sth->fetch(PDO::FETCH_ASSOC))
		{
			$category = $row['name'];
			$id = $row['id'];
			echo "<li class='has-sub'>";
						/* Below code decides whether to put an arrow or now */
						
						if(($row['count'])>0)
						{
							echo "<a class='' href='javascript:;'>
							<span class='icon-box'><i class='icon-cogs'></i>
							</span> {$category}
							<span class='arrow'>";
						}
						else
						{
							echo "<a class='' href='news.php?category_id={$id}'>
							<span class='icon-box'><i class='icon-cogs'></i>
							</span> {$category}
							<span class=''>
							";
						}
						/* End of arrow logic */
						
						
						echo "</span>
					</a>";
			$query_subcategories = "SELECT sc.* from `subcategories` sc, `categories` c where c.`id` = sc.`menu_id` AND sc.menu_id = {$id}";
			$sth_subcategories = $dbh->prepare($query_subcategories);
			$sth_subcategories->execute();
			echo "<ul class='sub'>";
			while($row_subcategory = $sth_subcategories->fetch(PDO::FETCH_ASSOC))
			{
				$subcategory_id = $row_subcategory['submenu_id'];
				$subcategory = $row_subcategory['name'] . "<br/>";
				echo "<li><a class='' href='news.php?category_id={$subcategory_id}'>{$subcategory}</a></li>";
			}
				echo "</ul></li>";
		}

		 echo "</ul></div>";
	  
?>
