<?php

// Check RDF files

require_once (dirname(__FILE__) . '/vendor/arc2/ARC2.php');
	

$basedir = dirname(__FILE__) . '/indexfungorum/rdf';

$files = scandir($basedir);
foreach ($files as $directory)
{
	if (preg_match('/^\d+$/', $directory))
	{	
		//echo "\n--$directory\n";
				
		$files = scandir($basedir . '/' . $directory);
		
		foreach ($files as $filename)
		{
			if (preg_match('/\.xml$/', $filename))
			{	
				$id = str_replace('.xml', '', $filename);
			
				$xml = file_get_contents($basedir . '/' . $directory . '/' . $filename);
				
				if (preg_match('/^<\?xml/', $xml))
				{
					// do stuff
				}
				else
				{
					echo $id . "\n";
				}
			}
		}
	}
}


?>

