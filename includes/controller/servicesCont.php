<?php
include 'bookingBox.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of servicesCont
 *
 * @author Bryan's Workplace
 */
class servicesCont {

    function servicesContent() {
        echo '<!-- content -->
						<article id="content">
							<div class="box1">
								<div class="wrapper">
       
                                                    ';
        bookingBox();
        echo '<div class="col2 pad">
										<h2><img src="assets/img//title_marker1.jpg" alt=""><cufon class="cufon cufon-canvas" alt="Featured " style="width: 86px; height: 21px;"><canvas width="109" height="29" style="width: 109px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Featured </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Services" style="width: 77px; height: 21px;"><canvas width="96" height="29" style="width: 96px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Services</cufontext></cufon></h2>
										<div class="wrapper pad_bot2">
											<figure class="left marg_right1"><img src="assets/img//page2_img1.jpg" alt=""></figure>
											<p class="pad_bot1"><strong class="color3">At vero eos et accusamus et iusto odio</strong><br>
													Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi quisquam est, qui dolorem ipsum sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum.</p>
											<a href="#" class="color1">Read More</a>
										</div>
										<div class="wrapper">
											<figure class="left marg_right1"><img src="assets/img//page2_img2.jpg" alt=""></figure>
											<p class="pad_bot1"><strong class="color3">Et harum quidem rerum facilis expedita distinctio</strong><br>Nam libero tempore, cum soluta nobis eseligendi optio cumque dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsumnihil impedit quo minus id sumnda esis repellendus. Temporibus autem quibusdam et aut officiis debitis.</p>
											<a href="#" class="color1">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="pad">
								<div class="wrapper line3">
									<div class="col2">
										<h2><cufon class="cufon cufon-canvas" alt="Main " style="width: 54px; height: 21px;"><canvas width="77" height="29" style="width: 77px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Main </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Services" style="width: 77px; height: 21px;"><canvas width="96" height="29" style="width: 96px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Services</cufontext></cufon></h2>
										<p class="pad_bot1"><strong class="color2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</strong> </p>
										<p class="pad_bot1">
												Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enigm ipsam voluptatem nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
										<div class="wrapper pad_bot2">
											<div class="col1">
												<ul class="list1">
													<li><a href="#">Inventore veritatis et quasi architecto</a></li>
													<li><a href="#">Beatae vitae dicta sunt explicabo</a></li>
													<li><a href="#">Nemo enim ipsam voluptatem quivolupta</a></li>
													<li><a href="#">Sit aspernatur aut odit aut fugit sed</a></li>
												</ul>
											</div>
											<div class="col1 pad_left1">
												<ul class="list1">
													<li><a href="#">Neque porro quisquam est, qui dolorem</a></li>
													<li><a href="#">Ipsum quia dolor amet consectetur</a></li>
													<li><a href="#">Adipisci velit, sed quia non numquam</a></li>
													<li><a href="#">Eius modi tempora incidunt ut</a></li>
												</ul>
											</div>
										</div>
										<a href="#" class="button1">Read More</a>
									</div>
									<div class="col1 pad_left1">
										<h2><cufon class="cufon cufon-canvas" alt="Special " style="width: 71px; height: 21px;"><canvas width="94" height="29" style="width: 94px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Special </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Offers" style="width: 60px; height: 21px;"><canvas width="78" height="29" style="width: 78px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Offers</cufontext></cufon></h2>
										<div class="wrapper">
											<figure class="left marg_right1"><img src="assets/img//page2_img3.jpg" alt=""></figure>
											<p class="pad_bot1"><strong class="color2">Sed ut perspiciatis</strong></p>
											<p class="pad_bot1">Lorem ipsum dolor tur adipisicing elited do eiusmod tempor incididunt.</p>
										</div>
										<div class="wrapper">
											<figure class="left marg_right1"><img src="assets/img//page2_img4.jpg" alt=""></figure>
											<p class="pad_bot1"><strong class="color2">Totam aperiam</strong></p>
											<p class="pad_bot2">Ut enim ad minim veniam, quis exercitation ullaco laboris nisi ut aliquip.</p>
										</div>
										<a href="#" class="button1">Read More</a>
									</div>
								</div>
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

$services = new servicesCont();
