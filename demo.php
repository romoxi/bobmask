<?php
	/**
	 * print the Header
	 */
	echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<html lang="de"><head><title>bobmask</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf8">
	<meta content="bobmask">
	<link rel="stylesheet" type="text/css" href="bobmask.css.php?time='. time().'">
	';
	
	//load the script
	loadBobMask();
	
	echo '</head><body">';
	
	//set up some masks
	$input_mask = ['### ## ###', '##-##-##', '#(####)##'];

	$idx = 0;
	
	echo '<h1>Demo bobmask Input</h1>';
	
	echo '<form id="form1" method="post" action="demo.php" >';	
	
	//print some sample input fields for each mask
	foreach($input_mask as $mask)
	{
		echo '<div class="wrapper clearfix">Label: '. $mask;
			echo '<input id="inp-'. $idx .'" class="data-input" type="text" value="123456789" name="testbob" ';
			echo ' onkeyup="bobmask(this.id, \''. $mask .'\')" ';
			echo ' onfocus="bobmaskShow(this.id, \''. $mask .'\')" ';
			echo ' onfocusout="bobmaskHide(this.id)" ';
			echo '>';
			echo '<div id="input-mask-inp-'. $idx .'" class="input-mask-inp-'. $idx .'"></div>';
		echo '</div>';
		$idx ++;
	}
	echo '</form>';


	//finally some output
	echo '<div class="clearfix"><h1>Output</h1></div>';

	$outputlist = ['123456789', 'ABCDEFG', '1234abcde'];
	
	reset($input_mask);
	
	$ix = 0;
	
	foreach($outputlist as $output)
	{
		$mask = current($input_mask);
		next($input_mask);
		echo '<div id="out_'. $ix .'" class="output">';
		echo $output;
		echo '</div>';
		echo '<script>bobmaskList("out_'. $ix .'", \''. $mask .'\')</script> ';
		$ix ++;
	}
		
	echo '</body></html>';

	//get the script
	function loadBobMask()
	{
		echo  '<script>';
		require_once 'bobmask.js';
		echo '</script>';
	}	
?>