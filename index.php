<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title><?php echo($page_title); ?> - Dropplet</title>
        
        <?php echo($page_meta); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>style.css">
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>subdiv.css">
		<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
        
        <?php get_header(); ?>
    </head>

    <body>
        <?php if($is_home) { ?>
			<div style="height:60%;width:50%;top:0px;margin-left:auto;margin-right:auto;margin-bottom:20px;display:table;">
				<div style="display:table-row;">
					<div style="display:table-cell;vertical-align:middle;">
						<div style="width:240px;margin-left:auto;margin-right:auto;">
							<img src="<?php echo get_twitter_profile_img($blog_twitter); ?>" alt="profile" style="height:auto;border-radius:50%;" />
						</div>
					</div>
				</div>
				<div style="display:table-row;">
					<div style="display:table-cell;vertical-align:bottom;">
						<h1><?php echo($intro_title); ?></h1>
						<div style="text-align:center;">
							<p><?php echo($intro_text); ?><br />
							<a href="http://twitter.com/<?php echo($blog_twitter); ?>">&#64;<?php echo($blog_twitter); ?></a> - <a href="mailto:<?php echo($blog_email); ?>?subject=Hello">email</a>
						</div>
					</div>
				</div>
			</div>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<?php } ?>
        
        <?php echo($content); ?>
        
        <?php get_footer(); ?>
        
        <p style="text-align:center;margin-bottom:10px;">
			<a href="<?php echo($blog_url); ?>"><?php echo($blog_title); ?> - Dropplet</a>
		</p> 
    </body>
</html>
