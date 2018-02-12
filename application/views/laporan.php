<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 6.0.0.3 (Linux)"/>
	<meta name="created" content="2018-02-10T14:34:12.301326373"/>
	<meta name="changed" content="2018-02-10T14:39:01.414977874"/>
	
	<style type="text/css">
		@font-family{
			font-family : judul;
			src : url(./assets/arial.ttf);
			}
		td, th{
			border : 1px solid black;
			padding : 15px 13px;
			}
		th {
			background-color : #E2E2E2;
			text-align : center;
			}
		h1{
			font-family:Arial;
			}
	</style>
	
</head>

<body>
<img src="./assets/upi.gif" width="100" height="50" />
<h1>LAPORAN</h1>

		<?php
		$i = "";
		$max = count($records);
		foreach($records as $key=>$r):
			if($key == 0){
				echo '<br/>';
				echo '<br/>';
				echo '<h1>Kelas : '.$r['kls'].'</h1>';
				echo '<table style="margin:0 auto;" cellspacing="0" border="0">';
				echo '<thead>';
				echo '<tr>';
				foreach($table as $h):
					echo '<th>'.$h['caption'].'</th>';
					endforeach;
				echo '</tr>';
				echo '</thead>';
				}
			if($i != $r['kls'] && $i != ""){
				echo '</table>';
				echo '<br/>';
				echo '<br/>';
				echo '<h1>Kelas : '.$r['kls'].'</h1>';
				echo '<table style="margin:0 auto;" cellspacing="0" border="0">';
				echo '<thead>';
				echo '<tr>';
				foreach($table as $h):
					echo '<th>'.$h['caption'].'</th>';
					endforeach;
				echo '</tr>';
				echo '</thead>';
				}
			echo '<tr>';
			foreach($table as $h):
				echo '<td>'.$r[$h['name']].'</td>';
				endforeach;
			echo '</tr>';
			if($max - ($key+1) == 0){
				echo '</table>';
				}
			$i = $r['kls'];			
		endforeach;
		?>
</body>

</html>

