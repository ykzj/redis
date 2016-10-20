<?php
	$redis = new Redis();
	$redis->connect('demo.3d0kus.ng.0001.apne1.cache.amazonaws.com');
	
	$redis->set('key', 'value');
	echo $redis->get('key');


	$redis->close();
?>