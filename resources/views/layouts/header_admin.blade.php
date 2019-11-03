<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('admin-assets/css/bootstrap.min.css') }}">
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="{{ asset('admin-assets/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/css/_all-skins.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/css/admin-style.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue layout-boxed sidebar-mini">

<!-- Site wrapper -->
	<div class="wrapper">
	  
		<header class="main-header">
		    <!-- Logo -->
		    <a href="../dashboard" class="logo">
		      <!-- mini logo for sidebar mini 50x50 pixels -->
		      <span class="logo-mini"><b>A</b>LT</span>
		      <!-- logo for regular state and mobile devices -->
		      <span class="logo-lg">Dauthau24h</span>
		    </a>
		    <!-- Header Navbar: style can be found in header.less -->
		    <nav class="navbar navbar-static-top">
		      <!-- Sidebar toggle button-->
		      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
		        <span class="sr-only">Toggle navigation</span>
		      </a>

		      <div class="navbar-custom-menu">
		        <ul class="nav navbar-nav">
		          <!-- Messages: style can be found in dropdown.less-->
		          <li class="dropdown messages-menu">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		              <i class="fa fa-envelope-o"></i>
		              <span class="label label-success">4</span>
		            </a>
		            <ul class="dropdown-menu">
		              <li class="header">You have 4 messages</li>
		              <li>
		                <!-- inner menu: contains the actual data -->
		                <ul class="menu">
		                  <li><!-- start message -->
		                    <a href="#">
		                      <div class="pull-left">
		                        <img src="{{ asset('admin-assets/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
		                      </div>
		                      <h4>
		                        Support Team
		                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
		                      </h4>
		                      <p>Why not buy a new awesome theme?</p>
		                    </a>
		                  </li>
		                  <!-- end message -->
		                </ul>
		              </li>
		              <li class="footer"><a href="#">See All Messages</a></li>
		            </ul>
		          </li>
		          <!-- Notifications: style can be found in dropdown.less -->
		          <li class="dropdown notifications-menu">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		              <i class="fa fa-bell-o"></i>
		              <span class="label label-warning">10</span>
		            </a>
		            <ul class="dropdown-menu">
		              <li class="header">You have 10 notifications</li>
		              <li>
		                <!-- inner menu: contains the actual data -->
		                <ul class="menu">
		                  <li>
		                    <a href="#">
		                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
		                    </a>
		                  </li>
		                </ul>
		              </li>
		              <li class="footer"><a href="#">View all</a></li>
		            </ul>
		          </li>
		          <!-- Tasks: style can be found in dropdown.less -->
		          <li class="dropdown tasks-menu">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		              <i class="fa fa-flag-o"></i>
		              <span class="label label-danger">9</span>
		            </a>
		            <ul class="dropdown-menu">
		              <li class="header">You have 9 tasks</li>
		              <li>
		                <!-- inner menu: contains the actual data -->
		                <ul class="menu">
		                  <li><!-- Task item -->
		                    <a href="#">
		                      <h3>
		                        Design some buttons
		                        <small class="pull-right">20%</small>
		                      </h3>
		                      <div class="progress xs">
		                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
		                          <span class="sr-only">20% Complete</span>
		                        </div>
		                      </div>
		                    </a>
		                  </li>
		                  <!-- end task item -->
		                </ul>
		              </li>
		              <li class="footer">
		                <a href="#">View all tasks</a>
		              </li>
		            </ul>
		          </li>
		          <!-- User Account: style can be found in dropdown.less -->
		          <li class="dropdown user user-menu">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		              <img src="{{ asset('admin-assets/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
		              <span class="hidden-xs">{{ Auth::user()->name }}</span>
		            </a>
		            <ul class="dropdown-menu">
		              <!-- Menu Footer-->
		              <li class="user-footer">
		                <div class="pull-left">
		                  <a href="#" class="btn btn-default btn-flat">Profile</a>
		                </div>
		                <div class="pull-right">
		                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
		                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
						    {{ csrf_field() }}
						  </form>
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


		<aside class="main-sidebar">
		    <!-- sidebar: style can be found in sidebar.less -->
		    <section class="sidebar">
		      <!-- Sidebar user panel -->
		      <div class="user-panel">
		        <div class="pull-left image">
		          <img src="{{ asset('admin-assets/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
		        </div>
		        <div class="pull-left info">
		          <p>{{ Auth::user()->name }}</p>
		                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-circle text-success"></i> Sign out</a>
		                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
						    {{ csrf_field() }}
						  </form>
		        </div>
		      </div>
		      <ul class="sidebar-menu" data-widget="tree">
		        <li class="active"><a href="/dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
		        <li><a href="{{ route('list_users') }}"><i class="fa fa-user-o"></i> Users</a></li>
		        <li><a href="{{ route('list_all_bids') }}"><i class="fa fa-list-ul"></i> Bids</a></li>
		        <li><a href="{{ route('list_rates') }}"><i class="fa fa-star-o"></i> Rate</a></li>
 		        <!-- <li class="treeview active">
		          <a href="#">
		            <i class="fa fa-files-o"></i>
		            <span>Users</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
		          </a>
		          <ul class="treeview-menu">
		            <li><a href="/dashboard/products/list_products"><i class="fa fa-circle-o"></i> List User</a></li>
		            <li class="active"><a href="/dashboard/products/create"><i class="fa fa-circle-o"></i> Add Product</a></li>
		          </ul>
		        </li> -->
		      </ul>
		    </section>
		    <!-- /.sidebar -->
		</aside>


