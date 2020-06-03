<header>
	<a href="Main.php"><img src="img/humber.png" width="200px" height="50px" id="logo"></a>
	<nav id="headernav">
		<ul>
			<?php
			 $links=["ConcernForm"=>"Main.php","Contactus"=>"Contactus.php","Student Support"=>"ssupprt.php","OfficeHOurs"=>"OfficeHours.php","Home"=>"home.php"];
				 echo display_navigation($links);
				 

			?>
			</ul>
	</nav>
</header>