<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cloud App | <?php echo $title;?></title>
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>img/calendar-ico.png" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url();?>css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url();?>css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>js/lib/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	
	
	
  <body class="skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">Cloud</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Cloud App</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<?php if($userDetails->profile == ''){ ?>
                    	<img src="<?php echo base_url();?>img/user2-160x160.jpg" class="user-image" alt="User Image" />
				<?php }else{ ?>
                    	<img src="<?php echo base_url();?>upload/profile/thumb_<?php echo $userDetails->profile;?>" class="user-image" alt="User Image" />
				<?php } ?>
                  <span class="hidden-xs"><?php echo $ContactDetails->LastName.' '.$ContactDetails->FirstName; ?> </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                 <li class="user-header">
                    <?php if($userDetails->profile == ''){ ?>
                    	<img src="<?php echo base_url();?>img/user2-160x160.jpg" class="img-circle" alt="User Image" />
										<?php }else{ ?>
                    	<img src="<?php echo base_url();?>upload/profile/thumb_<?php echo $userDetails->profile;?>" class="img-circle" alt="User Image" />
										<?php } ?>
                    <p> 
                      <?php echo $ContactDetails->FirstName.' '.$ContactDetails->LastName; ?>
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body 
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>-->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url();?>bksl/profile" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url();?>bksl/auth/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
             <div class="pull-left image"> 
             <!-- <img src="<?php echo base_url();?>img/user2-160x160.jpg" class="img-circle" alt="User Image" />-->
							 <?php if($userDetails->profile == ''){ ?>
								<img src="<?php echo base_url();?>img/user2-160x160.jpg" class="img-circle" alt="User Image" />
							<?php }else{ ?>
								<img src="<?php echo base_url();?>upload/profile/thumb_<?php echo $userDetails->profile;?>" class="img-circle" alt="User Image" />
							<?php } ?>
            </div>
            <div class="pull-left info">
              <p><?php echo $ContactDetails->LastName.' '.$ContactDetails->FirstName; ?> </p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form 
         <form action="<?php echo base_url('bksl/formSearch');?>" method="POST" class="sidebar-form search">
						<div class="input-group">
							<input type="text" name="searchVal" class="form-control filterinput" placeholder="Search..." />
							<span class="input-group-btn">
							 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
							</span>
						</div> 
					</form>-->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li> 
           
            <?php $sizeOfTab = count($profileTabs); 
				for($i=0; $i<$sizeOfTab; $i++){  ?>
			  		 <li class="<?php $isActive = '';
							if ($title == $profileTabs[$i]['activeTab']) { 
								echo $isActive = 'active';	} ?>">
								
					  <a href="<?php echo base_url();echo $profileTabs[$i]['URL']?>">
						<i class="<?php echo $profileTabs[$i]['icon'] ?>"></i> <span><?php echo $profileTabs[$i]['tabName'] ?></span></i>
					  </a>
					</li>
		  
			<?php } ?>
            
			</ul>
        </section>
        <!-- /.sidebar --> 
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             <?php echo $title;?>
            <!--<small>it all starts here</small>-->
          </h1>
          <!--<ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> <?php echo $title;?></li>
          </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">

