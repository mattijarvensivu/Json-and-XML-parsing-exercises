<?php 

$csvFile = 'employees.csv';
$file_handle = fopen($csvFile, 'r');

while (!feof($file_handle) )  //Tests for end-of-file on a file pointer. True when ends.
	{
		$Employees[] = fgetcsv($file_handle, 200);
	}
	
	
	$xml = simplexml_load_string("<?xml version='1.0'?><employees></employees>");//XML root
	for ($i=1; $i< (count($Employees)-1); $i++){
	$j=0;
 $employee    = $xml->addChild('employee');
 $employee->addChild('id', $i);
 $employee->addChild('first_name',($Employees[$i][$j+1]));
 $employee->addChild('last_name', ($Employees[$i][$j+2]));
 $employee->addChild('latitude', ($Employees[$i][$j+3]));
 $employee->addChild('longlitude', ($Employees[$i][$j+4]));
 $employee->addChild('company', ($Employees[$i][$j+5]));
 $employee->addChild('ip_address', ($Employees[$i][$j+6]));
 $employee->addChild('last_updated', ($Employees[$i][$j+7]));
  

	}
	Header('Content-type: text/xml');
 echo $xml->asXML();


?>