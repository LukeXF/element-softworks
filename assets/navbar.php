<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top navMobile">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-name" href="#">Element Softworks</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://elementsoftworks.co.uk">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="portfolio">Work</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<nav id="top-nav" class="navbar navbar-fixed-top navbar-default navComputer">
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
							} else {
								$class = "normal-tab";
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
							<?php
						foreach($navbar2 as $x => $x_value) {

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
							} else {
								$class = "normal-tab";
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
			</div>
		</div><!--CONTAINER-->
	</nav>


	<div class="wrapper">