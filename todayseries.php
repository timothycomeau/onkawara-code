<!doctype html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>OKCode • Today Series</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
</head>

<body style='font-size:9em; font-weight: bolder;  background:black; font-family: arial, arial narrow,  helvitca neue, geneva, futura, helvetica; color:white; height:auto;'>

<div id="n" style="height:auto; width:auto; margin:auto; height:25%; position: absolute; top: 0; left: 0; bottom: 0; right: 0; text-align:center; padding:50px;">

	<?php
	$limit = time();
	$unixtime = rand(1,$limit);

	getdate("$unixtime");
	$time1 =date("M j.Y", $unixtime); 
	$time2 =date("M.j,Y", $unixtime); 
	$time3 =date("M,j.Y", $unixtime);
	$time4 =date("M.j.Y", $unixtime);
	$time5 =date("j M,Y", $unixtime);

	$a = rand(1,5);

	if ($a == 1) {
	 echo strtoupper("$time1");
	} 
	if ($a == 2) {
	 echo strtoupper("$time2");
	}
	if ($a == 3) {
	 echo strtoupper("$time3");
	}
	if ($a == 4) {
	 echo strtoupper("$time4");
	}
	if ($a == 5) {
	 echo strtoupper("$time5");
	}
	?>

</div>

</body>
</html>







