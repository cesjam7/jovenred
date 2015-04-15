<?php get_header(); ?>
<center>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Enlaces index jovenred 728x15 -->
	<ins class="adsbygoogle"
	style="display:inline-block;width:728px;height:15px"
	data-ad-client="ca-pub-0420689494975057"
	data-ad-slot="8388854713"></ins>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</center>
<section class="cont posts">
	<?php if (have_posts()) : $c=0; ?>
		<?php while (have_posts()) : the_post(); $c++;
			if($c==1){ echo '<div class="row">';}  ?>
			<div class="column col-4">
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
					<div class="details">
						<ul>
							<li><i class="fa fa-calendar-o"></i> <?php the_date('d-m-Y'); ?></li>
							<li><i class="fa fa-comment-o"></i> <?php echo get_comments_number(); ?></li>
						</ul>
					</div>
				</div>
			</div>
		<?php if($c==3){ echo '</div>'; $c=0; }
			endwhile;
		else : ?>
		<p>No se encontraron publicaciones.</p>
	<?php endif; ?>	
	<?php wp_reset_query(); ?>
	<br>
	<?php wp_pagenavi(); ?>
	<p>&nbsp;</p>
</section>
<?php get_footer(); ?>