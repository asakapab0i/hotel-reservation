<?php
include 'bookingBox.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of roomsCont
 *
 * @author Bryan's Workplace
 */
class roomsCont {

    function roomsContent() {
        echo '<!-- content -->
						<article id="content">
							<div class="box1">
								<div class="wrapper">

';
        bookingBox();
        echo '<div class="col2 pad">
										<h2><img src="./assets/img/title_marker1.jpg" alt=""><cufon class="cufon cufon-canvas" alt="Best " style="width: 44px; height: 21px;"><canvas width="67" height="29" style="width: 67px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Best </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Propositions " style="width: 121px; height: 21px;"><canvas width="144" height="29" style="width: 144px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Propositions </cufontext></cufon><cufon class="cufon cufon-canvas" alt="of " style="width: 23px; height: 21px;"><canvas width="46" height="29" style="width: 46px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>of </cufontext></cufon><cufon class="cufon cufon-canvas" alt="This " style="width: 46px; height: 21px;"><canvas width="69" height="29" style="width: 69px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>This </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Month" style="width: 64px; height: 21px;"><canvas width="79" height="29" style="width: 79px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Month</cufontext></cufon></h2>
										<div class="wrapper line1">
											<div class="col3">
												<figure class="pad_bot3"><img src="./assets/img/page3_img1.jpg" alt=""></figure>
												<p class="pad_bot1"><strong class="color3">Lorem ipsum dolor amet consectetur</strong></p>
												<p>Adipisicing elito eiusmod tempor incididunt ut labore dolore magna.</p>
												<ul class="list2">
													<li><span>2</span>Rooms</li>
													<li><span>4</span>Beds</li>
												</ul>
												<a href="#" class="button2">Book Room</a>
											</div>
											<div class="col3 pad_left2">
												<figure class="pad_bot3"><img src="./assets/img/page3_img4.jpg" alt=""></figure>
												<p class="pad_bot1"><strong class="color3">Lorem ipsum dolor amet consectetur</strong></p>
												<p>Ut enim ad minim veniam nostrud exercitation ullamco laboris nisi ut aliquip.</p>
												<ul class="list2">
													<li><span>2</span>Rooms</li>
													<li><span>4</span>Beds</li>
												</ul>
												<a href="#" class="button2">Book Room</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="pad">
								<div class="wrapper line3">
									<div class="col2">
										<h2><cufon class="cufon cufon-canvas" alt="Quality " style="width: 74px; height: 21px;"><canvas width="97" height="29" style="width: 97px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Quality </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Standards" style="width: 95px; height: 21px;"><canvas width="113" height="29" style="width: 113px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Standards</cufontext></cufon></h2>
										<p class="pad_bot1"><strong class="color2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</strong> </p>
										<p class="pad_bot1">
												Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enigm ipsam voluptatem nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus quia voluptas sit aspernatur aut odit aut fugit.</p>
										
										<div class="wrapper pad_bot2">
											<div class="col1">
												<ul class="list1">
													<li><a href="#">Inventore veritatis et quasi architecto</a></li>
													<li><a href="#">Nemo enim ipsam voluptatem quivolupta</a></li>
													<li><a href="#">Sit aspernatur aut odit aut fugit sed</a></li>
												</ul>
											</div>
											<div class="col1 pad_left1">
												<ul class="list1">
													<li><a href="#">Neque porro quisquam est, qui dolorem</a></li>
													<li><a href="#">Ipsum quia dolor amet consectetur</a></li>
													<li><a href="#">Adipisci velit, sed quia non numquam</a></li>
												</ul>
											</div>
										</div>
										<p class="pad_bot1"><strong class="color2">Duis aute irure dolorin reprehenderit in voluptate velit esse cillum dolore eu fugiat pariatur</strong></p>
										Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
									</div>
									<div class="col1 pad_left1">
										<h2><cufon class="cufon cufon-canvas" alt="The " style="width: 42px; height: 21px;"><canvas width="65" height="29" style="width: 65px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>The </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Rooms" style="width: 66px; height: 21px;"><canvas width="84" height="29" style="width: 84px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Rooms</cufontext></cufon></h2>
										<p class="pad_bot1"><strong class="color2">Nemo enim ipsam voluptatem</strong><br>Quia voluptas sit aspernatur aut odit autugit sed quia ne voluptatem nesciunt. </p>
										<figure class="pad_bot3"><img src="./assets/img/page4_img1.jpg" alt=""></figure>
										<ul class="list1 pad_bot3">
											<li><a href="#">Neque porro quisquam est qui</a></li>
											<li><a href="#">Dolorem ipsum quia dolor sit amet</a></li>
											<li><a href="#">Consectetur adipisci velit sed</a></li>
										</ul>
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

$rooms = new roomsCont();
?>
