<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Oui Shop</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
      <link href="{{asset('cms/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('cms/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
	  <link href="{{asset('cms/libs/summernote/summernote-bs4.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('cms/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('cms/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('cms/css/app.min.css')}}" rel="stylesheet" type="text/css" />
	  <link href="{{asset('cms/libs/bootstrap-table/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />
	  <link href="{{asset('cms/css/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <div id="wrapper">
         <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">
               <li class="dropdown notification-list">
                  <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                  <i class="fe-bell noti-icon"></i>
                  <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                     <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                           <span class="float-right">
                           <a href="#" class="text-dark">
                           <small>Clear All</small>
                           </a>
                           </span>Notification
                        </h5>
                     </div>
                     <div class="slimscroll noti-scroll">
                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                           <div class="notify-icon">
                              <img src="{{asset('cms/images/users/user-1.jpg')}}" class="img-fluid rounded-circle" alt="" /> 
                           </div>
                           <p class="notify-details">Cristina Pride</p>
                           <p class="text-muted mb-0 user-msg">
                              <small>Hi, How are you? What about our next meeting</small>
                           </p>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                           <div class="notify-icon bg-primary">
                              <i class="mdi mdi-comment-account-outline"></i>
                           </div>
                           <p class="notify-details">Caleb Flakelar commented on Admin
                              <small class="text-muted">1 min ago</small>
                           </p>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                           <div class="notify-icon">
                              <img src="{{asset('cms/images/users/user-4.jpg')}}" class="img-fluid rounded-circle" alt="" /> 
                           </div>
                           <p class="notify-details">Karen Robinson</p>
                           <p class="text-muted mb-0 user-msg">
                              <small>Wow ! this admin looks good and awesome design</small>
                           </p>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                           <div class="notify-icon bg-warning">
                              <i class="mdi mdi-account-plus"></i>
                           </div>
                           <p class="notify-details">New user registered.
                              <small class="text-muted">5 hours ago</small>
                           </p>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                           <div class="notify-icon bg-info">
                              <i class="mdi mdi-comment-account-outline"></i>
                           </div>
                           <p class="notify-details">Caleb Flakelar commented on Admin
                              <small class="text-muted">4 days ago</small>
                           </p>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                           <div class="notify-icon bg-secondary">
                              <i class="mdi mdi-heart"></i>
                           </div>
                           <p class="notify-details">Carlos Crouch liked
                              <b>Admin</b>
                              <small class="text-muted">13 days ago</small>
                           </p>
                        </a>
                     </div>
                     <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                     View all
                     <i class="fi-arrow-right"></i>
                     </a>
                  </div>
               </li>
               <li class="dropdown notification-list">
                  <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                  <img src="{{asset('cms/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle">
                  <span class="pro-user-name ml-1">
                  Geneva <i class="mdi mdi-chevron-down"></i> 
                  </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                     <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                     </div>
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
						 <i class="fe-user"></i>
						 <span>My Account</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
						 <i class="fe-log-out"></i>
						 <span>{{ __('Logout') }}</span>
                     </a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
                  </div>
               </li>
            </ul>
            <div class="logo-box">
               <a href="index.html" class="logo text-center">
               <span class="logo-lg">
               <img src="{{asset('cms/images/logo-light.png')}}" alt="" height="18">
               </span>
               <span class="logo-sm">
               <img src="{{asset('cms/images/logo-sm.png')}}" alt="" height="24">
               </span>
               </a>
            </div>
            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
               <li>
                  <button class="button-menu-mobile waves-effect waves-light">
                  <i class="fe-menu"></i>
                  </button>
               </li>
            </ul>
         </div>
         <div class="left-side-menu">
            <div class="slimscroll-menu">
               <div id="sidebar-menu">
                  <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Navigation</li>
                    <li>
                        <a href="/admin">
							<i class="fe-airplay"></i>
							<span> Dashboards </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
							<i class="fe-users"></i>
							<span>Administration</span>
							<span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="{!! route('users.index') !!}">Users Management</a>
							</li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
							<i class="fe-shopping-cart"></i>
							<span>Products</span>
							<span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="{!! route('categories.index') !!}">Categories</a>
							</li>
							<li>
								<a href="{!! route('subcategories.index') !!}">Sub Categories</a>
							</li>
							<li>
								<a href="{!! route('products.index') !!}">Products</a>
							</li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
							<i class="fe-shopping-cart"></i>
							<span>Orders</span>
							<span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="#">Sellers</a>
							</li>
							<li>
								<a href="#">Orders</a>
							</li>
                        </ul>
                    </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
         <div class="content-page">
		 @yield('content')