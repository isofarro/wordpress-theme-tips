<?php get_header(); ?>

<div id="y-content">

	<?php if ( is_category() ): ?>
	<div class="mod">
		<h1 class="hd"><?php echo bloginfo('name'); ?>: <?php single_cat_title('') ?></h1>
		<p class="bd">You are currently browsing the archives for the <?php single_cat_title() ?> category.</p>
		<div class="ft"></div>	
	</div>
	<?php elseif ( is_tag() ): ?>
	<div class="mod">
		<h1 class="hd"><?php echo bloginfo('name'); ?>: <?php single_tag_title(''); ?></h1>
		<p class="bd">You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> archives for the tag <em><?php single_tag_title(''); ?></em>.</p>	
		<div class="ft"></div>	
	</div>
	<?php elseif ( is_day() ): ?>
	<div class="mod">
		<h1 class="hd"><?php echo bloginfo('name'); ?>: <?php the_time('l, F jS, Y'); ?></h1>
		<p class="bd">You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> archives for the day <?php the_time('l, F jS, Y'); ?>.</p>	
		<div class="ft"></div>	
	</div>
	<?php elseif ( is_month() ): ?>
	<div class="mod">
		<h1 class="hd"><?php echo bloginfo('name'); ?>: <?php the_time('F, Y'); ?></h1>
		<p class="bd">You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> archives for <?php the_time('F, Y'); ?>.</p>
		<div class="ft"></div>	
	</div>
	<?php elseif ( is_year() ): ?>
	<div class="mod">
		<h1 class="hd"><?php echo bloginfo('name'); ?>: <?php the_time('Y'); ?></h1>
		<p class="bd">You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> archives for the year <?php the_time('Y'); ?>.</p>	
		<div class="ft"></div>	
	</div>
	<?php elseif ( is_search() ): ?>
	<div class="mod">
		<h1 class="hd"><?php echo bloginfo('name'); ?>: '<?php the_search_query(); ?>'</h1>
		<p class="bd">You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> archives for <em>'<?php the_search_query(); ?>'</em>.</p>	
		<div class="ft"></div>	
	</div>
	<?php endif; ?>


	<?php if (have_posts()) :?>
		<?php $postCount=0; ?>
		<?php while (have_posts()) : the_post();?>
			<?php $postCount++;?>
			
	<div class="mod entry">
		<div class="hd">
			<?php if ( is_singular() ): ?>
			<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<?php else: ?>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php endif; ?>
			<span class="published">By <em><?php the_author() ?></em> on 
				<?php the_time('F jS, Y') ?>
				<?php comments_number(' - No comments', ' - One comment', ' - % comments' );?>
			</span>
		</div>
		<div class="bd">
			<?php	if ( is_singular() ) { 
					the_content('Read the rest of this entry'); 
				} else {
					the_excerpt('Read the rest of this entry');
				}	
			?>
		</div>
		<div class="ft">
			<span class="filedto">Filed in <?php the_category(', ') ?> <?php edit_post_link('Edit', ' | ', ''); ?></span>
			<?php the_tags('<span class="postedby">Tagged with ', ', ', '</span>'); ?>
		</div>
	</div>

		<?php comments_template(); ?>

		<?php endwhile; ?>


	<div class="mod navigation">
		<div class="hd"></div>
		<div class="bd">
			<div class="nav-prev"><?php next_posts_link('Previous Entries') ?></div>
			<div class="nav-next"><?php previous_posts_link('Next Entries') ?></div>
		</div>
		<div class="ft"></div>
	</div>
		
	<?php else : ?>

	<div class="mod error">
		<div class="hd">
			<h2>Not Found</h2>
		</div>
		<div class="bd">
			<p>Sorry, but you are looking for something that isn't here.</p>
		</div>
		<div class="ft"></div>
	</div>
	
	<?php endif; ?>
	
	<?php if ( is_paged() ): ?>
	<div class="mod navigation">
		<div class="hd"></div>
		<div class="bd">
			<div class="nav-prev"><?php next_posts_link('Previous Entries') ?></div>
			<div class="nav-next"><?php previous_posts_link('Next Entries') ?></div>
		</div>
		<div class="ft"></div>
	</div>
	<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
