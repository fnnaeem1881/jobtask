<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Task</title>
</head>
<body>
<?php

$arr = [
    [
        "id"    => 500,
        "p_id"  => 0,
        "title" => "Bangladesh"
    ],
    [
        "id"    => 510,
        "p_id"  => 500,
        "title" => "Dhaka"
    ],
    [
        "id"    => 511,
        "p_id"  => 510,
        "title" => "Uttara"
    ],
    [
        "id"    => 512,
        "p_id"  => 510,
        "title" => "Khailgaon"
    ],
    [
        "id"    => 513,
        "p_id"  => 500,
        "title" => "NoyaKhali"
    ],
    [
        "id"    => 514,
        "p_id"  => 513,
        "title" => "Maijdi"
    ],
    [
        "id"    => 515,
        "p_id"  => 0,
        "title" => "Canada"
    ],
    [
        "id"    => 516,
        "p_id"  => 515,
        "title" => "Toronto"
    ],
    
];


foreach($arr as $fn){
    if($fn['p_id']===0){
        echo "<ul>";
        echo "<li>".$fn['title'];
        foreach($arr as $fn1){
            if($fn1['p_id']===$fn['id']){
                echo "<ul>";
                echo "<li>".$fn1['title']; 
                    foreach($arr as $fn3){
                        if($fn3['p_id']===$fn1['id']){
                        echo "<ul>";
                        echo "<li>".$fn3['title']; 
                        echo "</li>";
                        echo "</ul>";
                        } 
                    }
                echo "</li>";
                echo "</ul>";
            } 
        }
        echo "</li>";
        echo "</ul>";
        }
    
}

  ?>




</body>
</html>
