<?php 
	$arr = [1, 1, 2, 3, 4 -51, 12, 12, 12, -51, 1, 1, 2, 3, 4 -51, 12, 12, 12, -51, 1, 1, 2, 3, 4 -51, 12, 12, 12, -51, 1, 1, 2, 3, 4 -51, 12, 12, 12, -51, 1, 1, 2, 3, 4 -51, 12, 12, 12, -51, 1, 1, 2, 3, 4 -51, 12, 12, 12, -51, 1, 1, 2, 3, 4 -51, 12, 12, 12, -51, 1, 1, 2, 3, 4 -51, 12, 12, 12, -51, 1, 1, 2, 3, 4 -51, 12, 12, 12, -51, 1, 1, 2, 3, 4 -51, 12, 12, 12, -51];
	$prvItem = null;
	$count = 0;
	$result = [];
	
	array_reduce($arr, function($carry, $item) use (&$prvItem, &$count, &$result) {
		if ($item === $prvItem) {
			array_pop($result);
			$count++;
			array_push($result, $count);
			$prvItem = null;	//считаем только пары
		} else {
			$count = 0;
			$prvItem = $item;
			array_push($result, $count);
		}
	});

	print_r($result);
?>