<?php get_header(); ?>
<section class="cont posts">
	<article class="article">
	<h1 class="tax">Historias</h1>
		<?php query_posts(array('post_type'=>'historias', 'paged'=>$paged));
		if (have_posts()) : ?>
			<?php while (have_posts()) : the_post();  ?>
				<div class="historia">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="info">
						<ul>
							<li><i class="fa fa-calendar-o"></i> <?php the_date('d-m-Y'); ?></li>
							<li><i class="fa fa-comment-o"></i> <?php echo get_comments_number(); ?></li>
						</ul>
					</div>
				</div>
			<?php endwhile;
			else : ?>
			<p>No se encontraron publicaciones.</p>
		<?php endif; ?>	
		<?php wp_reset_query(); ?>
		<br>
		<?php wp_pagenavi(); ?>
		<p>&nbsp;</p>
	</article>
</section>
<?php get_footer(); ?>