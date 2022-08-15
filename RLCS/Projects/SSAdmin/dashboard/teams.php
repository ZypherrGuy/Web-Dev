<?php

session_start();
include 'app-assets/server/teams.php';

?>

<!DOCTYPE html>
<html lang="en" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
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
    <link rel="stylesheet" type="text/css" href="../app-assets/css/popup-form.css">
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
              <li class="nav-item"><a href="dashboard-ecommerce.php"><i class="icon-home"></i><span data-i18n="" class="menu-title"><b>Dashboard</b></span></a>
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
              <li class="active nav-item"><a href="#"><i class="icon-grid"></i><span data-i18n="" class="menu-title"><b>Teams</b></span></a>
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
        

      <div id="popup-editTeam" class="popup">
                <div class="popup-content">
                  <div class="popup-form">
                    <a class="popup-close">&times;</a>
                    <form class="popup-form" action="app-assets/server/DeleteTeam.php" method="post">
                        <div class="card-title-wrap bar-warning">
                            <h4 class="card-title"  class="margin-bottom: 20px"><b>Edit Team</b></h4>
                        </div>
                      <div>
                        <input class="form-control mt-3" type="text" id="teamNameEdit" name="teamNameEdit" />
                        <input class="form-control mt-3" type="text" id="teamTagEdit" name="teamTagEdit" />
                        <input class="form-control mt-3" type="text" id="teamSmashIDEdit" name="teamSmashIDEdit" />
                      </div>
                      <button class="form-control mt-3" style="margin: auto; padding: 10px; height: 50px;" type="submit" href="/" id="EditTeamBtn"><b>Edit Team</b></button>
                    </form>
                  </div>
                </div>
        </div>

      <div id="popup-deleteTeam" class="popup">
                <div class="popup-content">
                  <div class="popup-form">
                    <a class="popup-close">&times;</a>
                    <form class="popup-form" action="app-assets/server/DeleteTeam.php" method="post">
                        <div class="card-title-wrap bar-warning">
                            <h4 class="card-title"  class="margin-bottom: 20px"><b>Delete Team</b></h4>
                            <Div id="DeleteTeamHeader" style="font-weight: Bold"> </div>
                        </div>
                      <div>
                        <input class="form-control mt-3" type="text" id="teamNameDelete" name="teamNameDelete" placeholder="Full name" readonly/>
                      </div>
                      <button class="form-control mt-3" style="margin: auto; padding: 10px; height: 50px;" type="submit" href="/" id="DeleteTeamBtn"><b>Delete Team</b></button>
                    </form>
                  </div>
                </div>
        </div>


        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!--Extended Table starts-->
              <div class="row">
                  <div class="col-12">
                  <input id="navbar-search" type="text" onkeyup="filterTeams()" placeholder="Search Teams" class="form-control" style="width : 90.3%; display:inline-block;margin-right:10px;"/>
                  <button id="create-player-Btn" class="form-control mr-1 button" data-popup="popup-newplayer" type="button" style="width : 8%;display:inline-block;">New</button>
                  </div>
              </div>
              <!--Shopping cart starts-->
              <section id="shopping-cart">
                  <div class="row">
                      <div class="col-sm-12">
                          <div class="card">
                              <div class="card-header">
                                  <div class="card-title-wrap bar-warning">
                                      <h4 class="card-title">SSA Teams</h4>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <div class="card-block">
                                      <div class="table-responsive">
                                          <table id="team-table" class="table table-hover table-xl mb-0">
                                              <thead>
                                                  <tr>                           
                                                      <th class="border-top-0">Team</th>
                                                      <th class="border-top-0"></th>
                                                      <th class="border-top-0">Tag</th>
                                                      <th class="border-top-0">No. Players</th>
                                                      <th class="border-top-0">START.GG</th>
                                                  </tr>
                                              </thead>
                                              <tbody>

                                                    <?php
                                                          while($row = mysqli_fetch_array($getAllTeamData)) {
                                                    ?>
                                                            <tr>
                                                              <td><img id="" src = "data:image/png;base64,<?php echo base64_encode($row['team_logo'])?>" alt="img" width="35px" height="35px" /></td>
                                                              <td><?php echo $row['team_name']?></td>
                                                              <td><?php echo $row['team_abreviation']?></td>
                                                              <td><?php getNumberofPlayers($row['team_name']) ?></td>
                                                              <td> <?php
                                                                    if(!empty($row['team_smashId']) || $row['team_smashId'] != NULL){
                                                                      echo "<a style='color: #ff5200;' href='https://www.start.gg/team/".$row['team_smashId']."'>View Profile</a>";
                                                                    }else{
                                                                      echo "<a style='color: #676b7e;' href='#'>No Profile</a>";
                                                                    }
                                                                   ?>
                                                              </td>
                                                              <td>
                                                                <div class="dropdown nav-item mr-0">
                                                                  <a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-user-link dropdown-toggle">
                                                                  </a>
                                                                  <div aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
                                                                    <div class="arrow_box_right">
                                                                      
                                                                    <button id="edit-team-Btn" class="form-control mr-1 button" data-popup="popup-editTeam" type="button" style="border : 0px solid #CED4DA; text-align:left;"><i class="ft-edit mr-2" ></i>Edit</button>
                                                                    <button id="delete-team-Btn" class="form-control mr-1 button" data-popup="popup-deleteTeam" type="button" style="border : 0px solid #CED4DA;text-align:left;"><i class="ft-delete mr-2" ></i>Delete</button>

                                                                      
                                                                    </div>
                                                                  </div>
                                                                </div>  
                                                              </td>
                                                            </tr>
                                                    <?php
                                                          }
                                                    ?>
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <!--Shopping cart ends-->
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
    <script src="app-assets/javascript/filterTeams.js"></script>
   
    <script>
      let popupBtns = [...document.querySelectorAll(".button")];
      popupBtns.forEach(function (btn) {
        btn.onclick = function () {
          let popup = btn.getAttribute("data-popup");
          document.getElementById(popup).style.display = "block";
        };
      });
      let closeBtns = [...document.querySelectorAll(".popup-close")];
      closeBtns.forEach(function (btn) {
        btn.onclick = function () {
          let popup = btn.closest(".popup");
          popup.style.display = "none";
        };
      });
      window.onclick = function (event) {
        if (event.target.className === "popup") {
          event.target.style.display = "none";
        }
      };
    </script>
    
    <script>
      var x = document.getElementById("team-table").rows.length;
      console.log(x-1);
    </script>


    <script>
        var table = document.getElementById('team-table');

        function createPElement(text){
          var message = document.createElement("p");
          message.id = "CheckForPlayersMessage";
          message.innerText = text;
          document.getElementById("DeleteTeamHeader").appendChild(message);
        }

        for(var i = 1; i < table.rows.length; i++)
        {
            table.rows[i].onclick = function()
            {

              var teamLogo = this.cells[0].innerHTML;
              var teamName = this.cells[1].innerHTML;
              var teamTag = this.cells[2].innerHTML;
              var NoOfPlayers = this.cells[3].innerHTML;
             
              smash_innerHTML = this.cells[4].innerHTML;
              smash_processed = smash_innerHTML.split('">View Profile</a>');
              smash_array = smash_processed[0].split('<a style=\"color: #ff5200;\" href=\"https://www.start.gg/team/');
              smashId = smash_array[1];

              document.getElementById("teamNameDelete").value = this.cells[1].innerHTML;

              document.getElementById("teamNameEdit").value = this.cells[1].innerHTML;
              document.getElementById("teamTagEdit").value = this.cells[2].innerHTML;
              document.getElementById("teamSmashIDEdit").value = smashId;

              if(this.cells[3].innerHTML != 0){
                if(document.getElementById("CheckForPlayersMessage")){
                  document.getElementById("CheckForPlayersMessage").remove();
                  createPElement("Unable to delete Team! This team has " + this.cells[3].innerHTML + " players assigned to it.");
                  document.getElementById('DeleteTeamBtn').classList.add("disabledBtn"); ;
                  document.getElementById('DeleteTeamBtn').disabled = true;
                }else{
                  createPElement("Unable to Delete - This team has " + this.cells[3].innerHTML + " players assigned to it.");
                  document.getElementById('DeleteTeamBtn').classList.add("disabledBtn"); ;
                  document.getElementById('DeleteTeamBtn').disabled = true;
                }
              }else{
                if(document.getElementById("CheckForPlayersMessage")){
                  document.getElementById("CheckForPlayersMessage").remove();
                  createPElement("Are you sure you want to delete this team?");
                  document.getElementById('DeleteTeamBtn').disabled = false;
                }else{
                  createPElement("Are you sure you want to delete this team?");
                  document.getElementById('DeleteTeamBtn').disabled = false;
                }
              };
            }
        }

    </script>                                                     

    <script src="app-assets/js/app-sidebar.js"></script>
    <script src="app-assets/js/notification-sidebar.js"></script>
 
  </body>
</html>