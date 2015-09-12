<?php get_header(); ?>
<section class="row">
	<h1 class="tax"><?php wp_title(''); ?></h1>
	<?php adsense_lineal(); ?>
	<?php if (have_posts()) : $c=0; ?>
		<?php while (have_posts()) : the_post(); $c++;

		if(has_post_format( 'image' )){
			get_template_part( 'content', 'image' );
		}elseif (!get_the_post_thumbnail()) {
			get_template_part( 'content', 'text' );
		}else{
			get_template_part( 'content', 'estandar' );
		}

		endwhile;
		else : ?>
		<p>No se encontraron publicaciones.</p>
	<?php endif; ?>	
	<?php wp_reset_query(); ?>
</section>
<?php wp_pagenavi(); ?>
<p>&nbsp;</p>
<?php get_footer(); ?>