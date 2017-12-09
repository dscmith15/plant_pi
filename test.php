<html>
<head>
<link rel="stylesheet" href="home.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
</head>
<body><h1>Plant Monitoring</h1>
<p>
<?php $output = shell_exec("sudo temperv14 -f");?>



<div class="circleBase type3"><?php echo "$output"; ?></div>




</body></html>
