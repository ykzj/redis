<?php
	$redis = new Redis();
	$redis->connect('demo.3d0kus.ng.0001.apne1.cache.amazonaws.com');
	
	$time_start = microtime(TRUE);

	for($c=0; $c<10000000; $c++)
	{
		$redis->set($c, genRandomString(rand(50,100)));
	}

	$time_end = microtime(TRUE);

	echo "Time spends: " . $time_end - $time_start . " ms\n";


	$redis->close();

	function genRandomString($len)
	{
		$char_begin = 33;	//!
		$char_end = 126;	//~
		$str = '';
		for($i=0; $i<$len; $i++)
		{
			$char_int = rand($char_begin, $char_end);
			while($char_int == 39 | $char_int == 96)	//no '
			{
				$char_int = rand($char_begin, $char_end);
			}
			$str .= chr($char_int);
		}
		return $str;
	}
?>