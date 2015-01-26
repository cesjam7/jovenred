<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();  ?>
		<?php if ( has_post_thumbnail() ) { 
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
		$img_url = $large_image_url[0];
		$img_hg = $large_image_url[2]; ?>
		<style>
			.image div {
				background: url(<?php echo $img_url ; ?>) center top;
				height: <?php echo $img_hg ; ?>px;
				margin-top: -<?php echo $img_hg ; ?>px;
			}
		</style>
		<figure class="image">
			<?php the_post_thumbnail( 'full' ); ?>
			<div></div>
		</figure>
		<?php } ?>
		<section class="cont posts">
			<article class="article">
				<h1><?php the_title(); ?></h1>
				<div class="info">
					<ul>
						<li><i class="fa fa-calendar-o"></i> <?php the_date('d-m-Y'); ?></li>
						<?php $num_comments = get_comments_number();
						if ( comments_open() ) {
							if ( $num_comments == 0 ) {
								$comments = __('0 comentarios');
							} elseif ( $num_comments > 1 ) {
								$comments = $num_comments . __(' comentarios');
							} else {
								$comments = __('1 comentario');
							}
							$write_comments = '<li><i class="fa fa-comment-o"></i> '. $comments.'</li>';
						} else {
							$write_comments =  __('<li><i class="fa fa-comment-o"></i> Comentarios desactivados</li>');
						}
						echo $write_comments ?>
						<!--<li><i class="fa fa-pencil-square-o"></i> César Aquino Maximiliano</li>-->
					</ul>
				</div>
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