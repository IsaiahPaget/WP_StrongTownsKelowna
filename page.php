<?php get_header() ?>

<?php
while (have_posts()) {
	the_post();
?>
	<div>
		<h2><?php the_title() ?></h2>
		<p>
			<?php the_content() ?>
		</p>
	</div>
<?php
}
?>

<?php get_footer() ?>
