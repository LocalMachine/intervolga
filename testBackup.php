<?php // php version 5.6

function bSearch(array $numbers, $value)
{
    echo "Массив до сортировки = ";
    for ($i=0; $i<=count($numbers)-1;$i++)
    {
        echo "$numbers[$i]  ";
        if ($i ==count($numbers)-1)
        {
            echo "<br>";
        }
    }

	sort($numbers);
    echo "Массив после сортировки = ";
	for ($i=0; $i<=count($numbers)-1;$i++)
    {
        echo "$numbers[$i]  ";
        if ($i ==count($numbers)-1)
        {
            echo "<br>";
        }
    }
	
	$l = 0;
	$r = count($numbers)-1;
	
	$result = false;
	
	while ($l <= $r && !$result)
	{
		$m = (int)round(($l + $r)/2); // midlle value in array
		
		if ($numbers[$m] == $value)
		{
			$result = true;
		echo "Значение:  $value есть и его порядковый номер = $m  <br><br>";
		}
		elseif ($numbers[$m] < $value)
		{
			$l = $m + 1;
		}
		else
		{
			$r = $m - 1;
		}
	}
	
	if (!$result)
	{
		echo " Значение: $value не найдено <br><br>";
	}
}

echo bSearch([10,20,30,40,50],1);
echo bSearch(["a","b","d","v","c"], "v");
echo bSearch([10,20,30,99,50],30);
?>