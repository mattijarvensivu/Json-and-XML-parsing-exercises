<?php 


$xml = simplexml_load_file("http://www.footballwebpages.co.uk/league.xml?comp=2");
?>
<head><title>Exercise 2</title></head>
<body>
<div style="margin-left:30%">
<h2><?php echo $xml->competition;?></h3>
<h3><?php echo $xml->description;?></h4>
</div>
<table style="margin-left:20%;">
<tr>
<th style="padding:20px">Position</td>

<th style="padding:20px">Name</td>

<th style="padding:20px">for-against=diff</td>

<th style="padding:20px">points</td>
</tr>

<?php 

for($i=0; $i< count ($xml->team); $i++){
	
?><tr><td style="padding:20px"><?php echo $xml->team[$i]->position;?></td><?php
?><td style="padding:20px"><?php echo $xml->team[$i]->name;?></td><?php
?><td style="padding:20px"><?php echo $xml->team[$i]->for;echo "-";
								echo $xml->team[$i]->against;echo "=";
								echo $xml->team[$i]->goalDifference;?></td>
							
<td style="padding:20px"><?php echo $xml->team[$i]->points;?></td></tr><?php

}

?>

</table>

<body>
<?php




?>