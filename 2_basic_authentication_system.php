
<?php

 define("USERNAME","AFRAA");
 define("PASSWORD","12345");

 echo "Enter Username:";
 $inputUsername= readline();

 echo "Enter Password:";
 $inputPassword= readline();

 if($inputUsername === USERNAME && $inputPassword === PASSWORD){
    echo "Login successfull";

 }else{
    echo "Invalid Username & Password.";
 }
