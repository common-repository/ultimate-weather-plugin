<?php
/*
Plugin Name: Local Weather
Plugin URI: http://inewspress.com/local-weather-forecast-widget
Description: This plugin will add a widget to your sidebar that can display the current and extended weather forecasts for any zip code in the US. 
The advantage over other weather widgets is that it requires no set up at all, the visitor can simply type in the zip code and it displays automatically. 
Author: Eliot Deutsch
Version: 1
Author URI: http://www.iNewspress.com/
*/
function local_weather_widget() {
	include("weather.php");
}
function init_local_weather(){
	register_sidebar_widget("Local Weather", "local_weather_widget");
}
add_action("plugins_loaded", "init_local_weather");
?>