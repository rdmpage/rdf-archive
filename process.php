<?php

require_once (dirname(__FILE__) . '/vendor/arc2/ARC2.php');

//----------------------------------------------------------------------------------------
function gen_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

        // 16 bits for "time_mid"
        mt_rand( 0, 0xffff ),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand( 0, 0x0fff ) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand( 0, 0x3fff ) | 0x8000,

        // 48 bits for "node"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}
	

//----------------------------------------------------------------------------------------
function fix_rdf($xml)
{
	$xml = preg_replace('/\s+rdf:nodeID="bnode0"/Uu', ' rdf:nodeID="' . gen_uuid() . '"', $xml);

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


$basedir = dirname(__FILE__) . '/indexfungorum/rdf';

$files = scandir($basedir);
foreach ($files as $directory)
{
	if (preg_match('/^\d+$/', $directory))
	{	
		//echo "\n$directory\n";
				
		$files = scandir($basedir . '/' . $directory);
		
		foreach ($files as $filename)
		{
			if (preg_match('/\.xml$/', $filename))
			{	
				//echo "." . str_replace('.xml', '', $filename) . "\n";
				//echo '.';
			
				$xml = file_get_contents($basedir . '/' . $directory . '/' . $filename);
				
				if (preg_match('/^<\?xml/', $xml))
				{
					
				
					// do stuff
					// clean
					$xml = fix_rdf($xml);

					/*					
					$parser = ARC2::getRDFParser();		
					$base = 'http://example.com/';
					$parser->parse($base, $xml);	
					$triples = $parser->getTriples();
					print_r($triples);
					*/
					
					// to N-triples
					rdf_to_triples($xml);
					
					
				}
				else
				{
					echo $xml;
					exit();
					echo $filename . "\n";
				}
			}
		}
	}
}


?>

