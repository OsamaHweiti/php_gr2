<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //1.	Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position. 
    // for ($x = 1 ;  $x<= 10 ; $x++){
    //     echo $x ;
    //     if ($x == 10)
    //     {
    //         continue;
    //     }

    //     else
    //     echo '-';
    // }


    //2. task 2 
    // $sum = 0 ;
    // for ($x = 0 ; $x<=30 ; $x++)
    // {
    //     $sum += $x;
    // }
    // echo $sum;

  // task 3 
$result = '';
for ($i = 0; $i < 5; $i++) {
  //SPACES
  for ($j = 0; $j < 5 - $i; $j++) {
    $result .= " " . chr(65) . " ";
  }
  for ($j = 0; $j < $i; $j++) {
    $result .= " " . chr(65 + $i) . " ";
  }
  $result .= "<br>";
}
echo $result;
echo "<hr>";

    //task 4
   
$result = '';
for ($i = 0; $i < 5; $i++) {
  //SPACES
  for ($j = 0; $j < 5 - $i; $j++) {
    $result .= " 1 ";
  }
  for ($j = 0; $j < $i; $j++) {
    $result .= " " . ($i + 1) . " ";
  }
  $result .= "<br>";
}

echo $result;
echo "<hr>";


// task 5

$result = "";
for ($i = 0; $i < 5; $i++) {
  for ($j = 0; $j < 5; $j++) {
    if($j == $i)
      $result .= " $i ";
    else
      $result .= " 0 ";
  }
  $result .= "\n<br>";
}
echo $result;
    //6.
    function fac($num){
        if($num == 0 ){
            return 1 ;
        }
        else 
        return $num * fac($num -1);
    }

    echo fac(5);


    // 7. 
        $n1=1; 
        $n2=0; 
          for($i=0;$i<=15;$i++){
            echo " $n2 ";
                $temp=$n1+$n2; 
                  $n1=$n2;    
                     $n2=$temp;	
        }
    
         
        //task 7
        $text = "Orange Coding Academy";
$count = 0;
for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] == 'c' || $text[$i] == 'C') {
        $count++;
    }
}
echo $count;
  //task 8
    echo '<table cellpadding="3px" cellspacing="0px">';
    for ($i = 1; $i <= 6; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= 5; $j++) {
            echo '<td>' . $i . ' * ' . $j . ' = ' . ($i * $j) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>
<?php
    

?>
</body>
</html>