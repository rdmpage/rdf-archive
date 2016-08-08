<?php

//--------------------------------------------------------------------------------------------------
/**
 * @brief Test whether HTTP code is valid
 *
 * HTTP codes 200 and 302 are OK.
 *
 * For JSTOR we also accept 403
 *
 * @param HTTP code
 *
 * @result True if HTTP code is valid
 */
function HttpCodeValid($http_code)
{
	if ( ($http_code == '200') || ($http_code == '302') || ($http_code == '403'))
	{
		return true;
	}
	else{
		return false;
	}
}


//--------------------------------------------------------------------------------------------------
/**
 * @brief GET a resource
 *
 * Make the HTTP GET call to retrieve the record pointed to by the URL. 
 *
 * @param url URL of resource
 *
 * @result Contents of resource
 */
function get($url, $userAgent = '', $timeout = 0)
{
	$data = '';
	
	$ch = curl_init(); 
	curl_setopt ($ch, CURLOPT_URL, $url); 
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt ($ch, CURLOPT_FOLLOWLOCATION,	1); 
	//curl_setopt ($ch, CURLOPT_HEADER,		  1);  

	//curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
	
	if ($userAgent != '')
	{
		curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	}	
	
	if ($timeout != 0)
	{
		curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
	}
			
	$curl_result = curl_exec ($ch); 
	
	if (curl_errno ($ch) != 0 )
	{
		echo "CURL error: ", curl_errno ($ch), " ", curl_error($ch);
	}
	else
	{
		$info = curl_getinfo($ch);
		
		//$header = substr($curl_result, 0, $info['header_size']);
		//echo $header;
		
		
		$http_code = $info['http_code'];
		
		//echo "<p><b>HTTP code=$http_code</b></p>";
		
		if (HttpCodeValid ($http_code))
		{
			$data = $curl_result;
		}
	}
	return $data;
}

$base_dir = 'rdf';


$start 	= 137000;
$start  = 137076;
$stop 	= 138000;

$start  = 130000;
$start  = 133227;
$stop 	= 136000;

$start  = 120000;
$start  = 120180;
$stop 	= 130000;

$start  = 100000;
$stop 	= 120000;

$start  =  80000;
$stop 	= 100000;

$start  =  60000;
$start  =  73530;
$stop 	=  80000;


$start  =  40000;
$stop 	=  60000;

$start  =  20000;
$stop 	=  40000;

$start  =  16801;
$stop 	=  20000;


$count = 0;

for ($id = $start; $id <= $stop; $id++)
{
	echo $id . "\n";
	
	$lsid = 'urn:lsid:algaebase.org:taxname:' . $id;
	
	$url = 'http://lsid.algaebase.org/authority/metadata.lasso?lsid=' . $lsid;
	
	$xml = get($url, 'Mozilla/5.0 (iPad; U; CPU OS 3_2_1 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Mobile/7B405');
	
	//echo $xml;
	
	$go = true;
	
	if (!preg_match('/\s*\<rdf/', $xml))
	{
		echo "Not XML\n";
		$go = false;
		//exit();
	}	
	
	if (preg_match('/No taxonomy record found for this level/', $xml))
	{
		echo "No record\n";
		$go = false;
		//exit();
	}	
	
	
	if ($go)
	{			
		$dir = floor($id / 1000);
		
		$dir = dirname(__FILE__) . "/$base_dir/" . $dir;
		if (!file_exists($dir))
		{
			$oldumask = umask(0); 
			mkdir($dir, 0777);
			umask($oldumask);
		}
		
		$f = $dir . '/' . $id . '.xml';
		$file = fopen($f, "w");
		fwrite($file, $xml);
		fclose($file);
	}
	
	if (($count++ % 10) == 0)
	{
		$rand = rand(2000000, 6000000);
    	echo '...sleeping for ' . round(($rand / 1000000),2) . ' seconds' . "\n";
    	usleep($rand);
    }
}



?>