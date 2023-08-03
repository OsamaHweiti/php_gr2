<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!--   
  <?php
    $name  = $_POST['name'];
    echo 'to lower: '. strtolower($name).'<br>';
  ?>
  <?php
    $name  = $_POST['name'];
    echo 'to upper: '. strtoupper($name).'<br>';
  ?>
  <?php
    $name  = $_POST['name'];
    echo 'first letter to upper: '. strtoupper($name[0]) .substr($name,1).'<br>';
  ?>
  <?php
    $name  = $_POST['name'];
    echo 'first of each word to upper: '. ucwords($name).'<br>';
  ?>
  <form action="home.php" method ='post'>
    <input type="text" name='name'>
    <button>Submit</button>
  </form>
  <br>
  <hr>
  <br>
  <form action="home.php" method ='post'>
    <input type="text" name='date'>
    <button>Submit</button>
  </form>
  <br>
  <hr>
  <br> -->
  <form action="home.php" method ='post'>
    <label>Sentance</label>
    <input type="text" name='findWord'>
    <label>word to look for</label>
    <input type="text" name='wordtofind'>
    <button>Submit</button>
  </form>
  <?php 
  // find a word sentence in a word  --- task 3
    $str  = $_POST['findWord'];
    $look  = $_POST['wordtofind'];
    if(strpos($str , $look) !== false){
      echo 'Word Found!';
    }else{
      echo 'Word not Found :(';
    }
  ?>

  <?php
  // get the file name from url  --- task 4
  echo '<br><br><br><br>';
  echo 'url https://www.w3schools.com/php/default.asp<br><br>';
  $url = 'https://www.w3schools.com/php/default.asp';
  $parsedUrl = parse_url($url);
  echo "Path: " . basename($url) . "<br>";


  // get username from email  --- task 5
  echo 'email: info@gmail.com <br>';
  $email = 'info@gmail.com';
  $username=strstr($email,'@',true);
  echo 'username: '.$username;
  ?>
  <?php 
    // get last three char 
    $email = 'info@orange.com';
    echo substr($email, -3)."\n";

  ?>
  <?php

    function generateRandomPassword($string, $length)
    {
        $stringLength = strlen($string);
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $randomIndex = random_int(0, $stringLength - 1);
            $password .= $string[$randomIndex];
        }

        return $password;
    }

   
    $givenString = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';


    
    $passwordLength = 8;


    $randomPassword = generateRandomPassword($givenString, $passwordLength);

    echo "Random Password: $randomPassword";
?>

<?php


?>


</body>
</html>