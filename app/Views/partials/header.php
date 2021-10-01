<div id="header-wrapper">
		<header id="header">
			<div class="5grid-layout">
				<div class="row">
					<div class="12u" id="logo"> <!-- Logo -->
						<h1><a href="#" class="mobileUI-site-name">Skylined</a></h1>
						<p>by HTML5Templates.com</p>
					</div>
				</div>
			</div>
			<div class="5grid-layout">
				<div class="row">
					<div class="12u" id="menu">
						<nav class="mobileUI-site-nav">
							<ul>
								<li class="current_page_item"><a href="<?php echo base_url(); ?>">Main</a></li>
								<!-- <li><a href="threecolumn.html">Three Column</a></li> -->
								<li><?php echo anchor("home","Home",['class'=>'active','title'=>'Home Page']); ?></li>
								<!-- <li><a href="home">Home</a></li> -->
								<li><?php echo anchor("threecolumn","Three Column"); ?></li>
								<li><?php echo anchor("twocolumn1","Two Column #1"); ?></li>
								<li><?php echo anchor("twocolumn2","Two Column #2"); ?></li>
								<li><?php echo anchor("onecolumn","One Column"); ?></li>
								<li><?php echo anchor("test","Test"); ?></li>
								<!-- <li><a href="twocolumn1.html">Two Column #1</a></li>
								<li><a href="twocolumn2.html">Two Column #2</a></li>
								<li><a href="onecolumn.html">One Column</a></li> -->
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<div class="5grid-layout">
			<div class="row">
				<div id="banner" class="12u">
					<div class="container"><a href="#"><img src="<?php echo base_url(); ?>/assets/images/pics01.jpg" alt=""></a></div>
				</div>
			</div>
		</div>
	</div>