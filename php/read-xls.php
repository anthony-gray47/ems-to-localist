<?php

/*
****
****
Use composer to install PhpSpreadsheet into your project.


command: composer require phpoffice/phpspreadsheet

Reference docs for more information: https://phpspreadsheet.readthedocs.io/en/latest/

After installation a vendor folder should be added to your project. 

*/

require  'vendor/autoload.php';
use \PhpOffice\PhpSpreadsheet\Reader\Xls;

include('arrays/ems-to-localist-key-value.php');
include('php/grab-localist-template.php');

$inputFileName = 'path/to/ems/export/event-export.xls';
$finalCSV = array ();

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
$spreadsheet = $reader->load($inputFileName);
$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);


foreach($sheetData as $row => $array){
    $event = array_fill_keys($titles, '');
    foreach($array as $key => $value){
        if(!empty($array[$key])){
            if(!empty($fields[$key])){
                // If the date, make Date To and Date From the same
                if($key == 'D'){
                    $count = 0;
                    foreach($fields[$key] as $date){
                        $localistField = $fields[$key][$count];
                        $event[$localistField] = $value;
                        $count = $count + 1;
                    }   
                }
                // If the location, look at the location mapping array
                else if($key == 'H'){
                    if(!empty($locations[$value])){
                        $localistField = $fields[$key];
                        $loc = $locations[$value];
                        $event[$localistField] = $loc;
                    }
                }
                //If the Department, look at Localist Department mapping array
                else if($key == "J"){
                    if(!empty($departments[$value])){
                        $localistField = $fields[$key];
                        $event[$localistField] = $departments[$value];
                    }
                }
                //If the Event Type, look at Localist Event Type mapping array
                else if($key == "K"){
                    echo $value . " \n";
                    if(!empty($types[$value])){
                        foreach($types[$value] as $localistKey => $localistValue){
                           $event[$localistKey] = $localistValue;
                        }
                    }
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


$finalCSV[0] = $titles;
$fp = fopen('csv/output.csv', 'w'); 
  
foreach ($finalCSV as $value) { 
    fputcsv($fp, $value); 
} 
  
fclose($fp); 