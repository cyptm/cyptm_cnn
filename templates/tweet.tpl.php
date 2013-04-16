<?php
/**available variables
$picture: the twitter account profile picture
$title: the twitter account name
$status: the twitter account status 
$screen_name: screen name of the twitter account
$RT: The "retweeted by..." text
***/
?>

<div class="tweet-wrapper">
	<div class="tweet-picture "><img src="<?php print $picture; ?>" alt="<?php print $title; ?>" /></div>
	<div class="tweet-content">
		<h2><?php print $title; ?></h2><span class="screen-name faded-text"> <?php print '@'.$screen_name; ?></span>
		<p><?php print $status; ?></p>
		<span class="faded-text"><?php print $RT; ?></span>
	</div>
</div>
