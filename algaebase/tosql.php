<?php




$rdf = '
<rdf:RDF
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:dcterms="http://purl.org/dc/terms/"
    xmlns:dwc="http://rs.tdwg.org/dwc/terms/"
>
    <rdf:Description rdf:about="urn:lsid:algaebase.org:taxname:130533">
        <dc:type>ScientificName</dc:type>
        <dc:date>2016-08-05</dc:date>
        <dc:subject>Seminavis recta (Frenguelli) D.Talgatti &amp; L.C.Torgan</dc:subject>
        <dc:title>Seminavis recta</dc:title>
        <dc:relation>http://www.algaebase.org/search/species/detail/?species_id=p5d20a875bc743af6</dc:relation>
        <dc:creator>Salvador Valenzuela Miranda</dc:creator>
        <dc:identifier>urn:lsid:algaebase.org:taxname:130533</dc:identifier>
        <dc:publisher>AlgaeBase</dc:publisher>
        <dc:license>http://creativecommons.org/licenses/by-nc-sa/3.0</dc:license>
        <dc:language>Latin</dc:language>
        <dcterms:bibliographicCitation>Talgatti, D., L.M.Bertolli &amp; L.C.Torgan (2014). Seminavis recta comb. nov. et stat. nov.: morphology and distribution in salt marshes from southern Brazil. Fotea, Olomouc 14(2):  141-148, 44 fig., 2 tables.</dcterms:bibliographicCitation>
        <dcterms:created>2014-10-30</dcterms:created>
        <dcterms:modified>2014-10-30</dcterms:modified>

        <dcterms:rightsHolder>AlgaeBase</dcterms:rightsHolder>
        <dwc:empire>Eukaryota</dwc:empire>
        <dwc:kingdom>Chromista</dwc:kingdom>
        <dwc:phylum>Ochrophyta</dwc:phylum>
        <dwc:subphylum></dwc:subphylum>
        <dwc:class>Bacillariophyceae</dwc:class>
        <dwc:subclass></dwc:subclass>
        <dwc:order>Naviculales</dwc:order>
        <dwc:family>Naviculaceae</dwc:family>
        <dwc:genus>Seminavis</dwc:genus>
        <dwc:subgenus></dwc:subgenus>

        <dwc:taxonRank>Species</dwc:taxonRank>
        <dwc:ScientificName>Seminavis recta (Frenguelli) D.Talgatti &amp; L.C.Torgan</dwc:ScientificName>
        <dwc:scientificNameAuthorship>(Frenguelli) D.Talgatti &amp; L.C.Torgan</dwc:scientificNameAuthorship>
        <dwc:taxonomicStatus>Synonym</dwc:taxonomicStatus>
        <dwc:scientificNameID rdf:resource="urn:lsid:algaebase.org:taxname:130533"></dwc:scientificNameID>

    </rdf:Description>
</rdf:RDF>

';

$rdf = '<rdf:RDF
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:dcterms="http://purl.org/dc/terms/"
    xmlns:dwc="http://rs.tdwg.org/dwc/terms/"
>
    <rdf:Description rdf:about="urn:lsid:algaebase.org:taxname:60015">
        <dc:type>ScientificName</dc:type>
        <dc:date>2016-08-06</dc:date>
        <dc:subject>Cryptonemia rotunda (Okamura) Kawaguchi</dc:subject>
        <dc:title>Cryptonemia rotunda</dc:title>
        <dc:relation>http://www.algaebase.org/search/species/detail/?species_id=Vab881bb363be741a</dc:relation>
        <dc:creator>M.D. Guiry</dc:creator>
        <dc:identifier>urn:lsid:algaebase.org:taxname:60015</dc:identifier>
        <dc:publisher>AlgaeBase</dc:publisher>
        <dc:license>http://creativecommons.org/licenses/by-nc-sa/3.0</dc:license>
        <dc:language>Latin</dc:language>
        <dcterms:bibliographicCitation>Kawaguchi, S. (1993). Taxonomic notes on the Halymeniaceae (Rhodophyta) from Japan, II. Japanese Journal of Phycology 41: 303-313.</dcterms:bibliographicCitation>
        <dcterms:created>2000-11-20</dcterms:created>
        <dcterms:modified>2014-10-24</dcterms:modified>

        <dcterms:rightsHolder>AlgaeBase</dcterms:rightsHolder>
        <dwc:empire>Eukaryota</dwc:empire>
        <dwc:kingdom>Plantae</dwc:kingdom>
        <dwc:phylum>Rhodophyta</dwc:phylum>
        <dwc:subphylum>Eurhodophytina</dwc:subphylum>
        <dwc:class>Florideophyceae</dwc:class>
        <dwc:subclass>Rhodymeniophycidae</dwc:subclass>
        <dwc:order>Halymeniales</dwc:order>
        <dwc:family>Halymeniaceae</dwc:family>
        <dwc:genus>Cryptonemia</dwc:genus>
        <dwc:subgenus></dwc:subgenus>

        <dwc:taxonRank>Species</dwc:taxonRank>
        <dwc:ScientificName>Cryptonemia rotunda (Okamura) Kawaguchi</dwc:ScientificName>
        <dwc:scientificNameAuthorship>(Okamura) Kawaguchi</dwc:scientificNameAuthorship>
        <dwc:taxonomicStatus>Synonym</dwc:taxonomicStatus>
        <dwc:scientificNameID rdf:resource="urn:lsid:algaebase.org:taxname:60015"></dwc:scientificNameID>

    </rdf:Description>
