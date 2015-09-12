<?php get_header(); ?>
<section class="cont posts">
	<h1 class="tax">Historias</h1>
		<?php query_posts(array('post_type'=>'historias', 'paged'=>$paged));
		if (have_posts()) : ?>
			<?php while (have_posts()) : the_post();  ?>
			<article <?php post_class("article" ); ?>>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="details">
						<ul>
							<li><i class="fa fa-calendar-o"></i> <?php the_date('d-m-Y'); ?></li>
							<li><i class="fa fa-comment-o"></i> <?php echo get_comments_number(); ?></li>
						</ul>
					</div>
					<div class="texto">
						<?php the_content(); ?>
					</div>
			<?php endwhile;
			else : ?>
			<p>No se encontraron publicaciones.</p>
		<p>&nbsp;</p>
		</article>
		<?php endif; ?>	
		<?php wp_reset_query(); ?>
		<br>
		<?php wp_pagenavi(); ?>
</section>
<?php get_footer(); ?>