<?php
/*
Credits: Eliot Deutsch 
*/

error_reporting (E_ALL ^ E_NOTICE);

if(isSet($_GET['zip']))
{
$zip = $_GET['zip'];

require('magpierss/rss_fetch.inc');

$url = 'http://www.rssweather.com/zipcode/' . $zip . '/rss.php';
$rss = fetch_rss($url);

$counter = 0;
$title = $rss->items[0]['title'];
$title = explode("Weather ::", $title);
echo "<div style=\"height: 150px; overflow: auto; overflow-x:hidden; width: 230px;\">
<div id = weather_title><h1>$title[0]</h1>Right Now: <span class = right_now>$title[1]</span>
<div id=credit>by: <a href = http://www.iNewspress.com>iNewspress.com</a></div></div>";
echo "<table width = 210px; size: 10px;>";
foreach ($rss->items as $item)
{	if ($counter > 0) 
	{
	$title = $item['title'];
	$forecast = $item['description'];
	$title = str_replace("Forecast for ","",$title);

	echo "<td><tr align = \"left\" id = \"weather_time\" style = \"text-decoration: underline; \">";
		echo $title . ":";
	echo "</tr>";
	echo "<tr align = \"right\" id = \"weather_forecast\" style = \"text-align: right;\">";
		echo $forecast;
	echo "</tr></td>";
	}
	$counter = $counter + 1;
	}
}
echo "</table></div>";
?>