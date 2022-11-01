<?php
 

 //Traditional way

$capitalCity1 = ['Nairobi' , 'Dodoma' , 'Kampala'];

print_r($capitalCity1) ;

if(isset($capitalCity1[3])){
    echo $capitalCity1[3];
}
else{
    echo 'Capital does not exist';
}


//associative array using key as index

 $capitalCity2 =[
     'Kenya' => 'Nairobi' ,
     'Tanzania' => 'Dodoma' ,
     'Uganda' => 'Kampala'

 ];


 if(isset($capitalCity2['Tanzania'])){
    echo $capitalCity2['Tanzania'];
 }

 else {
   echo 'Capital city does not exist';
 }