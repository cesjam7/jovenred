<?php get_header(); ?>
<section class="cont posts">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post();  ?>
			<div class="post">
				<div class="category"><?php the_category(' - ') ?></div>
				<figure>
					<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { 
						the_post_thumbnail('thumbnail'); 
					} ?></a>
				</figure>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div><span class="date"><i class="fa fa-calendar-o"></i> <?php the_date('d-m-Y'); ?></span></div>
			</div>
		<?php endwhile;
		else : ?>
		<p>No se encontraron publicaciones.</p>
	<?php endif; ?>	
	<?php wp_reset_query(); ?>
	<br>
	<?php wp_pagenavi(); ?>
	<p>&nbsp;</p>
</section>
<?php get_footer(); ?>