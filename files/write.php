<?php
//open a file in append mode and write some content into it
$filename = "../forms/userdata.csv";    
$handle = fopen($filename, "a");//open file in read mode    
fwrite($handle, "yes i'm");//write to file)  
fclose($handle);//close file
