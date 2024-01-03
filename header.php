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

	<?php get_template_part('template-parts/layouts/drawer'); ?>

	<header class="bg-opacity-50 backdrop-blur-sm sticky top-0 z-10 w-full bg-white border-b border-neutral-200 dark:bg-slate-900 dark:bg-opacity-80 dark:border-slate-700">
		<!-- LOADING BAR -->
		<div class="h-0.5 w-full bg-neutral-200 dark:bg-slate-900">
			<div class="h-0.5 bg-primary" style="width: 50%"></div>
		</div>
		<!-- FINE LOADING BAR -->

		<div class="xs:px-5 sm:px-4">
			<div class="flex mx-auto max-w-8xl">
				<div class="flex justify-between w-full">
					<button class="lg:hidden p-3 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg" id="primary-menu-toggle" data-drawer-target="main-drawer" data-drawer-show="main-drawer" aria-controls="main-drawer"	>
						<svg viewBox="0 0 20 20" class="w-5 h-5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
								<g id="icon-shape">
									<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"></path>
								</g>
							</g>
						</svg>
					</button>

					<?php if (has_custom_logo()) { ?>
						<?php the_custom_logo(); ?>
						<?php } else { ?>
							<div>
								<a href="<?php echo get_bloginfo('url'); ?>" class="text-xl font-extrabold text-blue-600 dark:text-white">
									<?php echo get_bloginfo('name'); ?>
								</a>
								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo('description'); ?>
								</p>
							</div>
						<?php } ?>		

					<!-- MENU PRINCIPALE -->
					<div class="hidden items-center lg:inline-flex">
						<!-- <ul class="space-x-2">
							<?php wp_nav_menu(['container_id' => 'primary-menu','menu_class' => 'lg:flex lg:-mx-4','theme_location' => 'primary','li_class' => 'px-4 py-2 font-semibold rounded','fallback_cb' => false]); ?>
						</ul> -->
						<?php get_template_part('template-parts/layouts/mainMenu'); ?>
					</div>
					<!-- FINE MENU PRINCIPALE -->
					
					<button data-dropdown-toggle="dropDownMenu" class="p-3 lg:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg" type="button"> 
						<svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
					</button>
				</div>
			</div>
		</div>

		<?php get_template_part('template-parts/layouts/dropdownMenu'); ?>

		<?php if (is_single()) { ?>
			<div class="h-0.5 w-full bg-white bg-opacity-50 backdrop-blur-sm dark:bg-slate-900">
				<div class="h-0.5 bg-primary" id="progressbar" style="width: 0%"></div>
			</div>
		<?php } ?>
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

	<script>
		document.addEventListener("scroll", function() {
			document.getElementById("progressbar").style = `width: ${window.scrollY / (document.documentElement.scrollHeight - document.documentElement.clientHeight) * 100}%`
		})
	</script>