<div <?php post_class("col-sm-12"); ?>>
	<h2 class="center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<figure class="col-sm-3">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array("class"=>"img-responsive")); ?></a>
	</figure>
	<div class="col-sm-9">
		<ul class="nav navbar-nav">
			<li><i class="fa fa-server"></i> <?php the_category(' - ') ?></li>
			<li><i class="fa fa-calendar-o"></i> <?php the_date('d/m/Y'); ?></li>
			<li><i class="fa fa-comment-o"></i> <?php echo get_comments_number(); ?> comentarios</li>
		</ul>
		<div class="clearfix"></div>
		<?php the_excerpt(); ?>
		<p><a href="<?php the_permalink(); ?>">Ver artículo completo</a></p>
	</div>
</div>