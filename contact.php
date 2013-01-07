<?php include 'includes/global/class.globalInclude.php'; ?>
<?php include 'includes/controller/contactCont.php'; ?>
<?php $curPage = 'contact'; ?>

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
        $contact->contactContent();
        ?>
        <?php
        //footer 
        $global->footermenu();
        ?>
        <?php
        //js script
        $contact->scriptBelow();
        ?>


    </body>
</html>