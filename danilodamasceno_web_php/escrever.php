<?php
$myfile = fopen("dados.txt", "a") or die("Unable to open file!");
$linha ="\n";
fwrite($myfile, $linha);
$space =" ";
$name = $_POST["name"];
fwrite($myfile, $name);
fwrite($myfile, $space);
$sobrenome = $_POST["sobrenome"];
fwrite($myfile, $sobrenome);
fwrite($myfile, $space);
$email = $_POST["email"];
fwrite($myfile, $email);
fwrite($myfile, $space);
$sexo = $_POST["gender"];
fwrite($myfile, $sexo);
fwrite($myfile, $space);
$senha = $_POST["senha"];
fwrite($myfile, $senha);

fclose($myfile);


?>
