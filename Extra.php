<html>
  <head>
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 80%; width: 40%; float: right;}
    </style>
  </head>
  <body>
    <div id="map"></div>
	<?php Hae_saa_tiedot(566473);
Hae_saa_tiedot(564996);
Hae_saa_tiedot(565346);
Hae_saa_tiedot(775868);
?>
	
	
	 <?php//Hae_saa_tiedot(564996);?>
	 
    <script type="text/javascript">

var map;

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 62.240278, lng: 25.744444},
    zoom: 3
	  });

	   var marker = new google.maps.Marker({
    position: {lat:61.638889, lng:23.197222},
    map: map,
    title: 'Hämeenkyrö'

	   });
	   
	    var marker2 = new google.maps.Marker({
    position: {lat:62.240278, lng:25.744444},
    map: map,
    title: 'Jyväskylä'
	   });
	   	    var marker3 = new google.maps.Marker({
    position: {lat:60.170833, lng:24.9375},
    map: map,
    title: 'Helsinki'
	   });
   	    var marker4 = new google.maps.Marker({
    position: {lat:37.977778, lng: -0.683333},
    map: map,
    title: 'Torrevieja'
	   });


}




    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxeLeNpN-aMRMg9qpTQSCPaELoLs0vIqU&callback=initMap">
    </script>
  </body>
</html>
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



?>