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



echo "<table border='2px' cellpadding='10px' cellpacing='0px'>
    <tr>
        <td>Name</td>
        <td>Department</td>
        <td>Age</td>
        <td>Emargency</td>
        <td>Personal</td>
        <td>Father</td>
        <td>Mother</td>
    </tr>


    ";

    foreach ($information as $key => $value) {
        echo "<tr><td>$key</td>"." <td>".$value['Department']."</td>"."<td>".$value['age']."</td>"."<td>".$value['phone']['Emargency']."</td>"."<td>".$value['phone']['personal']."</td>"."<td>". $value['phone']['parents']['father']."</td>"."<td>".$value['phone']['parents']['mother']."</td>"."</tr><br>";
    }
    echo "</table>";





 




?>