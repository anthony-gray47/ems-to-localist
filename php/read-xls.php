<?php

require  '/home/pc2qr7s6a654/public_html/ems/ems-to-localist/vendor/autoload.php';
use \PhpOffice\PhpSpreadsheet\Reader\Xls;

include('/home/pc2qr7s6a654/public_html/ems/ems-to-localist/arrays/ems-to-localist-key-value.php');
include('/home/pc2qr7s6a654/public_html/ems/ems-to-localist/php/grab-localist-template.php');

$inputFileName = '/home/pc2qr7s6a654/public_html/ems/event-export.xls';
$finalCSV = array ();

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
$spreadsheet = $reader->load($inputFileName);
$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);


foreach($sheetData as $row => $array){
    $event = array_fill_keys($titles, '');
    foreach($array as $key => $value){
        if(!empty($array[$key])){
            if(!empty($fields[$key])){
                // IF the date, make Date To and Date From the same
                if($key == 'D'){
                    $count = 0;
                    foreach($fields[$key] as $date){
                        $localistField = $fields[$key][$count];
                        $event[$localistField] = $value;
                        $count = $count + 1;
                    }   
                }
                // IF the location, look at the location mapping array
                else if($key == 'H'){
                    if(!empty($locations[$value])){
                        $localistField = $fields[$key];
                        $loc = $locations[$value];
                        $event[$localistField] = $loc;
                    }
                }
                //IF the Department, look at Localist Department mapping array
                else if($key == "J"){
                    if(!empty($departments[$value])){
                        $localistField = $fields[$key];
                        $event[$localistField] = $departments[$value];
                    }
                }
                //IF the Event Type, look at Localist Event Type mapping array
                else if($key == "K"){
                    echo $value . " \n";
                    if(!empty($types[$value])){
                        foreach($types[$value] as $localistKey => $localistValue){
                           $event[$localistKey] = $localistValue;
                        }
                    }
                    /*foreach($types as $emsType => $localistTypeArray){
                        foreach($localistTypeArray as $localistKey => $localistValue){
                            echo "ems Type: " . $emsType . " Localist Key: " . $localistKey . " Localist Value: " . $localistValue . " \n";
                        }
                    }*/
                }
                else{
                    $localistField = $fields[$key];
                    $event[$localistField] = $value; 
                }
            }
        }
    }
    array_push($finalCSV, $event);
}


//array_unshift($finalCSV, $titles);
$finalCSV[0] = $titles;
var_dump($finalCSV);

$fp = fopen('/home/pc2qr7s6a654/public_html/ems/ems-to-localist/csv/output.csv', 'w'); 
  
foreach ($finalCSV as $value) { 
    fputcsv($fp, $value); 
} 
  
fclose($fp); 