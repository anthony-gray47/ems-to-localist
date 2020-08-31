<?php 

$csv = array();
//Pull the recent template from localist
$lines = file('csv/template.csv', FILE_IGNORE_NEW_LINES);


foreach ($lines as $key => $value)
{
    $csv[$key] = str_getcsv($value);
}


$localist = array();
$count = 0;
$titles = $csv[0];

foreach($csv as $key => $value){
    $localist[$count] = array_combine($titles,$value);
    $count = $count + 1;
}

?>
