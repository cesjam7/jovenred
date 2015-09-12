<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();  ?>
		<section <?php post_class("row posts"); ?>>
			<article class="article col-sm-12">
				<h1><?php the_title(); ?></h1>
				<div class="texto">
					<?php the_content(); ?>
				</div>
							<p>&nbsp;</p>
						<?php comments_template(); ?>
							<p>&nbsp;</p>
			</article>
		</section>
	<?php endwhile;
	endif; ?>	
	<?php get_footer(); ?>