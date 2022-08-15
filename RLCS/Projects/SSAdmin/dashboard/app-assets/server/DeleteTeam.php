<?php
include 'db-connection.php';

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
                                                      <th class="border-top-0">No. of Players</th>
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
                                                              <td> 
                                                                  <?php
                                                                    if(!empty($row['team_smashId']) || $row['team_smashId'] != NULL){
                                                                      echo "<a style='color: #ff5200;' href='https://www.start.gg/team/".$row['team_smashId']."'>View Profile</a>";
                                                                    }else{
                                                                      echo "<a style='color: #676b7e;' href='#'>No Profile</a>";
                                                                    }
                                                                   ?>
                                                              </td>
                                                              <?php 
                                                              if($_SESSION['userPermissions'] == 1){
                                                                echo "<td>
                                                                      <div class='dropdown nav-item mr-0'>
                                                                        <a id='dropdownBasic3' href='#' data-toggle='dropdown' class='nav-link position-relative dropdown-user-link dropdown-toggle'>
                                                                        </a>
                                                                        <div aria-labelledby='dropdownBasic3' class='dropdown-menu dropdown-menu-right'>
                                                                          <div class='arrow_box_right'>
                                                                            <button id='edit-player-Btn' class='form-control mr-1 button' data-popup='popup-editplayer' type='button' style='border : 0px solid #CED4DA; text-align:left;'><i class='ft-edit mr-2' ></i>Edit</button>
                                                                            <button id='edit-player-Btn' class='form-control mr-1 button' data-popup='popup-deleteplayer' type='button' style='border : 0px solid #CED4DA;text-align:left;'><i class='ft-delete mr-2' ></i>Delete</button> 
                                                                          </div>
                                                                        </div>
                                                                      </div>  
                                                                    </td>";
                                                              }
                                                              ?>
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


?>