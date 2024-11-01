<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE>Yahoo Weather!</TITLE>
  <META NAME="Keywords" CONTENT="ajax, weather, api, fetch, yahoo">
  <META NAME="Description" CONTENT="yahoo, weather">

<script type="text/javascript" src="/wp-content/plugins/wp_local_weather/jquery-1.2.6.min.js"></script>


<script language="JavaScript">
function disableEnterKey(e)
{
     var key;

     if(window.event)
          key = window.event.keyCode;     //IE
     else
          key = e.which;     //firefox

     if(key == 13)
          return false;
     else
          return true;
}
</script>

<link rel="stylesheet" type="text/css" href="/wp-content/plugins/wp_local_weather/style.css" />

<SCRIPT type="text/javascript">
<!--

$(document).ready(function(){

function get_weather()
{
var zip = $("#zip").val();
var to_load = '/wp-content/plugins/wp_local_weather/get_weather.php?zip='+ zip;

$("#weather").html('<img style="margin-top: 104px;" src="/wp-content/plugins/wp_local_weather/ajax-loader.gif" align="absmiddle">');
$("#weather").load(to_load);
}

$(window).load(get_weather); // Trigger "get_weather" when the window loads

// Trigger "get_weather" when the form objects are used
$("#go").click(get_weather);
});

//-->
</SCRIPT>

</HEAD>

 <BODY>

 <center>

<div align="center">

<h2 align="center">Local Weather</h2>

<form id="weather_search" >
<table><tr>
<td>Zip Code:</td>
<td><input type="text" size = "5" value = "10003" id="zip" name="zip" onKeyPress="return disableEnterKey(event)"></td>
<td><img id="go" height=15px src="/wp-content/plugins/wp_local_weather/go_btn.jpg"></tr></tr></table>
</form>

<div id="weather"></div>
</div>
 </center>
 </BODY>
</HTML>