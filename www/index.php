<html>
	<head>
		<title>Microlensing</title>
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
		<style type="text/css">
			body {
				font-family: 'Source Sans Pro', sans-serif;
				text-align:center;
			}
		</style>
	</head>

<?php
	function data_uri($file, $mime) {  
  		$contents = file_get_contents($file);
  		$base64   = base64_encode($contents); 
  		return ('data:' . $mime . ';base64,' . $base64);
	}
?>
<h1 style="margin: 50px 0px 0px 0px;">Microlensing Event Detection</h1>
<img src="<?php echo data_uri('../nn.png','image/png'); ?>" alt="Network Status" style="margin: 0px auto;display:block;" />

</html>
