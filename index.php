<?php
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	$fileContents = file_get_contents($root . "/config.ini");
	echo $fileContents;
	$fileContents = file_get_contents($root . "/webconfig.xml");
	echo $fileContents;