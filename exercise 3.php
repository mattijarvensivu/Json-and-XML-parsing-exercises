<?php
$xml = simplexml_load_file("http://www.footballwebpages.co.uk/goalscorers.xml?comp=1")
?>
<head><title>Exercise 3</title></head>
<body>
<div style="margin-left:30%">
<h2><?php echo $xml->competition;?></h3>
<h3><?php echo $xml->description;?></h4>
</div>
<table style="margin-left:20%;" border="1">
<tr>
<th style="padding:20px">Position</td>

<th style="padding:20px">Player</td>

<th style="padding:20px">Team</td>

<th style="padding:20px">Goals</td>
</tr>

<?php 

for($i=0; $i< count ($xml->goalscorer); $i++){
	
?><tr><td style="padding:20px"><?php echo $xml->goalscorer[$i]->position;?></td><?php
?><td style="padding:20px"><?php echo $xml->goalscorer[$i]->player;?></td><?php
?><td style="padding:20px"><?php echo $xml->goalscorer[$i]->team;?></td><?php
?><td style="padding:20px"><?php echo $xml->goalscorer[$i]->goals;?></td>
							
</tr><?php

}

?>

</table>


<?php

$xml = simplexml_load_file("http://www.footballwebpages.co.uk/goalscorers.xml?comp=2")
?>


<div style="margin-left:30%">
<h2><?php echo $xml->competition;?></h3>
<h3><?php echo $xml->description;?></h4>
</div>
<table style="margin-left:20%;" border="1">
<tr>
<th style="padding:20px">Position</td>

<th style="padding:20px">Player</td>

<th style="padding:20px">Team</td>

<th style="padding:20px">Goals</td>
</tr>

<?php 

for($i=0; $i< count ($xml->goalscorer); $i++){
	
?><tr><td style="padding:20px"><?php echo $xml->goalscorer[$i]->position;?></td><?php
?><td style="padding:20px"><?php echo $xml->goalscorer[$i]->player;?></td><?php
?><td style="padding:20px"><?php echo $xml->goalscorer[$i]->team;?></td><?php
?><td style="padding:20px"><?php echo $xml->goalscorer[$i]->goals;?></td>
							
</tr><?php

}

?>

</table>


<?php

$xml = simplexml_load_file("http://www.footballwebpages.co.uk/goalscorers.xml?comp=3")
?>


<div style="margin-left:30%">
<h2><?php echo $xml->competition;?></h3>
<h3><?php echo $xml->description;?></h4>
</div>
<table style="margin-left:20%;" border="1">
<tr>
<th style="padding:20px">Position</td>

<th style="padding:20px">Player</td>

<th style="padding:20px">Team</td>

<th style="padding:20px">Goals</td>
</tr>

<?php 

for($i=0; $i< count ($xml->goalscorer); $i++){
	
?><tr><td style="padding:20px"><?php echo $xml->goalscorer[$i]->position;?></td><?php
?><td style="padding:20px"><?php echo $xml->goalscorer[$i]->player;?></td><?php
?><td style="padding:20px"><?php echo $xml->goalscorer[$i]->team;?></td><?php
?><td style="padding:20px"><?php echo $xml->goalscorer[$i]->goals;?></td>
							
</tr><?php

}

?>

</table>


<?php
$xml = simplexml_load_file("http://www.footballwebpages.co.uk/goalscorers.xml?comp=4")
?>


<div style="margin-left:30%">
<h2><?php echo $xml->competition;?></h3>
<h3><?php echo $xml->description;?></h4>
</div>
<table style="margin-left:20%;" border="1">
<tr>
<th style="padding:20px">Position</td>

<th style="padding:20px">Player</td>

<th style="padding:20px">Team</td>

<th style="padding:20px">Goals</td>
</tr>

<?php 

for($i=0; $i< count ($xml->goalscorer); $i++){
	
?><tr><td style="padding:20px"><?php echo $xml->goalscorer[$i]->position;?></td><?php
?><td style="padding:20px"><?php echo $xml->goalscorer[$i]->player;?></td><?php
?><td style="padding:20px"><?php echo $xml->goalscorer[$i]->team;?></td><?php
?><td style="padding:20px"><?php echo $xml->goalscorer[$i]->goals;?></td>
							
</tr><?php

}

?>

</table>

</body>
<?php
?>

