<?php
$myfile = fopen("dados.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
$texto;

while(!feof($myfile)) {
   
  
 
  $arrM = explode(" ",fgets($myfile));
  
   echo $arrM[0]." ";
   echo $arrM[1]." ";
   echo $arrM[2]." ";
   echo $arrM[3]."<br>";
   
}
fclose($myfile);
?>