<?php

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
********

    --- Locations not in localist ---
    
    Purchasing & Central Receiving Building (PRCH)
    Practice Fields
    Early College Academy
    Prairie Building
    
********
*/

$locations = array(
    "AFC" => 'Flight Training Center',
    "AHS" => 'Allied Health and Sciences Building (AHS)',
    "ATTC" => 'Applied Technology and Trades Center (ATTC)',
    "AVT" => 'Aviation Technology Building (AVT)',
    "CCOD" => 'College Center (CCTR/CC)',
    "CCTR" => 'College Center (CCTR/CC)',
    "CNST" => 'Cornerstone Building (CNST)',
    "EDBH" => 'Ed Beaty Hall (EDBH/BH)',
    "F&OA" => 'Facilities & Operations Administration (F&OA)',
    "F&OS" => 'Facilities & Operations Administration (F&OA)',
    "FLPL" => 'Platte Building',
    "FLPR" => 'Prairie Building',
    "GAZ" => 'Gazebo',
    "HRZN" => 'Horizon Hall (HRZN/HH)',
    "LC" => 'Loveland Campus',
    "PERC" => 'Physical Education and Recreation Center (PERC)',
    "WSTV" => 'Westview Building (WSTV)',
    "AATC" => 'Automotive and Technology Center (AT)',
    "WPSI" => 'Public Safety Institute (PSI)'
);

/*
***********

    --- NO EMS Department but Localist Department ---
    
    "" => 'Public Safety, Transportation and Workforce Development',
    "" => 'Transfer Services',
    "" => 'Dean of Students Office',
    "" => 'Aims2UNC',
    "" => 'Aims Bookstore',
    "" => "Arty's Bistro/Grind",
    "" => 'Counseling Services',
    "" => 'Transitions Center',
    "" => "Cashier's Office",
    "" => 'Alumni',
    "" => 'Sociology',
    "" => 'Sterile Instrument Processing',
    "" => "Women's Studies",
    "" => 'Political Science',
    "" => 'Psychology',
    "" => 'Radiologic Technology',
    "" => 'Sciences',
    "" => 'Medical Preparation',
    "" => 'Anthropology',
    "" => 'Economics',
    "" => 'History',
    "" => 'Geography',
     
***********
*/

