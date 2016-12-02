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
<?php
	$sun = trim(strip_tags($wpc_html_today_sun));
  $sunset = trim(substr($sun, strrpos($sun, "-") + 1));
  $prefix = "0";
	if (substr($sunset, 0, strlen($prefix)) == $prefix) {
	    $sunset = substr($sunset, strlen($prefix));
	}
	$sunset = str_replace(" PM", "pm", $sunset);
	$sunrise = trim(substr($sun, 0, strrpos($sun, "-")));
	$prefix = "0";
	if (substr($sunrise, 0, strlen($prefix)) == $prefix) {
	    $sunrise = substr($sunrise, strlen($prefix));
	}
	$sunrise = str_replace(" AM", "am", $sunrise);
?>
<div>
	<?php
		echo "Sunrise " . $sunrise;
	?>
</div>
<div>
	<?php
		echo "// Sunset " . $sunset;
	?>
</div>

<!-- for grabbing the sunrise/sunset times on every page -->
<div class="sunrise-sunset" style="display:none;">
	<div class="sunrise"><?php echo $sunrise; ?></div>
	<div class="sunset"><?php echo $sunset; ?></div>
</div>