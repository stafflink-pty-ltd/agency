<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper py-4 text-light bg-dark" id="wrapper-footer">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-5 col-lg-6 pb-4 pb-md-0 text-center text-md-start">
				<a href="https://www.linkedin.com/company/sta-link/" title="STAFFLINK - LinkedIn" class="pr-md-4 px-3 pl-md-0 link-light" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-linkedin.svg" loading="lazy" width="25" height="25" class="mb-3 mb-lg-0" alt="linkedin"></a>
				<a href="https://www.facebook.com/stafflinkaustralia/" title="STAFFLINK - Facebook" class="pr-md-4 px-3 pl-md-0 link-light" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.svg" loading="lazy" width="25" height="25" class="mb-3 mb-lg-0" alt="Facebook"></a>
				<a href="https://www.instagram.com/stafflinkaustralia/" title="STAFFLINK - Instagram" class="pr-md-4 px-3 pl-md-0 link-light" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-instagram.svg" loading="lazy" width="25" height="25" class="mb-3 mb-lg-0" alt="instagram"></a>
				<a href="https://www.tiktok.com/@stafflinkaus" title="STAFFLINK - TikTok" class="pr-md-4 px-3 pl-md-0 link-light" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tiktok.svg" loading="lazy" width="25" height="25" class="mb-3 mb-lg-0" alt="TikTok"></a>
				<a href="https://www.pinterest.com.au/Stafflinkaus/_created/" title="STAFFLINK - Pinterest" class="pr-md-4 px-3 pl-md-0 link-light" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-pinterest.svg" loading="lazy" width="25" height="25" class="mb-3 mb-lg-0" alt="Pinterest"></a>
				<a href="https://medium.com/stafflink" title="STAFFLINK - Medium" class="pr-md-4 px-3 pl-md-0 link-light" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-medium.png" loading="lazy" width="25" height="25" class="mb-3 mb-lg-0" alt="Medium"></a>
			</div>
			<div id="privacy-policy" class="col-12 col-md-3 pb-4 pb-md-0 text-left text-center text-md-start">
				<p class="mb-0">
					<a href="/privacy-policy/" class="link-light">Privacy Policy</a>
				</p>
			</div>
			<div class="col-12 col-md-3 pb-0 text-center text-md-start">
				<p class="mb-0">
					<small class="d-block link-light">© Copyright. All rights reserved 2022.</small>
					<a class="d-block link-light text-underline" href="/real-estate-web-design/">Website by STAFFLINK Web Team</a>
				</p>
			</div>
		</div>
	</div>
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

