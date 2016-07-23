<?php

// Check RDF files

require_once (dirname(__FILE__) . '/vendor/arc2/ARC2.php');
	
$count = 0;
$error_count = 0;

$basedir = dirname(__FILE__) . '/indexfungorum/rdf';
$basedir = dirname(__FILE__) . '/ion/rdf';

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
				$count++;
				
				$id = str_replace('.xml', '', $filename);
			
				$xml = file_get_contents($basedir . '/' . $directory . '/' . $filename);
				
				if (preg_match('/^<\?xml/', $xml))
				{
					// do stuff
				}
				else
				{
					echo "File $id is not XML\n";
					$error_count++;
				}
			}
		}
	}
}

echo "$count files processed, $error_count errors found.\n";

?>

