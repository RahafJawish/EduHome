<!DOCTYPE html>
<html lang="en">
  <head>
  	
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E_School Admin panel</title>
 
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>adminFiles/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>adminFiles/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>adminFiles/build/css/custom.min.css" rel="stylesheet">  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>adminFiles/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

    <!-- iCheck -->
    <link href="<?php echo base_url();?>adminFiles/vendors/iCheck/skins/flat/green.css" rel="stylesheet">    
    <!-- datatables -->
    <link href="<?php echo base_url();?>adminFiles/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- select2 -->
    <link href="<?php echo base_url();?>adminFiles/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    
  </head>
    <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              
              <a href="<?php echo base_url();?>admin/dashboard" class="site_title"><i class="fa fa-paw"></i> <span>E_School Admin Panel!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url();?>/img/default.PNG" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('name');?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Navigation</h3>
                <ul class="nav side-menu">
                  <li class="active"><a href="<?php echo base_url();?>index.php/admin/dashboard"><i class="fa fa-home"></i> Dashboard </a></li>
                  <li><a><i class="fa fa-edit"></i>Menu Manager<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>index.php/admin/menu/index">All Menus</a></li>
                      <?php if(count($menus)): foreach($menus as $menu): ?>
                       	 <!--  <li><a href="<?php echo base_url();?>index.php/admin/menu/menu_items">Menu Items</a></li>-->
	                       <li><a><?php echo $menu->title ?><span class="fa fa-chevron-down"></span></a>
	                    	 <ul class="nav child_menu">
	                    	 	<li><a href="<?php echo base_url("index.php/admin/menu_items/index/".$menu->id_menu);?>">Manage items</a></li>
	                    	 </ul>
	                       </li>
                       <?php endforeach; ?>
                       <?php endif; ?>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Content Manager<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>index.php/admin/category">Categories</a></li>
                      <li><a href="<?php echo base_url();?>index.php/admin/item">Items</a></li>
                    </ul>
                  </li> 
             <!--    <li><a href="<?php echo base_url();?>/admin/page"><i class="fa fa-home"></i> Pages <span class="fa fa-chevron-down"></span></a> </li>-->
                  <li><a href="<?php echo base_url();?>index.php/admin/languages"><i class="fa fa-home"></i> Languages </a></li>
                  </li>

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a href="<?php echo base_url();?>index.php/admin/user/logout>" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url();?>/img/default.PNG" alt=""><?php echo $this->session->userdata('name');?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo base_url();?>admin/user/logout"><i class="fa fa-sign-out pull-right"></i>Log Out</a></li>
                  </ul>
                </li>
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url()?>img/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span><?php echo $this->session->userdata('name');?></span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url()?>img/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url()?>img/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url()?>img/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        
        