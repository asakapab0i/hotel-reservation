<?php
include 'bookingBox.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contact
 *
 * @author Bryan's Workplace
 */
class contactCont {

    function contactContent() {
        echo '<!-- content -->
						<article id="content">
							<div class="box1">
								<div class="wrapper">
									';
          bookingBox();
									echo '<div class="col2 pad">
										<h2><img src="./assets/img/title_marker1.jpg" alt=""><cufon class="cufon cufon-canvas" alt="Contact " style="width: 77px; height: 21px;"><canvas width="100" height="29" style="width: 100px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Contact </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Form" style="width: 51px; height: 21px;"><canvas width="59" height="29" style="width: 59px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Form</cufontext></cufon></h2>
										<form id="ContactForm">
											<div>
												<div class="wrapper">
													<input type="text" class="input">
													Name:
												</div>
												<div class="wrapper">
													<input type="text" class="input">
													Address:
												</div>
												<div class="wrapper">
													<input type="text" class="input">
													Email:								
												</div>
												<div class="textarea_box">
													<textarea name="textarea" cols="1" rows="1"></textarea>	
													Contacts:							
												</div>
												<a href="#" class="button2" onclick="document.getElementById(&#39;ContactForm&#39;).submit()">Send</a>
												<a href="#" class="button2" onclick="document.getElementById(&#39;ContactForm&#39;).reset()">Clear</a>
											</div>
										</form>
									</div>
								</div>
								
							</div>
							<div class="pad">
								<h2><cufon class="cufon cufon-canvas" alt="Our " style="width: 43px; height: 21px;"><canvas width="66" height="29" style="width: 66px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Our </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Contacts" style="width: 82px; height: 21px;"><canvas width="100" height="29" style="width: 100px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Contacts</cufontext></cufon></h2>
								<div class="line2"><div class="wrapper line3">
									<div class="col1">
										<p class="pad_bot1"><strong class="color2">USA</strong></p>
										<p class="pad_bot1">8901 Marmora Road, Glasgow, D04</p>
										<p class="cols">
												Freephone:<br>
												Telephone:<br>
												Fax:<br>
												Email:</p>
										+1 800 559 6580<br>
										+1 800 603 6035<br>
										+1 800 889 9898<br>
										<a href="mailto:" class="color1">mail@demolink.org</a>
									</div>
									<div class="col1 pad_left1">
										<p class="pad_bot1"><strong class="color2">Canada</strong></p>
										<p class="pad_bot1">8901 Marmora Road, Glasgow, D04</p>
										<p class="cols">
												Freephone:<br>
												Telephone:<br>
												Fax:<br>
												Email:</p>
										+1 800 559 6580<br>
										+1 800 603 6035<br>
										+1 800 889 9898<br>
										<a href="mailto:" class="color1">mail@demolink.org</a>
									</div>
									<div class="col1 pad_left1">
										<p class="pad_bot1"><strong class="color2">Mexico</strong></p>
										<p class="pad_bot1">8901 Marmora Road, Glasgow, D04</p>
										<p class="cols">
												Freephone:<br>
												Telephone:<br>
												Fax:<br>
												Email:</p>
										+1 800 559 6580<br>
										+1 800 603 6035<br>
										+1 800 889 9898<br>
										<a href="mailto:" class="color1">mail@demolink.org</a>
									</div>
								</div></div>
							</div>
						</article>
<!--content end-->
					</div>
				</div>
			</div>
		</div>';
    }

    function scriptBelow() {
        echo '<script type="text/javascript"> Cufon.now(); </script>';
    }

}

$contact = new contactCont();
