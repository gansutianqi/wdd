<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

	<div class="container">

		<?php if ( is_singular( get_post_type() ) ) { ?>

			<a class="title" href="<?php the_permalink(); ?>"> <?php the_title( '<h2>', '</h2>' ); ?> </a>

			<div class="article-meta">
				<?php printf( __( 'Video published by <a href="%2$s">%1$s</a> on <time>%3$s</time>', 'kichu' ), get_the_author(), get_author_posts_url(get_the_author_meta( 'ID' )), get_the_time( get_option( 'date_format' ) ) ); ?>
			</div>

			<div class="content">
				<?php the_content(); ?>
			</div>

			<div class="article-meta-format">
				<?php wp_link_pages('before=<spam id="page-links">' . __( 'Pages:', 'kichu' ) . ' &after=</spam>'); ?>
				<span class="entry-categories"><?php _e('Categories:','kichu'); ?> <?php the_category(', '); ?></span>
				<span class="entry-tags"><?php the_tags(__( 'Tags: ', 'kichu' ) , ', '); ?> </span>
			</div>

		<?php } else { ?>

			<a class="title" href="<?php the_permalink(); ?>"> <?php the_title( '<h2>', '</h2>' ); ?> </a>

			<div class="content">
				<?php echo ( $video = kichu_post_format_tools_get_video() ); ?>
				<?php if ( has_excerpt() ) : ?>
					<?php the_excerpt(); ?>
				<?php elseif( empty( $video ) ) : ?>
					<?php the_content("Continue reading " . get_the_title()); ?>
				<?php endif; ?>
			</div>

			<div class="article-meta-format">
				<?php printf( __( 'Video published by <a href="%2$s">%1$s</a> on <time>%3$s</time> | <a href="%4$s">Permalink</a>', 'kichu' ), get_the_author(), get_author_posts_url(get_the_author_meta( 'ID' )), get_the_time( get_option( 'date_format' ) ), get_the_permalink() ); ?>
			</div>

		<?php } ?>

	</div>

</article>