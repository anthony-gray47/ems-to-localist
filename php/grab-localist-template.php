<?php 


echo "\n running grab-localist-template.php";

$csv = array();
$lines = file('/home/pc2qr7s6a654/public_html/ems/ems-to-localist/csv/template.csv', FILE_IGNORE_NEW_LINES);


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

var_dump($localist);
echo "count: " . $count;

?>
