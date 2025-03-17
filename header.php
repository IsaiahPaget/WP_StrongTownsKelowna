<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initialized">
	<?php wp_head() ?>
</head>

<body>
	<header class="" style="background-image: url('<?php echo get_the_post_thumbnail_url(null, 'full'); ?>');">
		<nav class="">
			<h1><?php the_title(); ?></h1>
		</nav>
		<div class="">
			lorem ispum
		</div>
	</header>
