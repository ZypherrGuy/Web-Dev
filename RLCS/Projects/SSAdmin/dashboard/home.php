<?php
session_start();
include 'app-assets/server/Dashboard.php';

// if (isset($_SESSION['username'])) {
//   debug_to_console("username found");
// }else{
//   debug_to_console("No username found");
// }

// if (isset($_SESSION['userProfilePicture'])) {
//   debug_to_console("Session Image found");
// }else{
//   debug_to_console("No Session Image found");
// }

// if (isset($_SESSION['userProfilePicture'])) {
//   debug_to_console("Session Permissions found");
//   if($_SESSION['userPermissions'] == 1){
//     debug_to_console("Session Permissions 1");
//   }else{
//     debug_to_console($_SESSION['userPermissions']);
//   }
// }else{
//   debug_to_console("No Session Image found");
// }

// function debug_to_console($data) {
//   $output = $data;
//   if (is_array($output))
//       $output = implode(',', $output);
//   echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
// }


?>

<!DOCTYPE html>
<html lang="en" class="loading">

<style>

/* Style the tab */
.tabFilter {
  overflow: hidden;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tabFilter button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tabFilter button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tabFilter button.active {
  background: -webkit-linear-gradient(45deg, #C91111, #FF7E00);
    background : -moz- oldlinear-gradient(45deg, #C91111, #FF7E00);
    background :      -o-linear-gradient(45deg, #C91111, #FF7E00);
    background :         linear-gradient(45deg, #C91111, #FF7E00);
    background-repeat : repeat-x;
    color : #FFFFFF !important;
    padding-left : 14px;
    -webkit-box-shadow : 0 6px 14px 2px rgba(0, 0, 0, 0.2);
            box-shadow : 0 6px 14px 2px rgba(0, 0, 0, 0.2);
}

/* Style the tab content */
.tabcontentFilter {
  display: none;
  padding: 6px 12px;
  border-top: none;
}

/* Style the tab */
.tabFilterTeamPlacement {
  overflow: hidden;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tabFilterTeamPlacement button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tabFilterTeamPlacement button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tabFilterTeamPlacement button.active {
  background: -webkit-linear-gradient(45deg, #C91111, #FF7E00);
    background : -moz- oldlinear-gradient(45deg, #C91111, #FF7E00);
    background :      -o-linear-gradient(45deg, #C91111, #FF7E00);
    background :         linear-gradient(45deg, #C91111, #FF7E00);
    background-repeat : repeat-x;
    color : #FFFFFF !important;
    padding-left : 14px;
    -webkit-box-shadow : 0 6px 14px 2px rgba(0, 0, 0, 0.2);
            box-shadow : 0 6px 14px 2px rgba(0, 0, 0, 0.2);
}

/* Style the tab content */
.tabcontentFilterTeamPlacement {
  display: none;
  padding: 6px 12px;
  border-top: none;
}

</style>

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
            
            <!-- ROW 1 -->
            <div class="row">
              <div class="col-xl-4 col-lg-6 col-md-6 col-12" >
                <div class="card bg-white">
                    <div class="card-body">
                      <div class="card-block pt-2 pb-0">
                        <div class="media">
                          <div class="media-body white text-left">
                            <h4 class="font-medium-5 card-title mb-0"><?php getTotalPlayers() ?></h4>
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
              <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="card bg-white">
                    <div class="card-body">
                      <div class="card-block pt-2 pb-0">
                        <div class="media">
                          <div class="media-body white text-left">
                            <h4 class="font-medium-5 card-title mb-0"><?php getTotalTeams() ?></h4>
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
              <div class="col-xl-4 col-lg-6 col-md-6 col-12" >
                <div class="card bg-white">
                    <div class="card-body">
                      <div class="card-block pt-2 pb-0">
                        <div class="media">
                          <div class="media-body white text-left">
                            <h4 class="font-medium-5 card-title mb-0"><?php getTotalAdmins() ?></h4>
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
            
          <!-- ROW 2 -->
            <div class="row">
              <div class="col-xl-6 col-lg-12">
                <div class="card bg-white">
                    <div class="card-body">
                      <div class="card-block pt-2 pb-0">
                        <div class="media">
                          <div class="media-body white text-left">
                            <h4 class="font-medium-5 card-title mb-0"><?php getTotalTeamlessPlayers() ?></h4>
                            <span class="grey darken-1">Number of Unassigned Players</span>
                          </div>
                          <div class="media-right text-right">
                            <i class="icon-users font-large-1 primary"></i>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-12">
                <div class="card bg-white">
                    <div class="card-body">
                      <div class="card-block pt-2 pb-0">
                        <div class="media">
                          <div class="media-body white text-left">
                            <h4 class="font-medium-5 card-title mb-0"><?php getTotalIncompleteTeams() ?></h4>
                            <span class="grey darken-1">Number of Incomplete Teams</span>
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

             <!-- ROW 3 -->
             <div class="row match-height">
                <div class="col-xl-4 col-lg-12 col-12">
                <div class="card">
                    <div class="card-header">
                      <div class="card-title-wrap bar-primary">
                        <h4 class="card-title">Admin Game Tracking</h4>
                      </div>
                      
                      <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                      </a>
                    </div>
                    <div class="card-content mt-1">
                      <div class="tabFilter">
                        <button class="tablinks active" onclick="getSeasonSplit(event, 'All')">All</button>
                        <button class="tablinks" onclick="getSeasonSplit(event, 'Summer')">Summer Split</button>
                        <button class="tablinks" onclick="getSeasonSplit(event, 'Winter')">Winter Split</button>
                        <button class="tablinks" onclick="getSeasonSplit(event, 'Spring')">Spring Split</button>
                      </div>

                      <div id="All" class="tabcontentFilter" style="display: block;">
                        <div class="table-responsive">
                          <table class="table table-hover table-xl mb-0" id="recent-orders">
                            <thead>
                              <tr>
                                <th class="border-top-0">No.</th>
                                <th class="border-top-0">Admin</th>
                                <th class="border-top-0" style="width: 35%">Games Admined</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-truncate">1</td>
                                <td class="text-truncate">Joshua Bot</td>
                                <td class="text-truncate">1234</td>
                              </tr>
                              <tr>
                                <td class="text-truncate">2</td>
                                <td class="text-truncate">Jason Cloete</td>
                                <td class="text-truncate">123</td>
                              </tr>
                              <tr>
                                <td class="text-truncate">3</td>
                                <td class="text-truncate">Kyle Slater</td>
                                <td class="text-truncate">12</td>
                              </tr>
                              <tr>
                              <td class="text-truncate">4</td>
                              <td class="text-truncate">Dylan Buckle</td>
                              <td class="text-truncate">75</td>
                            </tr>
                            <tr>
                              <td class="text-truncate">5</td>
                              <td class="text-truncate">Ethan Kruger</td>
                              <td class="text-truncate">75</td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <div id="Summer" class="tabcontentFilter">
                      <div class="table-responsive">
                        <table class="table table-hover table-xl mb-0" id="recent-orders">
                          <thead>
                            <tr>
                              <th class="border-top-0">No.</th>
                              <th class="border-top-0">Admin</th>
                              <th class="border-top-0" style="width: 35%">Games Admined</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-truncate">1</td>
                              <td class="text-truncate">Joshua Bot</td>
                              <td class="text-truncate">12</td>
                            </tr>
                            <tr>
                              <td class="text-truncate">2</td>
                              <td class="text-truncate">Jason Cloete</td>
                              <td class="text-truncate">2</td>
                            </tr>
                            <tr>
                              <td class="text-truncate">3</td>
                              <td class="text-truncate">Kyle Slater</td>
                              <td class="text-truncate">3</td>
                            </tr>
                            <tr>
                              <td class="text-truncate">4</td>
                              <td class="text-truncate">Dylan Buckle</td>
                              <td class="text-truncate">75</td>
                            </tr>
                            <tr>
                              <td class="text-truncate">5</td>
                              <td class="text-truncate">Ethan Kruger</td>
                              <td class="text-truncate">75</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      </div>

                      <div id="Winter" class="tabcontentFilter">
                      <div class="table-responsive">
                        <table class="table table-hover table-xl mb-0" id="recent-orders">
                          <thead>
                            <tr>
                              <th class="border-top-0">No.</th>
                              <th class="border-top-0">Admin</th>
                              <th class="border-top-0" style="width: 35%">Games Admined</th>
                            </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td class="text-truncate">1</td>
                              <td class="text-truncate">Joshua Bot</td>
                              <td class="text-truncate">35</td>
                            </tr>
                            <tr>
                              <td class="text-truncate">2</td>
                              <td class="text-truncate">Jason Cloete</td>
                              <td class="text-truncate">22</td>
                            </tr>
                            <tr>
                              <td class="text-truncate">3</td>
                              <td class="text-truncate">Kyle Slater</td>
                              <td class="text-truncate">24</td>
                            </tr>
                            <tr>
                              <td class="text-truncate">4</td>
                              <td class="text-truncate">Dylan Buckle</td>
                              <td class="text-truncate">75</td>
                            </tr>
                            <tr>
                              <td class="text-truncate">5</td>
                              <td class="text-truncate">Ethan Kruger</td>
                              <td class="text-truncate">75</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      </div>

                      <div id="Spring" class="tabcontentFilter">
                      <div class="table-responsive">
                        <table class="table table-hover table-xl mb-0" id="recent-orders">
                          <thead>
                            <tr>
                              <th class="border-top-0">No.</th>
                              <th class="border-top-0">Admin</th>
                              <th class="border-top-0" style="width: 35%">Games Admined</th>
                            </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td class="text-truncate">1</td>
                              <td class="text-truncate">Joshua Bot</td>
                              <td class="text-truncate">2300</td>
                            </tr>
                            <tr>
                              <td class="text-truncate">2</td>
                              <td class="text-truncate">Jason Cloete</td>
                              <td class="text-truncate">200</td>
                            </tr>
                            <tr>
                              <td class="text-truncate">3</td>
                              <td class="text-truncate">Kyle Slater</td>
                              <td class="text-truncate">75</td>
                            </tr>
                            <tr>
                              <td class="text-truncate">4</td>
                              <td class="text-truncate">Dylan Buckle</td>
                              <td class="text-truncate">75</td>
                            </tr>
                            <tr>
                              <td class="text-truncate">5</td>
                              <td class="text-truncate">Ethan Kruger</td>
                              <td class="text-truncate">75</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      </div>

                     
                
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-8" id="recent-sales">
                  <div class="card">
                    <div class="card-header">
                      <div class="card-title-wrap bar-primary">
                        <h4 class="card-title">Team Ranking</h4>
                      </div>
                      <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                      </a>
                    </div>
                    <div class="card-content mt-1">
                      <div class="tabFilterTeamPlacement">
                        <button class="tablinksTeamPlacement active" onclick="getSeasonSplitForTeamPlacement(event, 'AllT')">All</button>
                        <button class="tablinksTeamPlacement" onclick="getSeasonSplitForTeamPlacement(event, 'SummerT')">Summer Split</button>
                        <button class="tablinksTeamPlacement" onclick="getSeasonSplitForTeamPlacement(event, 'WinterT')">Winter Split</button>
                        <button class="tablinksTeamPlacement" onclick="getSeasonSplitForTeamPlacement(event, 'SpringT')">Spring Split</button>
                      </div>

                      <div id="AllT" class="tabcontentFilterTeamPlacement" style="display: block;">
                        <div class="table-responsive">
                          <table class="table table-hover table-xl mb-0" id="recent-orders">
                              <thead>
                                <tr>
                                  <th class="border-top-0">Placement</th>
                                  <th class="border-top-0">Team</th>
                                  <th class="border-top-0">Games</th>
                                  <th class="border-top-0">Wins</th>
                                  <th class="border-top-0">Losses</th>
                                  <th class="border-top-0">Points</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-truncate">2</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">3</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">4</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">1</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

                        <div id="SummerT" class="tabcontentFilterTeamPlacement">
                        <div class="table-responsive">
                          <table class="table table-hover table-xl mb-0" id="recent-orders">
                              <thead>
                                <tr>
                                  <th class="border-top-0">Placement</th>
                                  <th class="border-top-0">Team</th>
                                  <th class="border-top-0">Games</th>
                                  <th class="border-top-0">Wins</th>
                                  <th class="border-top-0">Losses</th>
                                  <th class="border-top-0">Points</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-truncate">2</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">3</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">4</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">1</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

                        <div id="WinterT" class="tabcontentFilterTeamPlacement">
                        <div class="table-responsive">
                          <table class="table table-hover table-xl mb-0" id="recent-orders">
                              <thead>
                                <tr>
                                  <th class="border-top-0">Placement</th>
                                  <th class="border-top-0">Team</th>
                                  <th class="border-top-0">Games</th>
                                  <th class="border-top-0">Wins</th>
                                  <th class="border-top-0">Losses</th>
                                  <th class="border-top-0">Points</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-truncate">2</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">3</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">4</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">1</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

                        <div id="SpringT" class="tabcontentFilterTeamPlacement">
                        <div class="table-responsive">
                          <table class="table table-hover table-xl mb-0" id="recent-orders">
                              <thead>
                                <tr>
                                  <th class="border-top-0">Placement</th>
                                  <th class="border-top-0">Team</th>
                                  <th class="border-top-0">Games</th>
                                  <th class="border-top-0">Wins</th>
                                  <th class="border-top-0">Losses</th>
                                  <th class="border-top-0">Points</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-truncate">2</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">3</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">4</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                                <tr>
                                  <td class="text-truncate">1</td>
                                  <td class="text-truncate">Orlando Pirates</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">5</td>
                                  <td class="text-truncate">0</td>
                                  <td class="text-truncate">50</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>  

            </div>

            <!-- ROW 4-->
              <div class="row match-height">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                          <div class="card-title-wrap bar-primary">
                        <h4 class="card-title">Player Locations</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="card-block">
                        <div class="row">
                          <div class="col text-center">
                            <span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2"><?php GetPlayerNumbersByCountry("South Africa"); ?></span>
                            <span>South Africa</span>
                          </div>
                          <div class="col text-center">
                            <span class="gradient-green-tea d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2"><?php GetPlayerNumbersByCountry("Réunion"); ?></span>
                            <span>Réunion</span>
                          </div>
                          <div class="col text-center">
                            <span class="gradient-blackberry d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2"><?php GetPlayerNumbersByCountry("Madagascar"); ?></span>
                            <span>Madagascar</span>
                          </div>
                          <div class="col text-center">
                            <span class="gradient-ibiza-sunset d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2"><?php GetPlayerNumbersByCountry("Mozambique"); ?></span>
                            <span>Mozambique</span>
                          </div>
                          <div class="col text-center">
                            <span class="gradient-back-to-earth d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2"><?php GetPlayerNumbersByCountry("Zimbabwe"); ?></span>
                            <span>Zimbabwe</span>
                          </div>
                          <div class="col text-center">
                            <span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2"><?php GetPlayerNumbersByCountry("Botswana"); ?></span>
                            <span>Botswana</span>
                          </div>
                          <div class="col text-center">
                            <span class="gradient-green-tea d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2"><?php GetPlayerNumbersByCountry("Namibia"); ?></span>
                            <span>Namibia</span>
                          </div>
                          <div class="col text-center">
                            <span class="gradient-blackberry d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2"><?php GetPlayerNumbersByCountry("Malawi"); ?></span>
                            <span>Malawi</span>
                          </div>
                          <div class="col text-center">
                            <span class="gradient-ibiza-sunset d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2"><?php GetPlayerNumbersByCountry("Zambia"); ?></span>
                            <span>Zambia</span>
                          </div>
                          <div class="col text-center">
                            <span class="gradient-back-to-earth d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2"><?php GetPlayerNumbersByCountry("Angola"); ?></span>
                            <span>Angola</span>
                          </div>
                          <div class="col text-center">
                            <span class="gradient-back-to-earth d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                            <span class="font-large-1 d-block mb-2"><?php GetPlayerNumbersByCountry("Other"); ?></span>
                            <span>Other</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div> 
            
           <!-- ROW 5 -->
           <div class="row match-height">
              <div class="col-xl-2 col-lg-6 col-md-6 col-12" >
                <div class="card bg-white">
                    <div class="card-body">
                      <div class="card-block pt-2 pb-0">
                        <div class="media">
                          <div class="media-body white text-left">
                            <h4 class="font-medium-1 card-title mb-0">Snowwy</h4>
                            <span class="grey darken-1">Top Season Demos</span>
                          </div>
                          <div class="media-right text-right">
                          <h4 class="font-medium-1 card-title mb-0"><?php getTotalPlayers() ?></h4>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-6 col-md-6 col-12" >
                <div class="card bg-white">
                    <div class="card-body">
                      <div class="card-block pt-2 pb-0">
                        <div class="media">
                          <div class="media-body white text-left">
                            <h4 class="font-medium-1 card-title mb-0">Skillsteal</h4>
                            <span class="grey darken-1">Top Season Goals</span>
                          </div>
                          <div class="media-right text-right">
                          <h4 class="font-medium-1 card-title mb-0"><?php getTotalPlayers() ?></h4>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-6 col-md-6 col-12" >
                <div class="card bg-white">
                    <div class="card-body">
                      <div class="card-block pt-2 pb-0">
                        <div class="media">
                          <div class="media-body white text-left">
                            <h4 class="font-medium-1 card-title mb-0">Snowwy</h4>
                            <span class="grey darken-1">Top Season Demos</span>
                          </div>
                          <div class="media-right text-right">
                          <h4 class="font-medium-1 card-title mb-0"><?php getTotalPlayers() ?></h4>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-6 col-md-6 col-12" >
                <div class="card bg-white">
                    <div class="card-body">
                      <div class="card-block pt-2 pb-0">
                        <div class="media">
                          <div class="media-body white text-left">
                            <h4 class="font-medium-1 card-title mb-0">Snowwy</h4>
                            <span class="grey darken-1">Top Season Saves</span>
                          </div>
                          <div class="media-right text-right">
                          <h4 class="font-medium-1 card-title mb-0"><?php getTotalPlayers() ?></h4>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-6 col-md-6 col-12" >
                <div class="card bg-white">
                    <div class="card-body">
                      <div class="card-block pt-2 pb-0">
                        <div class="media">
                          <div class="media-body white text-left">
                            <h4 class="font-medium-1 card-title mb-0">Happymeal</h4>
                            <span class="grey darken-1">Top Season Assists</span>
                          </div>
                          <div class="media-right text-right">
                          <h4 class="font-medium-1 card-title mb-0"><?php getTotalPlayers() ?></h4>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-6 col-md-6 col-12" >
                <div class="card bg-white">
                    <div class="card-body">
                      <div class="card-block pt-2 pb-0">
                        <div class="media">
                          <div class="media-body white text-left">
                            <h4 class="font-medium-1 card-title mb-0">Mr.Low</h4>
                            <span class="grey darken-1">Overtime</span>
                          </div>
                          <div class="media-right text-right">
                          <h4 class="font-medium-1 card-title mb-0">30:34</h4>
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

    <script src="app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
    <script src="app-assets/vendors/js/core/popper.min.js"></script>
    <script src="app-assets/vendors/js/core/bootstrap.min.js"></script>
    <script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="app-assets/vendors/js/prism.min.js"></script>
    <script src="app-assets/vendors/js/jquery.matchHeight-min.js"></script>
    <script src="app-assets/vendors/js/screenfull.min.js"></script>
    <script src="app-assets/vendors/js/pace/pace.min.js"></script>

    <script src="app-assets/js/app-sidebar.js"></script>
    <script src="app-assets/js/notification-sidebar.js"></script>

    <script src="app-assets/js/dashboard-ecommerce.js"></script>

    <script>
                      function getSeasonSplit(evt, cityName) {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("tabcontentFilter");
                        for (i = 0; i < tabcontent.length; i++) {
                          tabcontent[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablinks");
                        for (i = 0; i < tablinks.length; i++) {
                          tablinks[i].className = tablinks[i].className.replace(" active", "");
                        }
                        document.getElementById(cityName).style.display = "block";
                        evt.currentTarget.className += " active";
                      }

                      function getSeasonSplitForTeamPlacement(evt, cityName) {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("tabcontentFilterTeamPlacement");
                        for (i = 0; i < tabcontent.length; i++) {
                          tabcontent[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablinksTeamPlacement");
                        for (i = 0; i < tablinks.length; i++) {
                          tablinks[i].className = tablinks[i].className.replace(" active", "");
                        }
                        document.getElementById(cityName).style.display = "block";
                        evt.currentTarget.className += " active";
                      }
                      </script>

  </body>
</html>
