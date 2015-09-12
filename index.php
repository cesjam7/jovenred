<?php get_header();
adsense_lineal(); ?>
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="text" class="form-control" name="s" id="s" placeholder="Ingrese su término de búsqueda si no encuentras lo que buscas">
		<span class="input-group-btn">
			<input type="submit" class="btn btn-primary" value="Buscar" />
		</span>
	</div>
</form>
<section class="row">
	<div class="col-md-10 col-md-offset-1">
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
	</div>
</section>
<?php wp_pagenavi(); ?>
<p>&nbsp;</p>
<?php get_footer(); ?>