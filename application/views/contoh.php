<?php
function genTable($isi, $header){
	if(is_array($isi)){
		echo "<table><thead><tr>";
		foreach($header as $h){
			echo "<th>".$h."</th>";
			}
		echo "</tr></thead>";
		//HEAD
		echo "<tbody>";
		foreach($isi as $tr){
			echo "<tr>";
			foreach($tr as $td){
				echo "<td>".$td."</td>";
				}
			echo "</tr>";
			}
		echo "</tr></tbody>";
		echo "</table>";
		}
	else{
		echo "Parameter pertama hanya menerima array!";
		}
	}
?>
