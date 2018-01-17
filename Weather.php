<?php 
function Hae_saa_tiedot($paikkakunta){
$haku = file_get_contents('http://weather.yahooapis.com/forecastrss?w=' . $paikkakunta. '&u=c'); //Woeid paikkaunta koodi ja valitaan celssius
$xml = simplexml_load_string($haku);
   
foreach($xml->channel->item as $item){
        
	$title = $item->title;
	$link = $item->link;
	$description = $item->description;
        $output = <<<END
            
	<h1><a href='{$link}'>{$title}</a></h1>
		
	{$description}
	    <hr/>	
END;
 }
echo $output;
}

Hae_saa_tiedot(566473); //paikkakuntakoodit
Hae_saa_tiedot(564996);
Hae_saa_tiedot(565346);
Hae_saa_tiedot(775868);

?>