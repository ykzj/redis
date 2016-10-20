<?php
	$redis = new Redis();
	$redis->connect('demo.3d0kus.ng.0001.apne1.cache.amazonaws.com');
	

	$redis->set(0, 'value');
	echo $redis->get(0);


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