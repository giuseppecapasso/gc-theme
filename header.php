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

	<!-- drawer component -->
	<div id="drawer-example" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label">
		<h5 id="drawer-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>Info</h5>
		<button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
			<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
			<span class="sr-only">Close menu</span>
		</button>
		<p class="mb-6 text-sm text-gray-500 dark:text-gray-400">Supercharge your hiring by taking advantage of our <a href="#" class="text-blue-600 underline dark:text-blue-500 hover:no-underline">limited-time sale</a> for Flowbite Docs + Job Board. Unlimited access to over 190K top-ranked candidates and the #1 design job board.</p>
		<div class="grid grid-cols-2 gap-4">
			<a href="#" class="px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Learn more</a>
			<a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get access <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
		</div>
	</div>

	<header class="sticky top-0 z-30 w-full bg-white dark:bg-slate-900 shadow-xl shadow-blue-600/20 ">
		<button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example" aria-controls="drawer-example">
			Show drawer
		</button>

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