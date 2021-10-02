<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
					
					<h3 class="type-card-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					
					<?php if (get_theme_mod('excerpt-length','26') != '0'): ?>
						<div class="type-card-excerpt">
							<?php the_excerpt(); ?>
						</div>
					<?php endif; ?>
					
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
			<?php if ( get_theme_mod( 'card-read-more', 'on' ) =='on' ): ?>
				<a class="type-card-more-link" href="<?php the_permalink(); ?>"><?php esc_html_e('Read more','bigvisual'); ?> <i class="fas fa-chevron-right"></i></a>
			<?php endif; ?>
		</div>
	</div>
</article>