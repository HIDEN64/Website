<html>
<head>
	<?php require('../head.php'); ?>

	<meta property="og:type" content="website">
	<meta property="og:title" content="NetMC">
	<meta property="og:description" content="Information about our Minecraft Server, &quot;NetMC&quot;">
	<meta property="og:image" content="/favicon.png">

	<title>The Corner</title>
	<style>
	.dnd {
		border: 5px #f04747 solid;
	}
	.online {
		border: 5px #43b581 solid;
	}
	.idle {
		border: 5px #faa61a solid;
	}
	</style>
</head>

<body>
	<center><table border="1" bgcolor="3c3c84" width="800px"><tr><td>
		<?php
		require('../pageheader.html');
		?>
		<hr><iframe src="./minecraft.php" width="100%" height="480px">
		<hr>
		<?php require('../footer.php'); ?>
	</td></tr></table></center>
</body>
</html>
