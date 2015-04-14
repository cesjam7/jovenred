<?php get_header(); ?>
<section class="cont posts">
	<h1 class="tax"><?php wp_title(''); ?></h1>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post();  ?>
			<div class="post">
				<div class="category"><?php the_category(' - ') ?></div>
				<figure><a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) { 
						the_post_thumbnail('thumbnail'); 
					}else{
						$category = get_the_category(); ?>
						<img src="<?php bloginfo('template_directory'); ?>/images/category/<?php echo $category[0]->slug.".png"; ?>" alt="<?php echo $category[0]->name; ?>">
					<?php } ?>
				</a></figure>
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
</section>
<?php get_footer(); ?>