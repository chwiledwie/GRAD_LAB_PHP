<?php

require('chatconfig.php');

if(isset($_GET['lastfetch']) && is_numeric($_GET['lastfetch']) && $_GET['lastfetch']>0)
{
	$lastfetch = 0;//round($_GET['lastfetch']);
}
else
{
	$lastfetch = 0;
}

$fp = @fopen($chat_datafile, "r");
if($fp)
{
	while($line = fgets($fp))
	{
		$line = explode("&&", $line);
		if(count($line)<4) continue;
		if($line[0]>=$lastfetch)
		{
echo <<<ENDHTML
	<div class="chat_line"><span class="chat_user">{$line[1]}</span>
	{$line[2]}
	</div>
ENDHTML;
		}
	}
	
	fclose($fp);
}

?>