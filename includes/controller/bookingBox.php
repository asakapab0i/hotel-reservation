<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bookingBox
 *
 * @author Bryan's Workplace
 */
function bookingBox() {
    echo '<form action="#" id="form1">
                                        <h2>Book a Room</h2>
                                        <fieldset>
                                            <div class="row">
                                                <input id="name" type="text" class="input">
                                                Your Name:
                                            </div>	
                                            <div class="row">
                                                <input id="email" type="text" class="input">
                                                E-Mail:
                                            </div>	
                                            <div class="row">
                                                <input id="phone" type="text" class="input">
                                                Home Phone:
                                            </div>	
                                            <div class="row">
                                                <div  class="select1">
                                                <select id="daystay">';
                                               
                                                    for($i = 1; $i < 32; $i++){
                                                        echo '<option>'.$i.'</option>';
                                                    }
                                                echo '</select></div>
                                                Length of Stay:
                                            </div>	
                                            <div class="row">
                                                <div  class="select1">
                                                <select id="people">';
                                             for($i = 1; $i < 13; $i++){
                                                        echo '<option>'.$i.'</option>';
                                                    }
                                                echo '</select></div>
                                                Number in Party:
                                            </div>	
                                            <div class="row">
                                                <div id = class="select2">
                                                <select id="year">
                                                <option >13</option>
                                                </select>
                                                </div>
                                                  <div class="select2">
                                                <select id="day">';
                                                
                                               
                                                     for($i = 1; $i < 32; $i++){
                                                        echo '<option>'.$i.'</option>';
                                                    }
                                                echo '</select>
                                                </div>
                                                  <div class="select2">
                                                <select id="month">';
                                                 for($i = 1; $i < 13; $i++){
                                                        echo '<option>'.$i.'</option>';
                                                    }
                                                echo '</select>
                                                </div>
                                                
                                                Arrival Date:
                                            </div>	
                                            <div class="row_textarea">
                                                Additional Comments:
                                                <textarea id="notes" cols="1" rows="1"></textarea>	
                                            </div>	
                                            <div class="wrapper">
                                                <a href="#" id="bookingAjax" class="button1">Book</a>
                                                <a href="#" class="button1">Call</a>
                                            </div>
                                        </fieldset>
                                    </form>';
}
