<?php


$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'Science'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'AAST'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'AAST'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'Science'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'AAST'],
];


foreach ($students as $series => $actors) {
	
	foreach ($actors as $actor) {

        if ($actor == 'Science' ) {  
          
            echo "<span style=color:red;> $actor </span>";
          }else{
            echo "<span>   $actor </span>" ;
          }
         
		
	} 
    echo "<br>                                      <br>";
          
}


?>






