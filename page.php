<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();  ?>
		<section class="cont posts">
			<article class="article">
				<h1><?php the_title(); ?></h1>
				<div class="texto">
					<?php the_content(); ?>
				</div>
			</article>
			<p>&nbsp;</p>
		</section>
	<?php endwhile;
	endif; ?>	
	<?php get_footer(); ?>