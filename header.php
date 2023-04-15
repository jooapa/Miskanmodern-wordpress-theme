<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(' '); if(wp_title(' ', false)) { echo ' | '; } bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <script language="JavaScript" src="<?php bloginfo('template_url'); ?>/teemanjavascript.js"></script>
	<?php wp_head(); ?>
</head>
<body>

<div id="header">
	<div class="widthlimiter">
		<div>
			<span id="description">
				<?php bloginfo('description'); ?>
			</span>
		</div>
			<h1><?php bloginfo('name'); ?></h1>
	</div>
</div>
<!-- <div id="menu2">
	<div class="widthlimiter">
		<ul id="hj_NavId">
			<?php wp_list_pages('title_li=')?>
		</ul>
	</div>
</div> -->

<div id="menu">
	<div class="widthlimiter">
		<ul id="hj_NavId">
			<?php wp_list_pages('title_li=')?>
		</ul>
	</div>
</div>

<div id="content">
	<div class="widthlimiter">
