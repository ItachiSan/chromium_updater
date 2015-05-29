<?php

$local = $_GET["version"];

// Check out what is latest version
$online = 'http://commondatastorage.googleapis.com/chromium-browser-continuous/Win_x64/LAST_CHANGE';
$download = file_get_contents($online);

if ($local >= $download)
	// No needs to update
	{
	echo 
	"
<?xml version=\"1.0\"?>
<GUP>
	<NeedToBeUpdated>no</NeedToBeUpdated>
</GUP>
";
	}
else
	// Get the sweeties :33
	{
	echo "
<?xml version=\"1.0\"?>
<GUP>
	<NeedToBeUpdated>yes</NeedToBeUpdated>
	<Version>$download</Version>
	<Location>http://commondatastorage.googleapis.com/chromium-browser-continuous/Win_x64/$download/mini_installer.exe</Location>
</GUP>";
	}
;

?>
