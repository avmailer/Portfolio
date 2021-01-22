<?php 

require("requires/headers.php");

?>
      
        <div class="page-header">
          <div class="container-fluid">
            <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item active">Double Logins</li>
          </ul>
          </div>
        </div>
        
        
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              
              <div class="col-sm-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Double Logins</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="row">User</th>
                          <th scope="row">Password</th>
                          <th scope="row">IP</th>
                          <th scope="row">Date</th>

                        </tr>
                      </thead>
                      <tbody style="color:white">
                        
                        <?php if (empty(file_get_contents("result/doubleLogins.txt"))) {?>
                          <tr style="color:white !important">          
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                          </tr>
                        <?php }else{
                          include 'result/doubleLogins.txt';
                         } ?>

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