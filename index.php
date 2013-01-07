<?php include 'includes/global/class.globalInclude.php'; ?>
<?php include 'includes/controller/indexCont.php'; ?>
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
        //content 
        $index->indexContent();
        ?>
        <?php
        //footer 
        $global->footermenu();
        ?>
        <?php
        //js script
        $index->scriptBelow();
        ?>
        <?php
        //modal 
        $global->modalScript();
        ?>





    </body>
</html>