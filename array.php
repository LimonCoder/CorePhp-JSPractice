<?php



$information =  [

    "limon" => [
        "Department" => "CSE",
        "age" => 23,
        "phone" => [
            "Emargency" => "0183872340845" ,
            "Personal" => "0183872340845"  
        ]
    ],
    "shoikot" =>  [
        "Department" => "CSE",
        "age" => 24,
         "phone" => [
            "Emargency" =>  "0183872340845" ,
            "Personal" =>  "0183872340845" ,
            "Parents" =>[
            ]
        ]
    ],
     "Jony" =>  [
        "Department" => "CSE",
        "age" =>  45 ,
         "phone" => [
            "Emargency" =>  "0183872340845" ,
            "Personal" =>  "0183872340845" 
        ]
    ],
     "shakil" =>  [
        "Department" => "HONRS",
        "age" => 29,
         "phone" => [
            "Emargency" =>  "0183872340845" ,
            "Personal" =>  "0183872340845" 
        ]
    ]
]; 



foreach ($information as $key => $value) {
    echo $key ."---". $value['Department']." AGE : ".$value['age']."Phone -> :". $value['phone']['Emargency']  ."<br>";
}





 




?>