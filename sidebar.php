

<div id="y-related">

	<div class="mod">
		<h2 class="hd">Pages</h2>
		<ul class="bd">
			<li><a href="<?php echo get_settings('home'); ?>/">Home</a></li>
			<?php wp_list_pages('title_li='); ?> 
		</ul>
		<div class="ft"></div>
	</div>
	
	<div class="mod">
		<h2 class="hd">Categories</h2>
		<ul class="bd">
			<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
		</ul>
		<div class="ft"></div>
	</div>

	<?php wp_list_bookmarks('title_before=<h2 class="hd">&title_after=</h2><div class="bd">&category_before=<div class="mod">&category_after=</div><div class="ft"></div></div>'); ?>

</div>
