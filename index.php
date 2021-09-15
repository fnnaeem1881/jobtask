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


foreach($arr as $a){
    if($a['p_id']===0){
        echo "<ul>";
        echo "<li>".$a['title'];
        foreach($arr as $b){
            if($b['p_id']===$a['id']){
                echo "<ul>";
                echo "<li>".$b['title']; 
                    foreach($arr as $c){
                        if($c['p_id']===$b['id']){
                        echo "<ul>";
                        echo "<li>".$c['title']; 
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
