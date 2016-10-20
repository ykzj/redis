<?php
	$redis = new Redis();
	$redis->connect('demo.3d0kus.ng.0001.apne1.cache.amazonaws.com');
	var_dump($redis->info());
	$redis->close();

?>