<?php
require_once('gate.php');
echo
'<html>
	<head>
		<title>Gateless</title>
		<link rel="shortcut icon" href="images/gateless.png" type="image/png" />
	</head>
	<body>
		<h1 style="text-align: center;">Gateless</h1>
		<img  style="display:block;margin:0 auto;" src="images/title_underline.gif"></br>
		<h2 style="text-align: center;">Welcome</h2>
		<p style="text-align: center;">This is an example demonstrating one way to make use of the Gateless code.</p>
		<img style="display:block;margin:15 auto;" src="images/gateless.gif"></br></br>
		<div style="white-space: pre-wrap;display:block;margin:0 auto;padding:15px;border:1px solid #021a40;box-shadow: 10px 10px 5px #888888;box-shadow: 10px 10px 5px #888888;background-color: lightgrey;">
			<h3 style="text-align: center;text-decoration: underline;"><em>Mumonkan</em></h3>
			<p>'.$gateless.'</p>
			<img style="display:block;margin:0 auto;" src="images/brush-stroke.png">
		</div></br></br>
	</body>
</html>'
?>
