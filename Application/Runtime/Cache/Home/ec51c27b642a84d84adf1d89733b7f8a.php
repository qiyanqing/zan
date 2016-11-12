<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
	<meta name="description" content="知途培训专注互联网PHP，H5，css，JS">
	<meta name="keywords" content="知途，PHP，WEB,H5，培训">
	<meta name="viewport" content="initial-scale=1,minimum-scale=1">
	<title>知途 - 最靠谱、最良心的培训</title>
	<link rel="shortcut icon" href="/favicon.ico">
	<link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/3wedu.css">
	<link href="./css/animate.min.css" rel="stylesheet">
</head>
<body>
    <section id="jobs" class="page-wrapper light-bg" style="background-color:#ffffff;padding-top:0px;">
		<div class="get-started text-center wow fadeInDown animated animated" style="visibility: visible; animation-name: fadeInDown; margin-top: 0px;">
			<div class="container">
				<div class="title-area">
					<h2 class="title">知途科技一期学员就业情况汇总</h2>
					<p class="subtitle">知途科技,做良心培训,就业有保障</p>
					<div class="request" style="padding-top:100px;">
						<h4 style="letter-spacing:5px;"><div>优秀毕业生</div></h4>
					</div>
				</div>
			</div>
		</div>
		<?php foreach($info as $value ) { ?>
		<div class="container" style="padding-top:30px;">
			<div class="row page-content">
				<div class="col-md-4 col-sm-6 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
					<div class="clients-comments">
						<img src="/Public/upload/<?php echo ($value['img']); ?>" class="img-circle" alt="">
						<h2><?php echo ($value['name']); ?></h2>
						<h5><?php echo ($value['category']); ?></h5>
						<h5>公司：<?php echo ($value['company']); ?></h5>
						<h3>实习工资：<?php echo ($value['money']); ?></h3>
					</div>
				</div>		
			</div>
		</div>
		<?php  } ?>
	</section>
<!-- 	<div class="page">
	<?php for($i=1;$i<=$page_num;$i++) { ?>
	<a href="list.php?page=<?php echo $i;?>"><?php echo $i;?></a>
	<?php } ?>
</div> -->
</body>
</html>