$departments = array(
   "Accounting (ACC)" => 'Accounting',
   "Advancing Academic Achievement (AAA)" => 'Advancing Academic Achievement (AAA)',
   "Agriculture (AGE,AGR,AGY,AME,ASC)" => 'Agriculture',
   "Visual & Performing Arts (ART,MUS,THE)" => 'Visual and Performing Arts',
   "Automotive Technology" => 'Automotive',
   "Aviation" => 'Aviation',
   "Business (BUS)" => 'Business',
   "Business & Technology" => 'Business Technology',
   "Business Technology" => 'Business Technology',
   "Communication Media" => 'Communication Media',
   "Engineering/CAD" => 'Engineering',
   "CIS/CSC" => 'Computer Information Systems',
   "Construction Management" => 'Construction Management',
   "Emergency Medical Services" => 'Emergency Medical Services',
   "Criminal Justice" => 'Criminal Justice',
   "Early Childhood Education" => 'Early Childhood Education',
   "Education" => 'Education',
   "English (ENG)/CCR" => 'English and Speech',
   "World Languages (ARA,FRE,GER,ITA,JPN,SPA,etc)" => 'World Languages and Ethnic Studies',
   "Fire Science" => 'Fire Science',
   "Graphic Design & Rich Media" => 'Graphic Design and Rich Media',
   "Health Sciences" => 'Health Programs',
   "Humanities (HUM)" => 'Humanities',
   "Industrial Technology" => 'Industrial Technology',
   "Marketing/Management" => 'Marketing/Management',
   "Mathematics (MAT)" => 'Math',
   "Medical Assisting/Phlebotomy" => 'Medical Assisting',
   "Music" => 'Music',
   "Nursing" => 'Nursing',
   "Nurse Aide" => 'Nurse Aid/CNA',
   "Oil & Gas Technologies" => 'Oil and Gas Technology',
   "Physical Education (PED)" => 'Physical Education',
   "Social Sciences" => 'Social Sciences',
   "Surgical Technology (STE)" => 'Surgical Technology',
   "Welding - Fort Lupton" => 'Welding',
   "Welding - Greeley" => 'Welding',
   "Art/Design" => 'Art and Design',
   "Medical Assisting/Phlebotomy" => 'Phlebotomy',
   "Foundation" => 'Foundation',
   "Campus Safety & Security" => 'Campus Safety and Security',
   "Career & Technical Education" => 'Career Services',
   "Disability Access Center" => 'Disability Access Services',
   "Facilities & Operations" => 'Facilities and Operations',
   "Office of Grants" => 'Office of Grants',
   "Human Resources" => 'Human Resources',
   "Information Technology" => 'Information Technology',
   "Purchasing" => 'Purchasing',
   "Writer's Community" => 'Writers Community',
   "Student Activities, Inclusion a& Leadership (SAIL)" => 'Student Activities, Inclusion and Leadership (SAIL)',
   "Admissions Counseling and Recruitment" => 'Admissions Counseling and Recruitment',
   "Pathway Advising" => 'Pathway Advising',
   "learning" => 'Learning Commons',
   "Early College High School-Greeley" => 'High School Programs',
   "Early College High School-Windsor" => 'High School Programs',
   "Center for Diversity & Inclusion" => 'Center for Diversity and Inclusion',
   "Financial Aid" => 'Financial Aid',
   "Reprographics" => 'Reprographics',
   "Student Enrollment, Records & Testing (AR&R)" => 'Student Enrollment, Records and Testing',
   "TRIO SSS Classic" => 'TRIO Student Support Services',
   "Financial Services" => 'Financial Services',
   "Workforce Development & Innovation Department" => 'Workforce Development & Continuing Education',
   "Adult ED & ESL" => 'Adult Education & ESL',
   "Institutional Research" => 'Institutional Research and Assessment',
   "Institutional Research & Assessment" => 'Institutional Research and Assessment',
   "Arts & Sciences" => 'Arts and Sciences',
   "Allied Health and Wellness" => 'Allied Health and Wellness',
   "College & Community Relations" => 'College and Community Relations',
   "Office of the President" => 'Office of the President'
);


/*
***********

    --- EMS Types that shouldn't go into the calendar ---
    
    "Training" => '14',
    "Weld County District 6" => '15',
    "Weld County District 8" => '16',
    "Weld RE-4 School District" => '17'
     
***********
*/


$types = array(
    "Administrative" => ['Target Audience' => 'Faculty & Staff'],
    "Advisory Meeting" => ['Target Audience'=> 'Faculty & Staff'],
    "Aims Community Event" => ['Target Audience'=> 'General Public, Current Students, Alumni, Faculty & Staff, Prospective Students',
                          'Topic' => 'Campus Life'],
    "Campus Wide" => ['Target Audience'=> 'Current Students, Faculty & Staff',
                          'Topic' => 'Campus Life'],
    "Conference" => ['Event Type'=> 'Meeting & Conferences, Career Development',
                          'Topic' => 'Academic'],
    "CPAT Testing" => ['Event Type'=> 'Career Development',
                          'Topic' => 'Academic, Student Resources'],
    "Department Meeting" => ['Event Type'=> 'Meeting & Conferences',
                          'Target Audience' => 'Faculty & Staff'],
    "Faculty" => ['Target Audience' => 'Faculty & Staff'],
    "Office of the President" => ['Target Audience' => 'Faculty & Staff'],
    "School Tours" => ['Target Audience' => 'Prospective Students, Parents',
                          'Topic' => 'Academic, Campus Life'],
    "Student Event" => ['Target Audience' => 'Current Students']
);

?>
