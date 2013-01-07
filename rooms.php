<?php include 'includes/global/class.globalInclude.php'; ?>
<?php include 'includes/controller/roomsCont.php'; ?>
<?php $curPage = 'rooms'; ?>
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
        $rooms->roomsContent();
        ?>
        <?php
        //footer 
        $global->footermenu();
        ?>
        <?php
        //js script
        $rooms->scriptBelow();
        ?>


    </body>
</html>