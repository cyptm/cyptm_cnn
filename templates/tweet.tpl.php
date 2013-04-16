<?php
/**available variables
$picture: the twitter account profile picture
$title: the twitter account name
$status: the twitter account status 
$screen_name: screen name of the twitter account
$RT: The "retweeted by..." text
$time_ago: The number of minutes ago tweet was posted
***/
?>

<div class="tweet-wrapper">
	<div class="tweet-picture "><img src="<?php print $picture; ?>" alt="<?php print $title; ?>" /></div>
	<div class="tweet-content">
		<h2><a href="http://twitter.com/<?php print $screen_name; ?>"><?php print $title; ?></a></h2><span class="screen-name faded-text"> <?php print '@'.$screen_name; ?></span>
		<span class="time-ago faded-text"> <?php print $time_ago; ?></span>
		<p><?php print $status; ?></p>
		<span class="faded-text"><?php print $RT; ?></span>
	</div>
</div>
