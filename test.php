<html>
<head>
<link rel="stylesheet" href="home.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
</head>
<body><h1>Plant Monitoring</h1>
<p>
<?php $output = shell_exec("sudo temperv14 -f");?>

<?php shell_exec("sudo wget -O weather/weather.json 'http://api.openweathermap.org/data/2.5/weather?id=5808079&appid=400608ec70d4f8622e1fc3b69460eae2'");?>


<div class="circleBase type3"><?php echo "$output"; ?></div>

<script>
$(function() {
	var weather =[];
	$.getJSON( "weather/weather.json", function( data ) {
  		$.each( data, function( key, val ) {
    			weather.push( "<li id='" + key + "'>" + val + "</li>" );
  		});

  		$( "<ul/>", {
    			"class": "my-new-list",
    			html: weather.join( "" )
		}).appendTo( "body" );
	});
});
</script>



</body></html>
