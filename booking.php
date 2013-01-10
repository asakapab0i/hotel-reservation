<?php include 'includes/global/class.globalInclude.php'; ?>
<?php include 'includes/controller/bookingCont.php'; ?>
<?php $curPage = 'booking'; ?>

<!DOCTYPE html>

<html lang="en" class="cufon-active cufon-ready">
    <head>
        <?php $global->header(); ?>
    </head>
    <body id="page1">
        <?php
        //topmenu 
        $global->topmenu($curPage);
        ?>
        <?php
        //content 
        $booking->bookingContent();
        ?>
        <?php
        //footer 
        $global->footermenu();
        ?>
         <?php
        //modal 
        $global->modalScript();
        ?>
        <?php
        //js script
        $booking->scriptBelow();
        ?>


    </body>
</html>