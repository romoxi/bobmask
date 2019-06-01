<?php
header('Content-type: text/css');
?>

body 
{
    font-family: helvetica, sans-serif;
}

/**
 * Controlfield, if focus on input-field
 */
[class*="input-mask-"]
{
	border: 1px solid green;
	position: absolute;
	top: -15px;
	left: 150px;
	padding: 5px;
	background-color: #FFF;
	display: none;
}

/**
 * Wrapper around label and input-field
 */
.wrapper
{
	border: 1px dotted blue;
	width: 250px;
	float: left;
	margin: 15px;
	padding: 5px;
	display: inline-block;
	position: relative;

}

/**
 * Form input-field
 */
.data-input
{
	margin: 5px;
	padding: 5px;
	border: 1px solid blue;
	width: 220px;
	height: 24px;
}

/**
 * Some line breaks
 */
.clearfix
{
	content: "";
	clear: both;
	display: table;	
}

/**
 * Output
 */
.output
{
	margin: 5px;
	padding: 5px;
	border: 1px solid blue;
	width: 180px;
	height: 24px;
}

