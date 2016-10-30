<!-- Current weather -->
<div>
	<span class="timestamp">
		<?php
			date_default_timezone_set('America/New_York');
			echo date('h:ia', time());
		?>
	</span> // <?php echo $wpc_html_display_now_time_temperature; ?>&#8457;
</div>

<!-- condition -->
<div>
	<?php echo ucwords(strip_tags($wpc_html_weather)); ?>
</div>

<!-- wind -->
<div>
//
<?php
	$wind = trim(strip_tags($wpc_html_infos_wind));
	$prefix = "Wind";
	if (substr($wind, 0, strlen($prefix)) == $prefix) {
	    $wind = substr($wind, strlen($prefix));
	}
	echo str_replace("m/h", "mph", $wind);
?>
</div>

<!-- Today -->
<div>
	<?php
	$sun = trim(strip_tags($wpc_html_today_sun));
  $sun = trim(substr($sun, strrpos($sun, "-") + 1));
  $prefix = "0";
	if (substr($sun, 0, strlen($prefix)) == $prefix) {
	    $sun = substr($sun, strlen($prefix));
	}
	$sun = str_replace(" PM", "pm", $sun);
	echo "Sunset " . $sun;
?>
</div>
