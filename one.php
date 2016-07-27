<?php

require_once (dirname(__FILE__) . '/vendor/arc2/ARC2.php');
	

//----------------------------------------------------------------------------------------
function fix_rdf($xml)
{
	$xml = preg_replace('/\s+rdf:nodeID="bnode0"/Uu', '', $xml);

	return $xml;
}


//----------------------------------------------------------------------------------------
function rdf_to_sql($xml)
{

}

//----------------------------------------------------------------------------------------
function rdf_to_json($xml)
{

}

//----------------------------------------------------------------------------------------
function rdf_to_triples($xml)
{
	$parser = ARC2::getRDFParser();		
	$base = 'http://example.com/';
	$parser->parse($base, $xml);	
	
	$triples = $parser->getTriples();
	
	echo $parser->toNTriples($triples);
}

//----------------------------------------------------------------------------------------

$basedir = dirname(__FILE__);
$directory = 'ipni/rdf';
$filename = '412/412947-1.xml';

			
$xml = file_get_contents($basedir . '/' . $directory . '/' . $filename);

if (preg_match('/^<\?xml/', $xml))
{
	// do stuff
	// clean
	$xml = fix_rdf($xml);
	
	// to N-triples
	rdf_to_triples($xml);
	
	
}
else
{
	echo $xml;
	exit();
	echo $filename . "\n";
}

?>

