<?php
/**
 * Template name: Page - Chính sách
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

get_header(); ?>

<?php do_action( 'flatsome_before_page' ); ?>

<div class="page-wrapper page-right-sidebar">
<div class="row">

<div class="large-3 col">
<div id="sidebar-chinh-sach" class="widget widget_nav_menu">
	<?php dynamic_sidebar( 'sidebar-chinh-sach' ); ?>
</div>
</div>
<div id="content" class="large-9 left col" role="main">
	<div class="page-inner">
		<?php if(get_theme_mod('default_title', 0)){ ?>
			<header class="entry-header">
				<h1 class="entry-title mb uppercase"><?php the_title(); ?></h1>
			</header>
		<?php } ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

			<?php if ( comments_open() || '0' != get_comments_number() ){
						comments_template(); } ?>

		<?php endwhile; // end of the loop. ?>
	</div>
</div>


</div>
</div>

<?php do_action( 'flatsome_after_page' ); ?>

<?php get_footer(); ?>
