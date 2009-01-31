<?php get_header(); ?>

<div id="y-content">


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
			<?php the_content('Read the rest of this entry'); ?>
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
