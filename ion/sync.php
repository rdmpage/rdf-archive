<?php

for ($i=0;$i<=5102;$i++)
{
	$command = 'rsync -r -v \'/Volumes/G-DRIVE slim/ion-rdf/' . $i . '\' /Users/rpage/Desktop/rdf-archive/ion/rdf';
	echo $command . "\n";
	system($command);
}

?>