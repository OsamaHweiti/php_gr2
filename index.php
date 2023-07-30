<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    // TASK 1
     echo  phpversion(). '<br>';
    //task 2 
    
    echo " 'Tomorrow I 'll learn PHP global variables.'<br>" ; 
    echo " 'This is a bad command: del c:'<br>";
    // task 4
    
    echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'] . "<br>";  
    echo   $_SERVER["SCRIPT_NAME"] . '<br>';
    // task 5
 
 $url = 'https://www.w3schools.com/php/default.asp';
 
//task 6
var_dump(parse_url($url));
var_dump(parse_url($url, PHP_URL_SCHEME));
// task 7
    echo 'hw';
    //tsk 8
    
 
?>

</body>
</html>