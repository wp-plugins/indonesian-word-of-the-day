<?php
/*
Plugin Name: Indonesian Word of the Day
Plugin URI: http://www.declan-software.com/indonesian
Description: Adds a daily Indonesian Word of the Day (with audio) widget to the WordPress sidebar.
Author: Declan Software
Version: 1.0
Author URI: http://www.declan-software.com/
Notes:  Adobe Flash required to play the audio
*/

function widget_indonesianwotdwidget_init() 
{
	if ( !function_exists('register_sidebar_widget') )
	{
		return;
	}
		
	function widget_indonesianwotdwidget($args) 
        {
		extract($args);
			
		echo $before_widget;
		echo $before_title ."IndonesianWord of the Day". $after_title;

		$wotd_code = "<script src='http://www.hitsalive.com/indonesian_wotd/indonesian.php?link=WP' language='javascript' type='text/javascript'></script>";
                             
		echo '<div style="margin-top:5px;text-align:left;">'.$wotd_code.'</div>';
		echo $after_widget;
	}

	
	function widget_indonesianwotdwidget_control() 
        {
		echo '<p style="text-align:left;">Brought to you by <b>Declan Software</b> - Language Learning Software for serious students.</p>';
	}

	register_widget_control(array('IndonesianWord of the Day', 'widgets'), 'widget_indonesianwotdwidget_control', 200, 200);

	register_sidebar_widget(array('IndonesianWord of the Day', 'widgets'), 'widget_indonesianwotdwidget');
}

add_action('widgets_init', 'widget_indonesianwotdwidget_init');

?>