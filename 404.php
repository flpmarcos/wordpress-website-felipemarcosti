<?php get_header(); ?>
<?php if (have_posts()) the_post();?> 
		<div id="conteudo">
			<div id="conteudoContainer" class="pageWidth">
				<div id="banner"><?php echo softbis_slider('nada'); ?></div>
				<div id="conteudoBloco">
					<div style="text-align: center;">
						<img width="300" src="<?php echo get_template_directory_uri();?>/images/404.jpg" /><br />
						<h4>A página que você procura não foi encontrada.</h4>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
