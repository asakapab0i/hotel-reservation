<?php include 'includes/global/class.globalInclude.php'; ?>
<?php include 'includes/controller/confirmBookingCont.php'; ?>
<?php $curPage = 'index'; ?>

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
        $confirmBook->confirmBooking();
        ?>

        <?php
        //footer 
        $global->footermenu();
        ?>







    </body>
</html>