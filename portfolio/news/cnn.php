<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>The News Hub - 201011356</title>
	<meta name="description" content="Advanced Interfaces ACW1">
	<meta name="author" content="201011356">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="css/style.css">

</head>
<body>

	<div id="header-container">
		<header class="wrapper clearfix">
			<h1 id="title">The News Hub</h1>
			<nav>
		</header>
	</div>
	<div id="main-container">
		<div id="main" class="wrapper clearfix">
			
			<article>
				<header>
					<h1>CNN News</h1>
					<p>RSS Feed</p>
<div id="feed">
<?php
					$rss = new DOMDocument();
	$rss->load('http://rss.cnn.com/rss/edition.rssl');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 10;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		$date = date('l F d, Y', strtotime($feed[$x]['date']));
		echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
		echo '<small><em>Posted on '.$date.'</em></small></p>';
		echo '<p>'.$description.'</p>';
	}
?>
</div>
				</header>
				<footer>
					<h3>CNN News Twitter</h3>
					
                    <a class="twitter-timeline" href="https://twitter.com/CNN" data-widget-id="276804867316649984">Tweets by @CNN</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

				
				</footer>
			</article>
			
			<aside>
			  <h3>Choose Your News:</h3>
				<p><a href="sky.php" src="images/sky.png"><img src="images/sky.png"></a><a href="cnn.php" src="images/cnn.png"><img src="images/cnn.png" ></a><a href="bbc.php" src="images/bbc.png"><img src="images/bbc.png"></a><br />
				<br />
				<a href="index.html">Return home</a><br />
				
			  </p>
			</aside>
			
		</div>
	</div>

	<div id="footer-container">
		<footer class="wrapper">
			<h3>Website created by <span>201011356</span> for Advanced Interfaces ACW1</h3>
		</footer>
	</div>

</body>
</html>
