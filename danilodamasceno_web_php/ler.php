<?php
$myfile = fopen("dados.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file

$email = $_POST["email"];
$senha = $_POST["senha"];
$cont = 0;
$logint= "voce esta logado";
$loginf= "voce nao esta logado";

while(!feof($myfile)) {
   
  $arrM = explode(" ",fgets($myfile));
  
   if($arrM[2]==$email && $arrM[4]==$senha && $email!='' && $senha!=''){
       
       echo $logint;
       $cont++;
   }
    //echo $arrM[2]." ";
   // echo $arrM[4]."<br>";
    
}
    if($cont==0){
        echo $loginf."<br>";
    }
       // echo $senha." ....";
        //echo $email;

fclose($myfile);
?>