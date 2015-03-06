<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>


			<section class="entry-content">
				<?php the_post_thumbnail('rectangle'); ?>
				
				<div class="contentContainer">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="entry-title">
		        <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
		          <?php the_title(); ?>
		        </a>
		        <span class="byline">Written by <?php echo get_the_author_link(); ?> on <?php echo the_date(); ?></span>
		        <img class="divide" src="<?php bloginfo('template_directory'); ?>/img/heart.svg" alt="">
		      </h2>
				<?php the_excerpt(); ?>
				<?php wp_link_pages( array(
		          'before' => '<div class="page-link"> Pages:',
		          'after' => '</div>'
		        )); ?>

		        <p class="tags"><?php the_tags('<span>Tags</span>', ' | '); ?></p> 
		        <p class="tags"><span>Categories</span><?php the_category(' | '); ?></p>
<!-- 		        <p><?php comments_popup_link('Respond to this post &raquo;', '1 Response &raquo;', '% Responses &raquo;'); ?></p> -->
        		</div><!-- /.contentContainer -->
			</section><!-- .entry-content -->

			<footer>
        <!-- <p><?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p> -->
			</footer>


		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
