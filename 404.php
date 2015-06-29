<?php get_header(); ?>
<section class="row posts">
	<article class="article col-sm-12">
		<h1>Página no encontrada :(</h1>
		<div class="texto">
			<?php $frases = array(
				"Posiblemente una capa de invisibilidad ocultó la página. Puedes usar nuestro buscador mientras usamos un giratiempo para ver qué fue lo que paso.",
				"¿Estás seguro que ésta es la página que deseas? Ahora estoy atendiendo un incendio y no puedo ayudarte, pero puedes usar el buscador para intentar encontrar tu página.",
				"La página que buscas fue borrado por Walter White para que no descubran su laboratorio secreto de Metanfetamina. Usa el buscador para encontrar la página y descubrirlo.",
				"Los Cullen acaban de volver a Forks y han borrado todo rastro de su anterior vida, quizá ahí borraron también esta página. Igual te dejo el buscador para que puedas buscar lo que necesites.");
			$frase_aleatoria = array_rand($frases);
			?>
			<p><?php echo $frases[$frase_aleatoria]; ?><br>&nbsp;</p>
			<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div class="input-group input-group-lg">
					<input type="text" class="form-control" name="s" id="s" placeholder="Ingresa tu búsqueda">
					<span class="input-group-btn">
						<input type="submit" class="btn btn-primary" value="Buscar" />
					</span>
				</div>
			</form>
		</div>
		<p>&nbsp;</p>
	</article>
</section>
<?php get_footer(); ?>