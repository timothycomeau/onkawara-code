<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>The On Kawara Code</title>
<meta name="description" content="The work of artist On Kawara reproduced with code">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="d/css/style.css">
</head>
<body>

<header>
<div id='logo-cntr'>
<a href='http://timothycomeau.com'><img class='logo' src='d/img/2008_logo_tiny_gr.png'  alt='logo' border='0'></a></div></header>

<div id='container'>
<div class='wrapper'>
<div id='left'>
<div id='pntg'>
	<div id='pntg_txt'>
		<?php

		$limit = time();
		$unixtime = rand(1,$limit);

		getdate("$unixtime");
		$time1 =date("M j.Y", $unixtime); 
		$time2 =date("M j,Y", $unixtime); 
		$time3 =date("M.j,Y", $unixtime);
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
	</div><!-- PNTG_TXT -->
</div><!-- PNTG -->
</div><!-- DIV LEFT -->

	<div id='right'>

		<h2 class='center'>The On Kawara Code</h2>

		<p class='center'><a href='todayseries.php'>Date Painting</a> (<i><a href='today.php'>Today</a></i> Series) | <a href='todayseries.txt'>Code</a></p>
		
		<div class='center' id="table">

		<table width='100%'>
		<tbody>
		<tr>
		<th><b>One Million Years Vol I</b></th>
		<th><b>One Million Years Vol II</b></th>
		</tr>

		<tr>
		<td><a href='http://onkawaracode.timothycomeau.com/v1/v1b1.html'>Book I</a> [<a href='http://onkawaracode.timothycomeau.com/v1/vol1_bk1.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v1/v1b1.txt'>code</a>] </td>
		<td><a href='http://onkawaracode.timothycomeau.com/v2/v2b1.html'>Book I</a> [<a href='http://onkawaracode.timothycomeau.com/v2/vol2_bk1.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v2/v2b1.txt'>code</a>] </td>
		</tr>
		<tr><td><a href='http://onkawaracode.timothycomeau.com/v1/v1b2.html'>II</a>  [<a href='http://onkawaracode.timothycomeau.com/v1/vol1_bk2.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v1/v1b2.txt'>code</a>] </td>
		<td><a href='http://onkawaracode.timothycomeau.com/v2/v2b2.html'>II</a>  [<a href='http://onkawaracode.timothycomeau.com/v2/vol2_bk2.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v2/v2b2.txt'>code</a>] </td>
		</tr>
		<tr>
		<td><a href='http://onkawaracode.timothycomeau.com/v1/v1b3.html'>III</a>  [<a href='http://onkawaracode.timothycomeau.com/v1/vol1_bk3.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v1/v1b3.txt'>code</a>] </td>
		<td><a href='http://onkawaracode.timothycomeau.com/v2/v2b3.html'>III</a>  [<a href='http://onkawaracode.timothycomeau.com/v2/vol2_bk3.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v2/v2b3.txt'>code</a>] </td>
		</tr> 
		<tr>
		<td><a href='http://onkawaracode.timothycomeau.com/v1/v1b4.html'>IV</a>  [<a href='http://onkawaracode.timothycomeau.com/v1/vol1_bk4.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v1/v1b4.txt'>code</a>] </td>
		<td><a href='http://onkawaracode.timothycomeau.com/v2/v2b4.html'>IV</a>  [<a href='http://onkawaracode.timothycomeau.com/v2/vol2_bk4.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v2/v2b4.txt'>code</a>] </td>
		</tr> 
		<tr>
		<td><a href='http://onkawaracode.timothycomeau.com/v1/v1b5.html'>V</a>  [<a href='http://onkawaracode.timothycomeau.com/v1/vol1_bk5.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v1/v1b5.txt'>code</a>] </td>
		<td><a href='http://onkawaracode.timothycomeau.com/v2/v2b5.html'>V</a>  [<a href='http://onkawaracode.timothycomeau.com/v2/vol2_bk5.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v2/v2b5.txt'>code</a>] </td>
		</tr> 
		<tr>
		<td><a href='http://onkawaracode.timothycomeau.com/v1/v1b6.html'>VI</a>  [<a href='http://onkawaracode.timothycomeau.com/v1/vol1_bk6.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v1/v1b6.txt'>code</a>] </td>
		<td><a href='http://onkawaracode.timothycomeau.com/v2/v2b6.html'>VI</a>  [<a href='http://onkawaracode.timothycomeau.com/v2/vol2_bk6.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v2/v2b6.txt'>code</a>] </td>
		</tr> 
		<tr><td><a href='http://onkawaracode.timothycomeau.com/v1/v1b7.html'>VII</a>  [<a href='http://onkawaracode.timothycomeau.com/v1/vol1_bk7.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v1/v1b7.txt'>code</a>] </td>
		<td><a href='http://onkawaracode.timothycomeau.com/v2/v2b7.html'>VII</a>  [<a href='http://onkawaracode.timothycomeau.com/v2/vol2_bk7.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v2/v2b7.txt'>code</a>] </td>
		</tr> 
		<tr><td><a href='http://onkawaracode.timothycomeau.com/v1/v1b8.html'>VIII</a>  [<a href='http://onkawaracode.timothycomeau.com/v1/vol1_bk8.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v1/v1b8.txt'>code</a>] </td>
		<td><a href='http://onkawaracode.timothycomeau.com/v2/v2b8.html'>VIII</a>  [<a href='http://onkawaracode.timothycomeau.com/v2/vol2_bk8.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v2/v2b8.txt'>code</a>] </td> 
		</tr>		
		<tr>
		<td><a href='http://onkawaracode.timothycomeau.com/v1/v1b9.html'>IX</a>  [<a href='http://onkawaracode.timothycomeau.com/v1/vol1_bk9.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v1/v1b9.txt'>code</a>] </td>
		<td><a href='http://onkawaracode.timothycomeau.com/v2/v2b9.html'>IX</a>  [<a href='http://onkawaracode.timothycomeau.com/v2/vol2_bk9.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v2/v2b9.txt'>code</a>] </td>
		</tr> 
		<tr>
		<td><a href='http://onkawaracode.timothycomeau.com/v1/v1b10.html'>X</a> [<a href='http://onkawaracode.timothycomeau.com/v1/vol1_bk10.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v1/v1b10.txt'>code</a>]</td>
		<td><a href='http://onkawaracode.timothycomeau.com/v2/v2b10.html'>X</a> [<a href='http://onkawaracode.timothycomeau.com/v2/vol2_bk10.pdf'>pdf</a>] [<a href='http://onkawaracode.timothycomeau.com/v2/v2b10.txt'>code</a>]</td>
		</tr>
		</tbody>
		</table>
		</div>

		<p class='center'>
		<a href='http://www.diaart.org/exhibitions/main/61'>Dia Centre</a> | 
		<a href='http://en.wikipedia.org/wiki/On_Kawara'>Wikipedia</a> | 
		<a href='http://www.youtube.com/watch?v=SdvoBUCSOwU'>YouTube</a>
		</p>
	</div><!-- closes div right -->
	<div class='clear'></div>
</div><!-- closes wrapper-->
<div class='clear'>&nbsp;</div>
</div><!-- closes div container -->
<script src="d/js/custom.modernizr.js"></script>
<script src="d/js/html5shiv.js"></script>
</body>
</html>
