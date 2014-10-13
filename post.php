<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Deskripsi Blog">
<meta name="author" content="Judul Blog">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="omfgitsasalmon">
<meta name="twitter:title" content="Simple Blog">
<meta name="twitter:description" content="Deskripsi Blog">
<meta name="twitter:creator" content="Simple Blog">
<meta name="twitter:image:src" content="{{! TODO: ADD GRAVATAR URL HERE }}">

<meta property="og:type" content="article">
<meta property="og:title" content="Simple Blog">
<meta property="og:description" content="Deskripsi Blog">
<meta property="og:image" content="{{! TODO: ADD GRAVATAR URL HERE }}">
<meta property="og:site_name" content="Simple Blog">

<link rel="stylesheet" type="text/css" href="assets/css/screen.css" />
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php include("get_single_post.php");
include("UI.php"); ?>

<title>Simple Blog | <?php echo($post['title']); ?></title>
<!--
<title>Simple Blog | Apa itu Simple Blog?</title>
-->

</head>

<body class="default" onload="commentGet();">
<div class="wrapper">

<nav class="nav">
	<a style="border:none;" id="logo" href="index.php"><h1>Simple<span>-</span>Blog</h1></a>
	<ul class="nav-primary">
		<li><a href="new_post.php">+ Tambah Post</a></li>
	</ul>
</nav>

<article class="art simple post">

	<header class="art-header">
		<div class="art-header-inner" style="margin-top: 0px; opacity: 1;">
			<time class="art-time" id="Tanggal"><?php echo(dateDBToText($post['time'])); ?></time>
			<h2 class="art-title"><?php echo($post['title']); ?></h2>
			<p class="art-subtitle"></p>
		</div>
	</header>

	<div class="art-body">
		<div class="art-body-inner">
			<?php if ($post['featured'] != "0") {
				echo("<hr class=\"featured-article\" />");
			} ?>
			<p><?php echo($post['paragraph']); ?></p>

			<hr />

			<h2>Komentar</h2>

			<div id="contact-area">
				<form autocomplete="off" method="post" onsubmit="return commentCreation();">
					<input type="hidden" name="post_id" id="Post_Id" value=<?php echo($_GET['id']); ?>>
					
					<label for="name">Nama:</label>
					<input type="text" name="name" id="Nama" required>

					<label for="email">Email:</label>
					<input type="text" name="email" id="Email">

					<label for="comments">Komentar:</label><br>
					<textarea name="comments" rows="20" cols="20" id="Komentar" required></textarea>

					<input type="submit" name="submit" value="Kirim" class="submit-button">
				</form>
			</div>

			<ul class="art-list-body" id="Comments">
				<!--
				<li class="art-list-item">
					<div class="art-list-item-title-and-time">
						<h2 class="art-list-title"><a href="post.php">Kave</a></h2>
						<div class="art-list-time">1 jam lalu</div>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis repudiandae quae natus quos alias eos repellendus a obcaecati cupiditate similique quibusdam, atque omnis illum, minus ex dolorem facilis tempora deserunt! &hellip;</p>
				</li>
				-->
			</ul>
		</div>
	</div>

</article>

<footer class="footer">
	<div class="back-to-top"><a href="">Back to top</a></div>
	<!-- <div class="footer-nav"><p></p></div> -->
	<div class="psi">&Psi;</div>
	<aside class="offsite-links">
		IF3110 Pengembangan Aplikasi Berbasis Web /
		<br>
		<a class="twitter-link" href="http://twitter.com/christangga">Christ Angga Saputra - 13512019</a> /
		<br>
		
	</aside>
</footer>

</div>

<script type="text/javascript" src="assets/js/emailValidation.js"></script>
<script type="text/javascript" src="assets/js/commentCreation.js"></script>
<script type="text/javascript" src="assets/js/commentGet.js"></script>

<!--
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
-->
<script type="text/javascript" src="assets/js/fittext.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/respond.min.js"></script>
<script type="text/javascript">
  var ga_ua = '{{! TODO: ADD GOOGLE ANALYTICS UA HERE }}';

  (function(g,h,o,s,t,z){g.GoogleAnalyticsObject=s;g[s]||(g[s]=
	  function(){(g[s].q=g[s].q||[]).push(arguments)});g[s].s=+new Date;
	  t=h.createElement(o);z=h.getElementsByTagName(o)[0];
	  t.src='//www.google-analytics.com/analytics.js';
	  z.parentNode.insertBefore(t,z)}(window,document,'script','ga'));
	  ga('create',ga_ua);ga('send','pageview');
</script>

</body>
</html>