</rdf:RDF>';



	$obj = new stdclass;
	
	// extract extra details...
	$dom= new DOMDocument;
	$dom->loadXML($rdf);
	$xpath = new DOMXPath($dom);
	
	$xpath->registerNamespace("rdf", 		"http://www.w3.org/1999/02/22-rdf-syntax-ns#");
	$xpath->registerNamespace("rdfs", 		"http://www.w3.org/2000/01/rdf-schema#");
	$xpath->registerNamespace("dc", 		"http://purl.org/dc/elements/1.1/" );
	$xpath->registerNamespace("dcterms", 	"http://purl.org/dc/terms/");
	$xpath->registerNamespace("dwc", 		"http://rs.tdwg.org/dwc/terms/" );
	
	
	
	$nodeCollection = $xpath->query ("//rdf:Description/@rdf:about");
	foreach($nodeCollection as $node)
	{
		$obj->id = $node->firstChild->nodeValue;
		$obj->id = str_replace('urn:lsid:algaebase.org:taxname:', '', $obj->id);
	}
	
	$nodeCollection = $xpath->query ("//dc:relation");
	foreach($nodeCollection as $node)
	{
		$obj->url = $node->firstChild->nodeValue;
	}
	

	$nodeCollection = $xpath->query ("//dc:title");
	foreach($nodeCollection as $node)
	{
		$obj->nameComplete = $node->firstChild->nodeValue;
	}
	$nodeCollection = $xpath->query ("//dwc:scientificNameAuthorship");
	foreach($nodeCollection as $node)
	{
		$obj->scientificNameAuthorship = $node->firstChild->nodeValue;
	}
	
	$nodeCollection = $xpath->query ("//dwc:taxonomicStatus");
	foreach($nodeCollection as $node)
	{
		$obj->taxonomicStatus = $node->firstChild->nodeValue;
	}

	$nodeCollection = $xpath->query ("//dwc:taxonRank");
	foreach($nodeCollection as $node)
	{
		$obj->taxonRank = $node->firstChild->nodeValue;
	}

 
	$path = array('empire', 'kingdom', 'phylum', 'subphylum', 'class', 'subclass', 'order','family', 'genus', 'subgenus' );
	
	foreach ($path as $p)
	{
	$nodeCollection = $xpath->query ("//dwc:$p");
		foreach($nodeCollection as $node)
		{
			$obj->{$p} = $node->firstChild->nodeValue;
		}
	}	
	
	
	$nodeCollection = $xpath->query ("//dc:license");
	foreach($nodeCollection as $node)
	{
		$obj->license = $node->firstChild->nodeValue;
	}
	
	$nodeCollection = $xpath->query ("//dcterms:modified");
	foreach($nodeCollection as $node)
	{
		$obj->modified = $node->firstChild->nodeValue;
	}

	$nodeCollection = $xpath->query ("//dcterms:updated");
	foreach($nodeCollection as $node)
	{
		$obj->updated = $node->firstChild->nodeValue;
	}
	
	
	// bibliographicCitation
	$nodeCollection = $xpath->query ("//dcterms:bibliographicCitation");
	foreach($nodeCollection as $node)
	{
		$obj->bibliographicCitation = $node->firstChild->nodeValue;
		
		// interpret
		if (preg_match('/(?<authorstring>.*)\s+\((?<year>[0-9]{4})\)\.\s+(?<title>.*)[\.|?]\s+(?<journal>.*)\s+(?<volume>\d+)(\((?<issue>.*)\))?:\s+(?<spage>\d+)-(?<epage>\d+)[\.|,]/Uu', $obj->bibliographicCitation, $m))
		{
			$obj->authorstring = $m['authorstring'];
			$obj->year = $m['year'];
			$obj->title = $m['title'];
			$obj->journal = $m['journal'];
			$obj->volume = $m['volume'];
			$obj->issue = $m['issue'];
			$obj->spage = $m['spage'];
			$obj->epage = $m['epage'];
		}
	}
	


	$keys = array();
	$values = array();
	
	
	foreach ($obj as $k => $v)
	{
		if ($v != '')
		{
			$keys[] = "`" . $k . "`";
			$values[] = "'" . addslashes(trim($v)) . "'";
		}
	}
	
	/*
	if ($chapter)
	{
		$keys[] = 'isPartOf';
		$values[] = "'Y'";
	}
	*/
	
	
	$sql = 'REPLACE INTO `names_algaebase` ('
		. join(",", $keys) . ') VALUES ('
		. join(",", $values) . ');';
		
	echo $sql . "\n";

?>
