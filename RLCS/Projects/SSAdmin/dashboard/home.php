<?php
session_start();

if (isset($_SESSION['username'])) {
  debug_to_console("username found");
}else{
  debug_to_console("No username found");
}

if (isset($_SESSION['userProfilePicture'])) {
  debug_to_console("Session Image found");
}else{
  debug_to_console("No Session Image found");
}

if (isset($_SESSION['userProfilePicture'])) {
  debug_to_console("Session Permissions found");
  if($_SESSION['userPermissions'] == 1){
    debug_to_console("Session Permissions 1");
  }else{
    debug_to_console($_SESSION['userPermissions']);
  }
}else{
  debug_to_console("No Session Image found");
}

function debug_to_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);
  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

?>

<!DOCTYPE html>
<html lang="en" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>SSAdmin Dashboard</title>
    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/img/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/img/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/img/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/img/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/main.css">
  </head>
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


      <div data-active-color="white" data-background-color="black" data-image="app-assets/img/sidebar-bg/background-sidebar.png" class="app-sidebar">
        <div class="sidebar-header">
          <div class="logo clearfix"><a href="index.html" class="logo-text float-left">
              <div class="logo-img"><img src="app-assets/img/logos/ssadmin-orange.png" alt="SSADMIN"/></div><span class="text align-middle">SSADMIN</span></a></div>
        </div>
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
              <li class="active nav-item"><a href="dashboard-ecommerce.php"><i class="icon-home"></i><span data-i18n="" class="menu-title"><b>Dashboard</b></span></a>
              </li>   
              <li class="has-sub nav-item"><a href="#"><i class="icon-social-dropbox"></i><span data-i18n="" class="menu-title"><b>Toolbox</b></span></a>
                <ul class="menu-content">
                  <li><a href="chat.html" class="menu-item"><b>Roster Report</b></a>
                  </li>
                  <li><a href="chat.html" class="menu-item"><b>Ballchasing Checker</b></a>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a href="players.php"><i class="icon-users"></i><span data-i18n="" class="menu-title"><b>Players</b></span></a>
              </li> 
              <li class="nav-item"><a href="#"><i class="icon-grid"></i><span data-i18n="" class="menu-title"><b>Teams</b></span></a>
              </li> 
              <li class="has-sub nav-item"><a href="#"><i class="icon-social-dropbox"></i><span data-i18n="" class="menu-title"><b>Administration</b></span></a>
                <ul class="menu-content">
                  <li><a href="chat.html" class="menu-item"><b>Administrators</b></a>
                  </li>
                  <li><a href="chat.html" class="menu-item"><b>Calender</b></a>
                  </li>
                  <li><a href="chat.html" class="menu-item"><b>Documentation</b></a>
                  </li>
                  <li><a href="chat.html" class="menu-item"><b>Support</b></a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="sidebar-background"></div>
      </div>


      <nav class="navbar navbar-expand-lg navbar-light bg-faded">
        <div class="container-fluid">
          <div class="navbar-header"></div>
          <div class="navbar-container">
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item mt-2 d-none d-lg-block" > <?php echo "Hello, <b>" . $_SESSION['username']."</b>"; ?> </li>
                <li class="dropdown nav-item mr-0">
                  <a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-user-link dropdown-toggle">
                    <span class="avatar avatar-online">
                      <img id="navbar-avatar" src = "data:image/png;base64,<?php echo base64_encode($_SESSION['userProfilePicture'])?>" alt="img" width="200" height="200" />
                    </span>
                    <p class="d-none">User Settings</p>
                  </a>
                  <div aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
                    <div class="arrow_box_right"><a href="user-profile-page.html" class="dropdown-item py-1">
                        <i class="ft-edit mr-2"></i><span>My Profile</span></a><a href="chat.html" class="dropdown-item py-1">
                          <?php 
                          if($_SESSION['userPermissions'] == 1){
                            echo "<i class='ft-pie-chart mr-2'></i><span>RM Panel</span></a><a href='#' class='dropdown-item py-1'>";
                          }
                          ?>
                        <i class="ft-settings mr-2"></i><span>Settings</span></a>
                      <div class="dropdown-divider"></div>
                      <a href="logout.php" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid">
              
            <div class="row">
              <div class="col-xl-4 col-lg-6 col-md-6 col-12" style="margin-top: 20px">
                <div class="card bg-white">
                    <div class="card-body">
                      <div class="card-block pt-2 pb-0">
                        <div class="media">
                          <div class="media-body white text-left">
                            <h4 class="font-medium-5 card-title mb-0">231</h4>
                            <span class="grey darken-1">Number of Players</span>
                          </div>
                          <div class="media-right text-right">
                            <i class="icon-user font-large-1 primary"></i>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6 col-12" style="margin-top: 20px">
                <div class="card bg-white">
                    <div class="card-body">
                      <div class="card-block pt-2 pb-0">
                        <div class="media">
                          <div class="media-body white text-left">
                            <h4 class="font-medium-5 card-title mb-0">91</h4>
                            <span class="grey darken-1">Number of Teams</span>
                          </div>
                          <div class="media-right text-right">
                            <i class="icon-users font-large-1 primary"></i>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6 col-12" style="margin-top: 20px">
                <div class="card bg-white">
                    <div class="card-body">
                      <div class="card-block pt-2 pb-0">
                        <div class="media">
                          <div class="media-body white text-left">
                            <h4 class="font-medium-5 card-title mb-0">9</h4>
                            <span class="grey darken-1">Number of Admins</span>
                          </div>
                          <div class="media-right text-right">
                            <i class="icon-eye font-large-1 primary"></i>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                </div>
              </div>
            </div>
            
             
          

              <div class="row match-height">
                <div class="col-xl-6 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                          <div class="card-title-wrap bar-primary">
                        <h4 class="card-title">Player Regions</h4>
                      </div>
                    </div>
                    <div class="card-body">

                      <div id="bar-chart" class="height-250 BarChartShadow BarChart">					
                      </div>

                      <div class="card-block">
                        <div class="row">
                          <div class="col text-center">
                            <span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2">48</span>
                            <span>Sport</span>
                          </div>
                          <div class="col text-center">
                            <span class="gradient-green-tea d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2">9</span>
                            <span>Music</span>
                          </div>
                          <div class="col text-center">
                            <span class="gradient-blackberry d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2">26</span>
                            <span>Travel</span>
                          </div>
                          <div class="col text-center">
                            <span class="gradient-ibiza-sunset d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2">17</span>
                            <span>News</span>
                          </div>
                                <div class="col text-center">
                                  <span class="gradient-back-to-earth d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                  <span class="font-large-1 d-block mb-2">52</span>
                                  <span>Blog</span>
                                </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                          <div class="card-title-wrap bar-warning">
                        <h4 class="card-title">Project Stats</h4>
                      </div>
                    </div>
                    <div class="card-body">

                      <p class="font-medium-2 text-muted text-center">Project Tasks</p>
                      <div id="donut-dashboard-chart" class="height-250 donut donutShadow">
                      </div>

                      <div class="card-block">
                        <div class="row my-3">
                          <div class="col">
                                    <span class="mb-1 text-muted d-block">23% - Started</span>
                                    <div class="progress" style="height: 8px;">
                                      <div class="progress-bar gradient-blackberry" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <span class="mb-1 text-muted d-block">35% - In Progress</span>
                                    <div class="progress" style="height: 8px;">
                                      <div class="progress-bar gradient-pomegranate" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <span class="mb-1 text-muted d-block">14% - Done</span>
                                    <div class="progress" style="height: 8px;">
                                      <div class="progress-bar gradient-green-tea" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            
              
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
    <script src="app-assets/vendors/js/core/popper.min.js"></script>
    <script src="app-assets/vendors/js/core/bootstrap.min.js"></script>
    <script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="app-assets/vendors/js/prism.min.js"></script>
    <script src="app-assets/vendors/js/jquery.matchHeight-min.js"></script>
    <script src="app-assets/vendors/js/screenfull.min.js"></script>
    <script src="app-assets/vendors/js/pace/pace.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/js/chartist.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="app-assets/js/app-sidebar.js"></script>
    <script src="app-assets/js/notification-sidebar.js"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/dashboard-ecommerce.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
