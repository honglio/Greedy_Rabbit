
<?php
$score = $_GET["score"];
$scorex = explode(":", $score);
$highscore = $scorex[0];
?>
<html>
<head>
<title>Greedy Rabbit HighScore</title>
<meta property="og:title" content="<?php echo $highscore;?> "/>
<meta property="og:image" content="http://honglio.github.io/Greedy_Rabbit/Icon_rabbit_600.png"/>
<meta property="og:site_name" content="兔子君_找不着 游戏"/>
<meta property="og:description" content="<?php echo $highscore;?> New score on Greedy Rabbit game! How far do you think you can get?"/>	
</head>
<body>
<meta http-equiv="refresh" content="0;URL=http://honglio.github.io/Greedy_Rabbit/" />
</body>
</html>