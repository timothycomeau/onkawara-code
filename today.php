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
$unixtime = time();

getdate("$unixtime");
$time =date("M j Y", $unixtime);
echo $time;

?>

</div>
</body>
</html>