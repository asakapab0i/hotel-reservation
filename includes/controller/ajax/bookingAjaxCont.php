<?php

require_once '../../global/class.databaseCont.php';
$bookingAjaxCont = new bookingAjaxCont();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bookingAjaxCont
 *
 * @author Bryan's Workplace
 */
class bookingAjaxCont {

    //put your code here
    private $title;
    private $fname;
    private $mname;
    private $lname;
    private $email;
    private $address;
    private $daystay;
    private $people;
    private $date;
    private $notes;
    private $roomtype;

    function __construct() {
        if (!isset($_REQUEST['title'])) {
            exit('data didnt recieved');
        }
        bookingAjaxCont::getVariable();
        bookingAjaxCont::inserVariable();
    }

    function getVariable() {

        //booking info
        $this->title = $_REQUEST['title'];
        $this->fname = ucfirst($_REQUEST['fname']);
        $this->mname = ucfirst($_REQUEST['mname']);
        $this->lname = ucfirst($_REQUEST['lname']);
        $this->email = $_REQUEST['email'];
        $this->address = $_REQUEST['address'];

        $this->daystay = $_REQUEST['daystay'];
        $this->people = $_REQUEST['people'];
        $this->date = $_REQUEST['date'];
        $this->notes = $_REQUEST['notes'];
        $this->roomtype = $_REQUEST['rmtype'];
    }

    function inserVariable() {
        //create a code var
        $rand = md5(microtime());
        $code = substr($rand, 0, 6);
        $bookstat = '1';
        $profilestat = '1';

        $pdoExtension = PDOExtension::getInstance();
        $pdoQuery = $pdoExtension->dbh;
        $pdoQuery->beginTransaction();

        //mysql query
        $profileQuery = 'INSERT INTO profile (title,fname,mname,lname,email,address)VALUES(?,?,?,?,?,?)';
        $bookingQuery = 'INSERT INTO booking (code,profile_id,roomtype,bookingstat,paymentstat,lenght_of_stay,number_party,arrival_date)
            VALUES(?,?,?,?,?,?,?,?)';




        //insert for profile
        $profile = $pdoQuery->prepare($profileQuery);
        $profile->bindParam(1, $this->title);
        $profile->bindParam(2, $this->fname);
        $profile->bindParam(3, $this->mname);
        $profile->bindParam(4, $this->lname);
        $profile->bindParam(5, $this->email);
        $profile->bindParam(6, $this->address);
        $profile->execute();
        $profile->closeCursor();
        $profileLastId = $pdoQuery->lastinsertid();


        //insert for booking
        $booking = $pdoQuery->prepare($bookingQuery);
        $booking->bindParam(1, $code);
        $booking->bindParam(2, $profileLastId);
        $booking->bindParam(3, $this->roomtype);
        $booking->bindParam(4, $bookstat);
        $booking->bindParam(5, $profilestat);
        $booking->bindParam(6, $this->daystay);
        $booking->bindParam(7, $this->people);
        $booking->bindParam(8, $this->date);
        $booking->execute();
        $booking->closeCursor();

        //commit and rollback
        $pdoQuery->commit();

        //$pdoQuery->rollback();
        $pdoQuery = null;
        echo 'what';
    }

}

?>
