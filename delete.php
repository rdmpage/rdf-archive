<?php

// delete broken files

$ids=array(
'20000712-1',
'20002833-1',
'20002971-1',
'20003129-1',
'20003488-1',
'20003489-1',
'20004979-1',
'20006600-1',
'20008700-1',
'20008703-1',
'20009415-1',
'20010978-1',
'20011275-1',
'20012404-1',
'50909235-1',
'60458929-2',
'60459947-2',
'77128954-1',
'77129464-1'
);

$basedir = dirname(__FILE__) . '/ion/rdf';
$basedir = dirname(__FILE__) . '/ipni/rdf';

foreach ($ids as $id)
{
	$int_id = $id;
	$int_id = preg_replace('/-\d+$/', '', $int_id);
	
	$dir = floor($int_id/1000);
	
	$filename = $basedir . '/' . $dir . '/' . $id . '.xml';
	
	if (file_exists($filename))
	{
		echo $filename . "\n";
		
		// delete
		unlink($filename);
	}
}

?>
