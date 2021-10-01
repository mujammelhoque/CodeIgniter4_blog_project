<!DOCTYPE HTML>

<!--
	Skylined: A responsive HTML5 website template by HTML5Templates.com
	Released for free under the Creative Commons Attribution 3.0 license (html5templates.com/license)
	Visit http://html5templates.com for more great templates or follow us on Twitter @HTML5T
-->

<html>
<head>
<title>Skylined by HTML5Templates.com</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<noscript>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/5grid/core.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/5grid/core-desktop.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/5grid/core-1200px.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/5grid/core-noscript.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style-desktop.css" />
</noscript>
<script src="<?php echo base_url(); ?>/assets/css/5grid/jquery.js"></script>
<script src="<?php echo base_url(); ?>/assets/css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
</head><body>
<div id="wrapper">
<?php echo view("partials/header"); ?>
	<div id="page">
		<div class="5grid-layout">
			<div class="row">
				<div class="6u">
					<div class="mobileUI-main-content" id="content">
						<section>
							<div class="post">
								<h2>Three Column</h2>
								<p class="subtitle">augue praesent a lacus at urna congue rutrum</p>
								<p><a href="#"><img src="<?php echo base_url(); ?>/assets/images/pics03.jpg" alt=""></a><br>
								Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus ac magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.									Pellentesque pede. Donec pulvinar ullamcorper metus. In eu odio at lectus pulvinar mollis. Vestibulum sem magna, elementum ut, vestibulum eu, facilisis quis, arcu. Mauris a dolor. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed blandit. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc. Praesent pellentesque facilisis elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In hac habitasse platea dictumst. Nullam id ante eget dui vulputate aliquam. Pellentesque erat erat, tincidunt in, eleifend accumsan, malesuada eget, augue. Suspendisse sit amet tellus in eros bibendum condimentum. Vestibulum suscipit volutpat nulla. 
								Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. </p>
								<p class="button-style2"><a href="#">Read Full Article</a></p>
							</div>
						</section>
					</div>
				</div>
				<div class="3u" id="sidebar1">
					<section>
						<h2>sidebar 1</h2>
						<ul class="style2">
							<li class="first">
								<p class="date"><a href="#">October <b>03</b></a></p>
								<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. </a></p>
							</li>
							<li>
								<p class="date"><a href="#">September <b>30</b></a></p>
								<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
							</li>
							<li>
								<p class="date"><a href="#">September <b>30</b></a></p>
								<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
							</li>
							<li>
								<p class="date"><a href="#">September <b>30</b></a></p>
								<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
							</li>
						</ul>
					</section>
				</div>
				<div class="3u">
					<div id="sidebar2">
						<section>
							<div class="sbox1">
								<h2>sidebar 2</h2>
								<ul class="style1">
									<li class="first"><a href="#">Maecenas luctus lectus at sapien</a></li>
									<li><a href="#">Etiam rhoncus volutpat erat</a></li>
									<li><a href="#">Donec dictum metus in sapien</a></li>
									<li><a href="#">Nulla luctus eleifend purus</a></li>
									<li><a href="#">Maecenas luctus lectus at sapien</a></li>
								</ul>
							</div>
						</section>
						<section>
							<div class="sbox2">
								<h2>Nulla luctus eleifend</h2>
								<ul class="style1">
									<li class="first"><a href="#">Maecenas luctus lectus at sapien</a></li>
									<li><a href="#">Donec dictum metus in sapien</a></li>
									<li><a href="#">Integer gravida nibh quis urna</a></li>
									<li><a href="#">Etiam posuere augue sit amet nisl</a></li>
									<li><a href="#">Mauris vulputate dolor sit amet nibh</a></li>
									<li><a href="#">Nulla luctus eleifend purus</a></li>
								</ul>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo view("partials/footer"); ?>
</body>
</html>