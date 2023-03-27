<html>
    <head>
           <title>Agun Adventure</title>
           <link href="logo.png" rel="shortcut icon" />
           <link href="new.css" rel="stylesheet" type="text/css"> 
    </head>
    <body>
        <div class="header">
            <div class="name-web"></div>
        </div>    
        <div class="selipan"> 
            <ul class="menu">
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="#">Info Gunung</a>
						<ul>
							<li><a href="index.php?page=kerinci">Gunung Kerinci</a></li>
							<li><a href="index.php?page=raung">Gunung Raung</a></li>
							<li><a href="index.php?page=bukitraya">Gunung Bukit Raya</a></li>
							<li><a href="index.php?page=latimojong">Gunung Latimojong</a></li>
							<li><a href="index.php?page=rinjani">Gunung Rinjani</a></li>
							<li><a href="index.php?page=jayawijaya">Gunung Jayawijaya</a></li>
						</ul>	
                    </li>
                    
                    <li><a href="index.php?page=peraturan">Peraturan</a></li>
                    <li><a href="index.php?page=tentang">Tentang</a></li>
					<li><a href="index.php?page=booking">Booking tiket</a></li>
                    <li><a href="index.php?page=contact">Contact Us</a></li>
            </ul>
        </div>
        <div id="tempat">
			<!-- bates atas -->
				<?php 
				if($_REQUEST['page'] == 'home' || $_REQUEST['page'] == '') {
					include 'menu/home.php';
				}
				else if($_REQUEST['page'] == 'booking') {
					include 'menu/booking.php';
				}
				else if($_REQUEST['page'] == 'processbooking') {
					include 'menu/processbooking.php';
				}
				else if($_REQUEST['page'] == 'processcontact') {
					include 'menu/processcontact.php';
				}
				else if($_REQUEST['page'] == 'contact') {
					include 'menu/contact.php';
				}
				else if($_REQUEST['page'] == 'peraturan') {
					include 'menu/peraturan.php';
				}
				else if($_REQUEST['page'] == 'tentang') {
					include 'menu/tentang.php';
				}
				else if($_REQUEST['page'] == 'kerinci') {
					include 'menu/kerinci.php';
				}
				else if($_REQUEST['page'] == 'raung') {
					include 'menu/raung.php';
				}
				else if($_REQUEST['page'] == 'bukitraya') {
					include 'menu/bukitraya.php';
				}
				else if($_REQUEST['page'] == 'latimojong') {
					include 'menu/latimojong.php';
				}
				else if($_REQUEST['page'] == 'rinjani') {
					include 'menu/rinjani.php';
				}
				else if($_REQUEST['page'] == 'jayawijaya') {
					include 'menu/jayawijaya.php';
				}
				else {
					include 'menu/home.php';
				}
				?>
			<!-- bates ke footer -->
           <div class="clearer"></div>
            <div id="footer-atas">
                <div class="footer-widget">
                    <img src="img/logo.png" style="width:280px;" alt="" />
                </div>
                <div class="footer-widget">
                    <h3>Temukan kami</h3>
                    <a href="http://twitter.com"><img src="img/social/twitter.png" class="social"></a>
                    <a href="http://facebook.com"><img src="img/social/facebook.png" class="social"></a>
                    <a href="http://tumblr.com"><img src="img/social/tumblr.png" class="social"></a>
                    <a href="http://instagram.com"><img src="img/social/instagram.png" class="social"></a>
                    <a href="http://youtube.com"><img src="img/social/youtube.png" class="social"></a> 
				</div>
                <div class="footer-widget" style="margin:0; width:270px">
                    <h3>Alamat</h3>
                        Agun Adventure <br>
                        Jl. Palmerah barat no.7-8 Jakarta barat, Indonesia<br>
                        Tel.02194011510 / 089691051014<br>
                        Email Info@agunadventure.com
                </div>
                <div class="clearer"></div>
			</div>
           <div class="footer-bawah">
               &copy; 2014 All Rights Reserved
           </div>
		</div>		
    </body>
</html>