<?php get_header(); ?>

<div class="content">
	
	<?php while ( have_posts() ): the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	

			<div class="post-wrapper group">
			
				<div class="type-card">
					<div class="type-card-inner">
						<div class="type-card-thumbnail" style="background-image:url('<?php the_post_thumbnail_url('bigvisual-large'); ?>');">
							
							<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
							<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
							<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
							
							<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
								<a class="type-card-comments" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
							<?php endif; ?>
							
							<div class="type-card-content">	
								
								<h1 class="type-card-title"><?php the_title(); ?></h1>
								
								<div class="type-card-thumbnail-bottom">
									
									<?php if ( has_category() && ( get_theme_mod( 'card-category', 'on' ) =='on' ) ): ?>
										<div class="type-card-category"><?php the_category(' '); ?></div>
									<?php endif; ?>
									
									<?php if ( get_theme_mod( 'card-avatar', 'on' ) =='on' ): ?>
										<div class="type-card-author">
											<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></a>
										</div>
									<?php endif; ?>
									
								</div>
							</div>
							
						</div>
					</div>
					
					<div class="type-card-bottom group">
						<?php if ( get_theme_mod( 'card-date', 'on' ) =='on' ): ?>
							<div class="type-card-date"><i class="far fa-calendar"></i><?php the_time( get_option('date_format') ); ?></div>
						<?php endif; ?>
						<?php do_action( 'alx_ext_sharrre' ); ?>
					</div>
				</div>
				
				<?php if (get_theme_mod('post-format','off') == 'on'): ?>
					<div class="entry-media">
						<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
					</div>
				<?php else: ?>

				<?php endif; ?>

				<div class="entry-content">
					<div class="entry themeform">	
						<?php the_content(); ?>
						<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','bigvisual'),'after'=>'</div>')); ?>
						<div class="clear"></div>				
					</div><!--/.entry-->
				</div>
				
				<?php if ( get_theme_mod( 'post-nav', 'content' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
				
				<div class="entry-footer group">
					
					<?php do_action( 'alx_ext_sharrre_footer' ); ?>
					
					<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','bigvisual').'</span> ','','</p>'); ?>
					
					<div class="clear"></div>

					<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
						<div class="author-bio">
							<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
							<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
							<p class="bio-desc"><?php the_author_meta('description'); ?></p>
							<div class="clear"></div>
						</div>
					<?php endif; ?>

					<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>

					<?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
					
				</div>
			</div>

		</article><!--/.post-->

	<?php endwhile; ?>
	
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>