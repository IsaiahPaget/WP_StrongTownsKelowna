<?php get_header() ?>

<section class="container px-6 py-10 mx-auto">
	<div class="text-center">
		<h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">From the blog</h1>

		<p class="max-w-lg mx-auto mt-4 text-gray-500">
			Salami mustard spice tea fridge authentic Chinese food dish salt tasty liquor. Sweet savory foodtruck
			pie.
		</p>
	</div>

	<div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2 xl:grid-cols-3">
		<?php
		$args = array(
			'post_type'      => 'post', // Change to custom post type if needed
			'posts_per_page' => 3, // Number of posts to display
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post();
				$author_id = get_the_author_meta('ID');
				$author_name = get_the_author();
				$author_avatar = get_avatar_url($author_id, ['size' => 100]); // Get author avatar
				$post_thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get featured image
		?>
				<div>
					<div class="relative">
						<img class="object-cover object-center w-full h-64 rounded-lg lg:h-80" src="<?php echo esc_url($post_thumbnail ?: 'https://via.placeholder.com/600'); ?>" alt="<?php the_title_attribute(); ?>">

						<div class="absolute bottom-0 flex p-3 bg-white dark:bg-gray-900">
							<img class="object-cover object-center w-10 h-10 rounded-full" src="<?php echo esc_url($author_avatar); ?>" alt="<?php echo esc_attr($author_name); ?>">

							<div class="mx-4">
								<h1 class="text-sm text-gray-700 dark:text-gray-200"><?php echo esc_html($author_name); ?></h1>
								<p class="text-sm text-gray-500 dark:text-gray-400">Author</p>
							</div>
						</div>
					</div>

					<h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h1>

					<hr class="w-32 my-6 text-blue-500">

					<p class="text-sm text-gray-500 dark:text-gray-400">
						<?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
					</p>

					<a href="<?php the_permalink(); ?>" class="inline-block mt-4 text-blue-500 underline hover:text-blue-400">Read more</a>
				</div>
		<?php
			endwhile;
			wp_reset_postdata();
		else :
			echo '<p>No posts found.</p>';
		endif;
		?>
	</div>
</section>

<?php get_footer() ?>
