<?php

$hostDB = 'ec2-44-194-117-205.compute-1.amazonaws.com';
$portDB = '5432';
$nameDB = 'dcs9mc57ci0jdg';
$userDB = 'jonqjkncieddif';
$pwDB = '1c266ed00e4daad162d3f05962325ea219a3be1c35402707823304951afeb850';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

if($connection){

}else{
 
}
?>