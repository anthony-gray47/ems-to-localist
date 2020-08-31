<?php


/*
****
****
Key = EMS column name
Value = Localist Column name

Notes: The EMS column names are letters because they come in from the .xls file that way.
****
****
*/

//Example Field Array
$fields = array(
    "A" => 'Title',
    "B" => 'Description',
    "D" => ['Date From', 'Date To'],
    "K" => 'Event Types',
    "J" => 'Department',
    "H" => 'Location',
    "I" => 'Room',
    "M" => 'Owner Email',
    "E" => 'Start Time',
    "F" => 'End Time'
);





/*
****
****
Key: EMS Building Name
Value: Localist Location Name

Notes: Ideally, you should change the name of the Location in EMS to match the name in Localist. This wasn't an option for our team. 
****
****
*/


//Example Location Array
$locations = array(
    "Football Field" => 'Mile High Stadium',
);










/*
****
****
Key: EMS Department Name
Value: Localist Department Name

Notes: Ideally, you should change the name of the Department in EMS to match the name in Localist. This wasn't an option for our team. 
****
****
*/

//Example Department array
$departments = array(
   "Example Department" => 'Example Department in Localist Name'
);









/*
****
****
Key: EMS Event Type
Value: Localist Event Type, Target Audience, and Topic

Notes: Unfortunatlly, EMS Event types are very limited. We mapped each EMS event type to the most fitting Localist Event Type, Topic, and Target Audience. 
****
****
*/


$types = array(
    "EMS Event Type" => ['Target Audience'=> 'Localist Target Audience, Other Target Audiences',
                         'Topic' => 'Localist Topic',
                         'Event Type'=> 'Event Type 1, Event type 2'
                        ]
);

?>
