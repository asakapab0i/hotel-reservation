<?php include 'includes/global/class.globalInclude.php'; ?>
<?php include 'includes/controller/servicesCont.php'; ?>
<?php $curPage = 'services'; ?>
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
        $services->servicesContent();
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
        $services->scriptBelow();
        ?>


    </body>
</html>