<article class="single <?php echo($post_status); ?>">
    <div class="mainelement">
        <h1><?php echo($post_title); ?></h1>
		<?php echo($post_content); ?>
		<div style="margin-top:20px;">
			<img src="<?php echo get_twitter_profile_img($blog_twitter); ?>" alt="profile" style="height:auto;width:57px;border-radius:50%;float:left;margin-right:10px;" />
			<p>Written by <?php echo($post_author); ?><br />
			<?php echo($published_date); ?><br />
			In <a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a></p>
		</div>
		<p style="text-align:center;">
			<a class="button" href="https://twitter.com/intent/tweet?screen_name=<?php echo($post_author_twitter); ?>&text=Re:%20<?php echo($post_link); ?>%20" data-dnt="true">Tweet me about this</a>
		</p>
		<p style="text-align:center;">
			<a class="button" href="https://twitter.com/intent/tweet?text=&quot;<?php echo($post_title); ?>&quot;%20<?php echo($post_link); ?>%20via%20&#64;<?php echo($post_author_twitter); ?>" data-dnt="true">Share on Twitter</a>
		</p>
		<p style="text-align:center;">
			<a class="button" href="<?php echo($blog_url); ?>">Home</a>
		</p>

		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
</article>
