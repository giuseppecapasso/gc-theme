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

	<header>

		<div class="mx-auto container">
			<div class="lg:flex lg:justify-between lg:items-center border-b py-6">
				<div class="flex justify-between items-center">
					<div>
						<?php if (has_custom_logo()) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
								<?php echo get_bloginfo('name'); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo('description'); ?>
							</p>

						<?php } ?>

						<button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg p-2" >
							<svg id="iconLight" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="w-5 fill-slate-500 hidden">
								<rect x="15" y="2" width="2" height="5"/>
								<rect x="21.6675" y="6.8536" width="4.958" height="1.9998" transform="translate(1.5191 19.3744) rotate(-45)"/>
								<rect x="25" y="15" width="5" height="2"/>
								<rect x="23.1466" y="21.6675" width="1.9998" height="4.958" transform="translate(-10.0018 24.1465) rotate(-45)"/>
								<rect x="15" y="25" width="2" height="5"/>
								<rect x="5.3745" y="23.1466" width="4.958" height="1.9998" transform="translate(-14.7739 12.6256) rotate(-45)"/>
								<rect x="2" y="15" width="5" height="2"/>
								<rect x="6.8536" y="5.3745" width="1.9998" height="4.958" transform="translate(-3.253 7.8535) rotate(-45)"/>
								<path d="M16,12a4,4,0,1,1-4,4,4.0045,4.0045,0,0,1,4-4m0-2a6,6,0,1,0,6,6,6,6,0,0,0-6-6Z"/>
							</svg>

							<svg id="iconDark" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="w-5 fill-slate-500 hidden">
								<path d="M27,18a.9986.9986,0,0,1-.5415-.1594L22,14.9688l-4.4585,2.8718a1,1,0,0,1-1.5088-1.095l1.35-5.1318L14.3105,8.69a1,1,0,0,1,.5508-1.7146l4.3745-.6128,1.8663-3.8032A1.0008,1.0008,0,0,1,21.9878,2a1.0171,1.0171,0,0,1,.8989.5378L24.88,6.3625l4.2622.6133A1,1,0,0,1,29.69,8.69l-3.0723,2.9239,1.35,5.1318A1,1,0,0,1,27,18Zm-5-5.2207a.999.999,0,0,1,.5415.1594l2.8369,1.8272-.8457-3.2149a1.0006,1.0006,0,0,1,.2778-.9787l2.0074-1.91-2.73-.3929a.9994.9994,0,0,1-.7441-.5275L22.0269,5.2151,20.7979,7.72a1.0008,1.0008,0,0,1-.7593.55L17.19,8.6687l2,1.9036a1.0006,1.0006,0,0,1,.2778.9787l-.8457,3.2149,2.8369-1.8272A.999.999,0,0,1,22,12.7793Z"/>
								<path d="M15.8169,30A13.8137,13.8137,0,0,1,9.0752,4.1277a1,1,0,0,1,1.3613,1.3611A11.8091,11.8091,0,0,0,26.5107,21.5635a1,1,0,0,1,1.3619,1.3611A13.8411,13.8411,0,0,1,15.8169,30ZM7.3271,7.9727a11.81,11.81,0,0,0,16.7,16.7,13.8086,13.8086,0,0,1-16.7-16.7Z"/>
							</svg>
						</button>
					</div>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>

				<?php
                    wp_nav_menu([
                            'container_id'    => 'primary-menu',
                            'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
                            'menu_class'      => 'lg:flex lg:-mx-4',
                            'theme_location'  => 'primary',
                            'li_class'        => 'lg:mx-4',
                            'fallback_cb'     => false,
                    ]);
?>
			</div>
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

		<script>
			if(!('color-theme' in localStorage)){
				if(window.matchMedia('(prefers-color-scheme: dark)').matches) {
					document.documentElement.classList.add('dark');
					localStorage.setItem('color-theme', 'dark');
					document.getElementById('iconDark').classList.remove('hidden');
				} else {
					localStorage.setItem('color-theme', 'light');
					document.getElementById('iconLight').classList.remove('hidden');
				}
			} else{
				if (localStorage.getItem('color-theme') === 'light') {
					localStorage.setItem('color-theme', 'light');
					document.getElementById('iconDark').classList.remove('hidden');
				} else {
					document.documentElement.classList.add('dark');
					localStorage.setItem('color-theme', 'dark');
					document.getElementById('iconLight').classList.remove('hidden');
				}
			}

			function themeToggle() {
					if (localStorage.getItem('color-theme') === 'light') {
						document.documentElement.classList.add('dark');
						localStorage.setItem('color-theme', 'dark');
						document.getElementById('iconLight').classList.remove('hidden');
						document.getElementById('iconDark').classList.add('hidden');
					} else {
						document.documentElement.classList.remove('dark');
						localStorage.setItem('color-theme', 'light');
						document.getElementById('iconDark').classList.remove('hidden');
						document.getElementById('iconLight').classList.add('hidden');
					}
			}
			document.getElementById('theme-toggle').addEventListener('click', themeToggle);
	</script>