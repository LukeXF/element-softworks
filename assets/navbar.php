<body>

	<nav id="top-nav" class="navbar navbar-fixed-top navbar-default">
	<div class="container navcontain">
		<button type="button" class="btn btn-navbar" style="visibility: hidden;" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

			<div class="logo-fixed hidelogo"></div>
			
			<a class="navbar-brand" href="<?php echo $domain; ?>"><?php echo $brand; ?></a>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					
					<?php
						foreach($navbar as $x => $x_value) {

							if (!empty($x_value["active"])) {
								$class = $x_value["active"];
							} else {
								$class = "";
							}

							if (!empty($x_value["url"])) {
								$url = $x_value["url"];
							} else {
								$url = $x;
							}

							if ($x == $activeTab) {
								$class = "current";
							}
							if (!empty($x_value["submenu"])) {
								echo "<li class='dropdown animate" . $class . "'>";
						

									//echo "<a class='animate'>" . $x . " <i class='fa fa-caret-down'></i></a>";
									echo "	<a href='#' class='dropdown-toggle animate' data-toggle='dropdown' role='button' aria-expanded='false'>" . $x . " 		<i class='fa fa-caret-down'></i>
											</a>
											<ul class='dropdown-menu' role='menu'><li>";

											foreach ($x_value['submenu'] as $key => $value) {
												echo "<a href='$value'>$key</a>";
											}  

										//echo "<li><a href='#''>Action</a></li>";
									echo "</li></ul>";
								echo "</li>";
								
							} else {
								echo "<li class='" . $class . "'><a class='animate' href='$url'>";
								echo $x;
								echo "</a></li>";
							}
						}
					?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="contact">Contact</a></li>
					<li><a href="login">Login</a></li>				
				</ul>
			</div>
		</div><!--CONTAINER-->
	</nav>


	<div class="wrapper">