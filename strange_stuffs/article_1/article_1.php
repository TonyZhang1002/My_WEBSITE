<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Blog post | Tony Zhang - A personal website</title>

	<link rel="shortcut icon" href="../../assets/images/gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icon font -->
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="../../assets/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body>

<header id="header">
	<div id="head" class="parallax" parallax-speed="1">
		<h1 id="logo" class="text-center">
			<span class="title">Tony Zhang</span>
			<span class="tagline">A funny person(I think)<br>
				<a href="">z496722204a@hotmail.com</a></span>
		</h1>
	</div>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" 
				data-toggle="collapse" 
				data-target=".navbar-collapse"> 
				<span class="sr-only">Toggle navigation</span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span>
				</button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="../../index.html">home</a></li>
					<li><a href="../../strange_stuffs/strange_main.html">articles</a></li>
					<li><a href="../../sober_stuffs/sober_main.html">works</a></li>
					<li><a href="../../about.html">about me</a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">
		
		<div class="row topspace">
			<div class="col-sm-8 col-sm-offset-2">
															
 				<article class="post">
					<header class="entry-header">
 						<div class="entry-meta"> 
 							<span class="posted-on"><time class="entry-date published" date="2018-01-08">January 08, 2018</time></span>			
 						</div> 
 						<h1 class="entry-title"><a href="article_1.php" rel="bookmark">开始的一些想法</a></h1>
					</header> 
					<div class="entry-content"> 
						<p>
							最近开始有一些想法，想表达出来，想让更多的人知道。用过空间，用过微博，用过朋友圈，但都放弃了。对别人说，“觉得发着不舒服”，对内心说，“看着太庸俗”。不过如今想着既然学了些web的知识，想着不如自己弄个网站，自己玩玩好了，既能提升提升技能，也能记录记录生活，还不是美滋滋咯。
						</p>
						<p>
							这个网站模版是下载自网络的，感谢 Sergey Pozhilov (<a href="http://www.gettemplate.com/" target="_blank">GetTemplate.com</a>) 提供的优秀的素材，我稍微做了一点点改动，然后就有了这个小网站啦。
						</p>
						<p>
							主页的那句话取自《让子弹飞》，姜文扮演的张麻子提枪射出子弹，但一时竟没有任何动静，马仔问为何未中目标，张麻子却冷静的说道：
						</p>
						<blockquote>
							“别急，让子弹飞一会儿。”
						</blockquote>
						<p>
							20余载的时间里发生过很多很多的事，但假如从一个陌生人的角度看我，却找不到多少故事和照片，我在网络世界里不曾写过多少文字，也不曾上传多少自拍，即使少许存有，也被删除亦或隐藏了。但我如今可惜的并不是屏蔽了他人的关注，而是缺少了很多本应存在的回忆。2018年伊始，我想记录东西，写下我的影评书评，写下我的码代码故事，写下我的回忆想法，在这个网站保存过去，激励未来。
						</p>
					</div> 
				</article><!-- #post-## -->

			</div> 
		</div> <!-- /row post  -->

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">

				<div id="comments">	
					<h3 class="comments-title">Comments</h3>
					<a href="#comment-form" class="leave-comment">Leave a Comment</a>
					
	<?php 
	$servername = "127.0.0.1";
	$username = "root";
	$password = "Www13826568574co";
	$dbname = "TonyZhang";
	$articleID = 1;
	try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$stmt = $conn->prepare("SELECT * FROM Comments WHERE ForArticle = :a");
    	$stmt->bindParam(':a', $articleID);
    	$stmt->execute();
    	$allrows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	echo '<ol class="comments-list">';
    	foreach ( $allrows as $row ){
    		echo '<li class="comment">
							<div>
								<img src="../../assets/images/avatar_'.$row ['Avatar'].'.jpg" alt="Avatar" class="avatar">
								
								<div class="comment-meta">
									<span class="author"><a href="#">'.$row ['Name'].'</a></span>
								</div>

								<div class="comment-body">'
									.$row ['Content'].'					
								</div>
							</div>
						</li>';
    	}
    	echo '</ol>';
    	}
    catch(PDOException $e)
	{
	 	echo $e->getMessage();
	}
 ?>

 					<div class="clearfix"></div>

					<div id="respond">
						<h3 id="reply-title">Leave a Reply</h3>
						<form action="add-comments_1.php" method="post" id="comment-form" class="">
							<div class="form-group">
								<label for="inputName">Name</label>
								<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Enter your name">
							</div>
							<div class="form-group">
								<label for="inputEmail">Email address <i class="text-danger">*</i></label>
								<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Enter your email">
							</div>
							<div class="form-group">
								<label for="inputComment">Comment</label>
								<textarea class="form-control" name="content" rows="6"></textarea>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="checkbox">
										<label> <input type="checkbox"> Subscribe to updates</label>
									</div>
								</div>
								<div class="col-md-4 text-right">
  									<button type="submit" class="btn btn-action">Submit</button>
								</div>
						</form>
					</div> <!-- /respond -->
				</div>
			</div>
		</div> <!-- /row comments -->
		<div class="clearfix"></div>

	</div>	<!-- /container -->

</main>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Contact</h3>
				<div class="widget-body">
					<p>+86 132-4669-3329<br>
						<a href="mailto:#">z496722204a@hotmail.com</a><br>
						<br>
						北京市，朝阳区，北京工业大学中蓝学生社区
						Beijing University of Technology, Beijing
					</p>	
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Follow me</h3>
				<div class="widget-body">
					<p class="follow-me-icons">
						<a href="https://weibo.com/u/1914500711" target="_blank"><i class="fa fa-weibo" aria-hidden="true"></i></a>
						<a href="https://twitter.com/qinyuanzhang" target="_blank"><i class="fa fa-twitter fa-2"></i></a>
						<a href="https://github.com/TonyZhang1002" target="_blank"><i class="fa fa-github fa-2"></i></a>
					</p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>

<footer id="underfooter">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 widget">
				<div class="widget-body">
					<p>ZhongLan Student's Garden, Beijing University of Technology, Beijing, 10000, China</p>
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright &copy; 2018, Tony Zhang<br> 
						<a href="#" rel="designer">TZ's website</a>.
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>
