<?php

session_start();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of confirmBookingCont
 *
 * @author Bryan's Workplace
 */
class confirmBookingCont {

    //put your code here
    function confirmBooking() {
        echo '   <!-- content -->
        <article id="confirmcontent">
            <div class="box1">
                <div class="wrapper">
                    <div class="confirmbookwrapper">

                        <h2><img src="assets/img/title_marker2.jpg" alt="">
                            Confirm Booking</h2>
                        <br>

                        <h3>Personal Information</h3>
                        <form id="booking" method="POST" enctype="multipart/form-data">
                            Title:
                            <select id="title">
                                <option>Mr.</option>
                                <option>Mrs.</option>
                                <option>Ms.</option>
                            </select>';

        confirmBookingCont::firstname();
        echo 'Middle Name:
                            <input type="text" id="mname" value="" />
                            <br>
                            Last Name:
                            <input type="text" id="lname" value="" />
                            <br>
                            Address:
                            <input type="text" id="address" value="" size="50" />
                            <br>
                            First Name:
                            <input type="text" id="fname" value="" />
                            <br>';
        confirmBookingCont::email();
        echo'
                          
                            <br>
                            <br>
                            <br>
                           ';
        confirmBookingCont::bookdetails();
        echo '
            <a href="#" style="margin-left: 125px;" type="button" class="button2">Confirm Booking</a>
                        </form>


                    </div>
                    <div class="rules-wrapper">
                        <h2><img src="assets/img/title_marker3.jpg" alt="">
                            Rules</h2>
                        <br>
                        <h3>Upon Confirming</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>

                    </div>
                </div>
            </div>
        </article>
        <!--content end-->
    </div></div></div></div>';
    }

    function firstname() {
        if (isset($_SESSION['name'])) {
            $fname = $_SESSION['name'];
            $fname = ucfirst($fname);
            echo ' First Name:
                            <input type="text" id="fname" value="' . $fname . '" />
                            <br>';
        } else {
            echo ' First Name:
                            <input type="text" id="fname" value="" />
                            <br>';
        }
    }

    function email() {
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            echo '  Email Address
                            <input type="text" id="email" value="' . $email . '" />';
        } else {
            echo '  Email Address
                            <input type="text" id="email" value="" />';
        }
    }

    function bookdetails() {
        if (isset($_SESSION['daystay']) && isset($_SESSION['people'])) {
            $daystay = $_SESSION['daystay'];
            $people = $_SESSION['people'];


            echo ' <h3>Booking Details</h3>
                            Length of stay:
                            <select id="daystay">';

            for ($i = 1; $i < 32; $i++) {
                if ($people == $i) {
                    echo '<option' . 'selected' . '>' . $i . '</option>';
                } else {
                    echo '<option' . '>' . $i . '</option>';
                }
            }

            echo '
                            </select>
                            Number in Party:
                            <select id="people">';
            for ($i = 1; $i < 13; $i++) {
                if ($people == $i) {
                    echo '<option' . 'selected' . '>' . $i . '</option>';
                } else {
                    echo '<option' . '>' . $i . '</option>';
                }
            }
            echo'
                            </select>
                            <br>
                            Arrival Date: 
                            <input type="date" id="date">
                            <br>';
            if (isset($_REQUEST['rmtype'])) {
                $rmtype = $_REQUEST['rmtype'];

                if (strtolower($rmtype) == 'standard') {
                    echo 'Room Type:
                            <select id="rmtype">
                                <option selected>Standard</option>
                                <option>Deluxe</option>
                                <option>Executive</option>
                                <option>Superior</option>
                                <option>Ambassador</option>
                                <option>Presidential</option>
                                
                            </select>';
                } else if (strtolower($rmtype) == 'deluxe') {
                    echo 'Room Type:
                            <select id="rmtype">
                                <option>Standard</option>
                                <option selected>Deluxe</option>
                                <option>Executive</option>
                                <option>Superior</option>
                                <option>Ambassador</option>
                                <option>Presidential</option>
                               
                            </select>';
                } else if (strtolower($rmtype) == 'executive') {
                    echo '<option>Standard</option>
                                <option >Deluxe</option>
                                <option selected>Executive</option>
                                <option>Superior</option>
                                <option>Ambassador</option>
                                <option>Presidential</option>
                                ';
                } else if (strtolower($rmtype) == 'superior') {
                    echo '<option>Standard</option>
                                <option >Deluxe</option>
                                <option >Executive</option>
                                <option selected>Superior</option>
                                <option>Ambassador</option>
                                <option>Presidential</option>
                                </select>
                               ';
                } else if (strtolower($rmtype) == 'ambassador') {
                    echo '<option>Standard</option>
                                <option >Deluxe</option>
                                <option >Executive</option>
                                <option >Superior</option>
                                <option selected>Ambassador</option>
                                <option>Presidential</option>
                                </select>
                                ';
                } else if (strtolower($rmtype) == 'presidential') {
                    echo '<option>Standard</option>
                                <option >Deluxe</option>
                                <option >Executive</option>
                                <option >Superior</option>
                                <option >Ambassador</option>
                                <option selected>Presidential</option>
                                </select>';
                } else {
                    echo '<option>Standard</option>
                                <option selected>Deluxe</option>
                                <option >Executive</option>
                                <option >Superior</option>
                                <option >Ambassador</option>
                                <option >Presidential</option>
                                </select>';
                }
            } else {
                echo '<option>Standard</option>
                                <option selected>Deluxe</option>
                                <option >Executive</option>
                                <option >Superior</option>
                                <option >Ambassador</option>
                                <option >Presidential</option>
                                </select>';
            }

            echo '
                            <br>
                            Additional Requests:
                            ';
            if (isset($_SESSION['notes'])) {
                $notes = $_SESSION['notes'];
                echo '<textarea id="notes" style="margin: 2px; height: 137px; width: 379px;">' . $notes . '</textarea>';
            }
            echo '
                            <br>
                            ';
        }
    }

}

$confirmBook = new confirmBookingCont();
?>
