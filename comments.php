<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p class="nocomments">This post is password protected. Enter the password to view comments.<p>
				
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
		$commNo     = 1;
?>

<?php if ($comments) : ?>

<div class="mod comments">
	<h3 class="hd" id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>
	<ol class="bd commentlist">
	<?php foreach ($comments as $comment) : ?>
		<li class="mod <?php echo $oddcomment; ?>" id="comment-<?php echo $commNo; ?>">
			<div class="hd">
				<em><?php echo $commNo; ?></em>
				<span class="author">
					<cite><?php comment_author_link() ?></cite> says:
					<?php if ($comment->comment_approved == '0') : ?>
					<em>(Your comment is awaiting moderation.)</em>
					<?php endif; ?>
				</span>
				<span class="meta">
					<a href="#comment-<?php echo $commNo; ?>"><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('edit','',''); ?>
				</span>
			</div>
			<div class="bd">
				<?php comment_text() ?>
			</div>
			<div class="ft"></div>
		</li>
	<?php /* Changes every other comment to a different class */	
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
		
		// Increment the comment number
		$commNo++;
	?>
	<?php endforeach; /* end for each comment */ ?>
	</ol>
	<div class="ft"></div>
</div>

<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<div class="mod">
			<div class="hd"></div>
			<div class="bd">
				<p class="nocomments">Comments are closed.</p>
			</div>
			<div class="ft"></div>
		</div>		
	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<div class="mod reply">
	<h3 class="hd" id="respond">Add a comment or reply</h3>
	<div class="bd">
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>
<?php if ( $user_ID ): ?>
		<span>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. (<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout">Logout</a>)</span>
<?php endif; ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( !$user_ID ) : ?>
<div>
	<label for="author">Name <?php if ($req) echo "(required)"; ?></label><br />
	<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" />
</div>

<div>
	<label for="email">Mail (will not be published) <?php if ($req) echo "(required)"; ?></label><br />
	<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" />
</div>

<div>
	<label for="url">Website</label><br />
	<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" />
</div>

<?php endif; ?>

<div>
	<label for="comment">Comment</label><br />
	<textarea name="comment" id="comment" cols="78" rows="10"></textarea>
</div>

<div>
	<input name="submit" type="submit" id="submit" value="Submit Comment" />
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	<?php do_action('comment_form', $post->ID); ?>
</div>
</form>

<?php endif; // If registration required and not logged in ?>
	</div>
	<div class="ft"></div>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
