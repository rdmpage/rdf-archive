<?php

// Finding missing directories


$basedir = dirname(__FILE__) . '/rdf';

$files = scandir($basedir);


$n = 5262;

$count = 0;

$missing = array();

for ($i = 0; $i <= $n; $i++)
{
	if (!in_array($i, $files))
	{
		
		echo "Missing $i\n";
		$count++;
		
		/*
		for ($j = 0; $j < 1000; $j++)
		{
			$missing[] = ($i * 1000) + $j;
		}
		*/
	}
}

echo "Folders missing = $count\n";

//echo join(",\n", $missing);
echo "\n";

?>
