<?php

// delete broken files

$ids=array(
1030
);

$basedir = dirname(__FILE__) . '/ion/rdf';

foreach ($ids as $id)
{
	$dir = floor($id/1000);
	
	$filename =$basedir . '/' . $dir . '/' . $id . '.xml';
	
	if (file_exists($filename))
	{
		echo $filename . "\n";
		
		// delete
	}
}

?>
