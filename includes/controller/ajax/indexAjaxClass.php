<?php

session_start();

if (isset($_REQUEST['name'])) {

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $daystay = $_REQUEST['daystay'];
    $people = $_REQUEST['people'];
    $year = $_REQUEST['year'];
    $day = $_REQUEST['day'];
    $month = $_REQUEST['month'];
    $notes = $_REQUEST['notes'];


    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['daystay'] = $daystay;
    $_SESSION['people'] = $people;
    $_SESSION['year'] = $year;
    $_SESSION['day'] = $day;
    $_SESSION['month'] = $month;
    $_SESSION['notes'] = $notes;
}
?>