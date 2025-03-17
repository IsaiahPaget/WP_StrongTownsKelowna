<?php get_header() ?>

<section class="container px-6 py-10 mx-auto">
	<div class="lg:flex">
		<div class="flex items-center justify-center w-full px-6 py-8 lg:h-[32rem] lg:w-1/2">
			<div class="max-w-xl">
				<h2 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">Build Your New <span class="text-blue-600 dark:text-blue-400">Idea</span></h2>

				<p class="mt-4 text-sm text-gray-500 dark:text-gray-400 lg:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates.</p>

				<div class="flex flex-col mt-6 space-y-3 lg:space-y-0 lg:flex-row">
					<a href="#" class="block px-5 py-2 text-sm font-medium tracking-wider text-center text-white transition-colors duration-300 transform bg-gray-900 rounded-md hover:bg-gray-700">Get Started</a>
					<a href="#" class="block px-5 py-2 text-sm font-medium tracking-wider text-center text-gray-700 transition-colors duration-300 transform bg-gray-200 rounded-md lg:mx-4 hover:bg-gray-300">Learn More</a>
				</div>
			</div>
		</div>

		<div class="w-full h-64 lg:w-1/2 lg:h-auto">
			<div class="w-full h-full rounded-lg bg-cover bg-center" style="background-image: url('<?php echo get_the_post_thumbnail_url(null, 'full'); ?>')">
			</div>
		</div>
	</div>
</section>
<section class="container px-6 py-10 mx-auto">
	<h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">explore our <br> awesome <span class="underline decoration-blue-500">Components</span></h1>

	<p class="mt-4 text-gray-500 xl:mt-6 dark:text-gray-300">
		Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quam voluptatibus
	</p>

	<div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">
		<div class="space-y-3">
			<span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
				</svg>
			</span>

			<h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Copy & paste components</h1>

			<p class="text-gray-500 dark:text-gray-300">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
			</p>

			<a href="#" class="inline-flex items-center -mx-1 text-sm text-blue-500 capitalize transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
				<span class="mx-1">read more</span>
				<svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
			</a>
		</div>

		<div class="space-y-3">
			<span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
				</svg>
			</span>

			<h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Zero Configuration</h1>

			<p class="text-gray-500 dark:text-gray-300">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
			</p>

			<a href="#" class="inline-flex items-center -mx-1 text-sm text-blue-500 capitalize transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
				<span class="mx-1">read more</span>
				<svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
			</a>
		</div>

		<div class="space-y-3">
			<span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
				</svg>
			</span>

			<h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">New Components Every month</h1>

			<p class="text-gray-500 dark:text-gray-300">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
			</p>

			<a href="#" class="inline-flex items-center -mx-1 text-sm text-blue-500 capitalize transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
				<span class="mx-1">read more</span>
				<svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
			</a>
		</div>

		<div class="space-y-3">
			<span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
				</svg>
			</span>

			<h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">elegant Dark Mode</h1>

			<p class="text-gray-500 dark:text-gray-300">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
			</p>

			<a href="#" class="inline-flex items-center -mx-1 text-sm text-blue-500 capitalize transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
				<span class="mx-1">read more</span>
				<svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
			</a>
		</div>

		<div class="space-y-3">
			<span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
				</svg>
			</span>

			<h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Easy to customiztions</h1>

			<p class="text-gray-500 dark:text-gray-300">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
			</p>

			<a href="#" class="inline-flex items-center -mx-1 text-sm text-blue-500 capitalize transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
				<span class="mx-1">read more</span>
				<svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
			</a>
		</div>

		<div class="space-y-3">
			<span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
				</svg>
			</span>

			<h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Simple & clean designs</h1>

			<p class="text-gray-500 dark:text-gray-300">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
			</p>

			<a href="#" class="inline-flex items-center -mx-1 text-sm text-blue-500 capitalize transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
				<span class="mx-1">read more</span>
				<svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
			</a>
		</div>
	</div>
</section>
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
