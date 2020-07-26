<?php
$web = "Web 1";
$v = explode(" ", $web);
$xff = $_SERVER['HTTP_X_FORWARDED_FOR'];
$lb_addr = $_SERVER['REMOTE_ADDR'];
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="includes/style.css" type="text/css" />
		<meta http-equiv="Cache-control" content="no-cache">
 	</head>
	<title>WEB_APP_<?php echo $v[1];?></title>
	<body>
		<div class="banner"><?php echo $web; ?></div>
		<span class="r">LB IP_ADDR: <?php echo $lb_addr; ?></span>
		<span class="l">XFF: <?php echo $xff; ?></span>
		<div class="boxr"> <?php echo $v[1];?> </div>
		<div class="image"><img src="imgs/f5_nginx.png" alt="f5NGINX"/></div>
			<span class="img_foot">TEST PAGE from <?php echo $web; ?></span>

	</body>
</html>
