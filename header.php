<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class('antialiased text-gray-900 dark:text-slate-400 bg-white dark:bg-slate-900'); ?>>

<?php do_action('tailpress_site_before'); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action('tailpress_header'); ?>

	<header class="sticky top-0 z-30 w-full bg-white dark:bg-slate-900 shadow-xl shadow-blue-600/20 ">
	<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown button <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
	<!-- Dropdown menu -->
	<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
			<ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
				<li>
					<a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
				</li>
				<li>
					<a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
				</li>
				<li>
					<a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
				</li>
				<li>
					<a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
				</li>
			</ul>
	</div>
		<div class="px-2 py-2 sm:px-4">
			<div class="flex items-center justify-between mx-auto max-w-8xl">
				<div>
					<?php if (has_custom_logo()) { ?>
						<?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo('url'); ?>" class="text-2xl font-extrabold text-blue-600 dark:text-white">
								<?php echo get_bloginfo('name'); ?>
							</a>
							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo('description'); ?>
							</p>
							<?php } ?>
						</div>

				<?php get_template_part('template-parts/layouts/darkToggle'); ?>

				<div class="flex items-center space-x-1">
					<ul class="hidden space-x-2 lg:inline-flex">
						<?php
                                            wp_nav_menu([
                                                            'container_id'    => 'primary-menu',
                                                            'container_class' => 'hidden space-x-2 md:inline-flex',
                                                            'menu_class'      => 'lg:flex lg:-mx-4',
                                                            'theme_location'  => 'primary',
                                                            'li_class'        => 'px-4 py-2 font-semibold rounded',
                                                            'fallback_cb'     => false,
                                            ]);
?>

					</ul>
					<div class="inline-flex lg:hidden">
						<button class="flex-none px-2" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
									xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
												id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
							<span class="sr-only">Open Menu</span>
						</button>
						<!-- <div class="absolute top-0 left-0 right-0 z-50 flex flex-col p-2 pb-4 m-2 space-y-3 bg-white rounded shadow" x-show.transition="open">
							<button class="self-end flex-none px-2 ml-2">
								<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
								</svg>
								<span class="sr-only">Close Menu</span>
							</button>
							<ul class="space-y-2">
								<?php
                                        wp_nav_menu([
                                                                                            'container_id'    => 'primary-menu',
                                                                                            'container_class' => '',
                                                                                            'menu_class'      => 'lg:flex lg:-mx-4',
                                                                                            'theme_location'  => 'primary',
                                                                                            'li_class'        => 'px-4 py-2 font-semibold rounded',
                                                                                            'fallback_cb'     => false,
                                        ]);
?>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<div class="sticky h-1 w-full bg-neutral-200 dark:bg-neutral-600">
			<div class="h-1 bg-primary" style="width: 50%"></div>
		</div>
	</header>

	<div id="content" class="site-content flex-grow">
		<?php if (is_front_page()) { ?>
			<!-- Start introduction -->
			<div class="container mx-auto">
				<div class="px-12 py-16 my-12 rounded-xl bg-gradient-to-r from-blue-50 from-10% via-sky-100 via-30% to-blue-200 to-90%">
						<div class="mx-auto max-w-screen-md">
								<h1 class="text-3xl lg:text-6xl tracking-tight font-extrabold text-gray-800 mb-6">Start building your next <a href="https://tailwindcss.com" class="text-secondary">Tailwind CSS</a> flavoured WordPress theme
										with <a href="https://tailpress.io" class="text-primary">TailPress</a>.</h1>
								<p class="text-gray-600 text-xl font-medium mb-10">TailPress is your go-to starting
										point for developing WordPress themes with Tailwind CSS and comes with basic block-editor support out
										of the box.</p>
								<a href="https://github.com/jeffreyvr/tailpress"
										class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">View
										on GitHub</a>
						</div>
				</div>
			</div>
			<!-- End introduction -->
		<?php } ?>

		<?php do_action('tailpress_content_start'); ?>

		<main>