<article class="<?php echo($post_status); ?>">
	<div class="mainelement">
		<h2 style="text-align:center;font-family:'Special Elite',serif;"><a href="<?php echo($post_link); ?>"><?php echo($post_title); ?></a></h2>
		<p>
			<strong>Written by</strong> <?php echo($post_author); ?>, <?php echo($published_date); ?> <strong>In</strong> <a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a>
		</p>
		<?php echo($post_intro); ?>
		<p style="text-align:center;padding-top:0px;">
			<a class="button" href="<?php echo($post_link); ?>">Continue Reading</a>
		</p>
	</div>
</article>
