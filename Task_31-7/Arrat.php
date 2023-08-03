<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Q1</p>
    <?php
    $colors  = ["red" , "green" , "white"];
    echo "The memory of  that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
    
<p>Q2</p>
    <?php $colors = array('white', 'green', 'red');?>
    <ul>
        <?php foreach ($colors as $color): ?>
            <li><?php echo $color; ?></li>
        <?php endforeach; ?>
    </ul>
    <?php
    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";
    ?>
    <p>Q3</p>
    <?php 
        $cities= array( 
            "Italy"=>"Rome", 
            "Luxembourg"=>"Luxembourg", 
            "Belgium"=> "Brussels", 
            "Denmark"=>"Copenhagen", 
            "Finland"=>"Helsinki", 
            "France" => "Paris", 
            "Slovakia"=>"Bratislava", 
            "Slovenia"=>"Ljubljana", 
            "Germany" => "Berlin", 
            "Greece" => "Athens", 
            "Ireland"=>"Dublin", 
            "Netherlands"=>"Amsterdam", 
            "Portugal"=>"Lisbon", 
            "Spain"=>"Madrid" 
        ); 
         
        echo "The capital of ". $cities["Germany"]. " is ". $cities["Germany"]. "<br>";
        echo "The capital of ". $cities["Greece"]. " is ". $cities["Greece"]. "<br>";
        echo "The capital of ". $cities["Netherlands"]. " is ". $cities["Netherlands"]. "<br>";
        echo "The capital of ". $cities["Italy"]. " is ". $cities["Italy"]. "<br>";
        echo "The capital of ". $cities["Spain"]. " is ". $cities["Spain"]. "<br>";
        echo "The capital of ". $cities["France"]. " is ". $cities["France"]. "<br>";
        echo "The capital of ". $cities["Slovakia"]. " is ". $cities["Slovakia"]. "<br>";
        echo "The capital of ". $cities["Slovenia"]. " is ". $cities["Slovenia"]. "<br>";
        echo "The capital of ". $cities["Belgium"]. " is ". $cities["Belgium"]. "<br>";
        echo "The capital of ". $cities["Denmark"]. " is ". $cities["Denmark"]. "<br>";
        echo "<br>";
        echo "------------------------------------------" . "<br>";
        echo "<br>";
    ?>
    <p>Q4</p>
    <?php 
    $color = array (4 => 'white', 6 => 'green', 11=> 'red');
    echo reset($color);
    echo "<br>";
    echo "------------------------------------------" . "<br>";
    echo "<br>";
    ?>
    <p>Q5</p>
    <?php 
    // Write a PHP script that inserts a specific new item in an array in any position.
    // Sample Input:
    // Array 1 2 3 4 5   
    // Location: 4
    // New Item: $
    // Expected Output: 1 2 3 $ 4 5
    
    $arr = [1, 2, 3, 4, 5];
    $new_item = '$';
    $location = [4];
    //$arr[$location] = $new_item;
    array_splice($arr,3,0,$new_item);
    print_r($arr);
    echo "<br>";
    echo implode(' ', $arr);

    echo "<br>";
    echo "------------------------------------------" . "<br>";
    echo "<br>";
    ?>
    <p>Q6</p>
    <?php 
    //Write a PHP script to sort the following associative array depending on the key value [asc] : 
    // Sample Input: 
    // $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    // Expected Output:
    // c = apple
    // b = banana
    // d = lemon
    // a = orange
    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    asort($fruits);
    foreach ($fruits as $key => $value) {
        echo "$key = $value <br>";
        }
        
    
    echo "<br>";
    echo "------------------------------------------" . "<br>";
    echo "<br>";
    ?>
    <p>Q7</p>
    <?php 
    //Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 
    // Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
    // Expected Output:
    // Average Temperature is: 70.6 
    // List of seven lowest temperatures: 60, 62, 63, 63, 64, 
    // List of seven highest temperatures: 76, 78, 79, 81, 85,
    
    $a1 = array(
        78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
        76, 63, 75, 76, 73, 68, 62, 73, 72, 65,
        74, 62, 62, 65, 64, 68, 73, 75, 79, 73
    );
    $a2 = count($a1);
    $sum = 0;
    foreach($a1 as $a2){
        $sum = $sum + $a2;
    }
    $Average = $sum / $a2;
    echo "Average Temperature is: $Average <br>";
    // echo "List of seven lowest temperatures: "."<br>";
    $sorted_a1 =$a1;
    sort($sorted_a1);
    $lowest_a1 =array();
    $i = 0;
    foreach ($sorted_a1 as $a1) {
        $lowest_a1[] = $a1;
        $i++;
        if ($i === 5) {
            break;
        }
    }
    // echo "List of seven highest temperatures: ";
    $highest_a1 = array();
    $i = 0;
    foreach (array_reverse($sorted_a1 ) as $a1) {
        $highest_a1[] = $a1;
        $i++;
        if ($i === 5) {
            break;
        }
    }
    
    echo "<br>";
    echo "Average Temperature is: " . number_format($Average, 1) ."<br>";
    echo "List of five lowest temperatures: " . implode(', ', $lowest_a1) ."<br>";
    echo "List of five highest temperatures: " . implode(', ', $highest_a1) ."<br>";


    

    
    //echo implode(' ', $a1);
    echo "<br>";
    echo "------------------------------------------" . "<br>";
    echo "<br>";
    ?>
    <p>Q8</p>
    <?php 
    
    //Write a PHP program to merge the following two arrays. 
    // Sample Input: 
    // $array1 = array("color" => "red", 2, 4);
    // $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    // Expected Output:
    // Array
    // (
    //     [color] => green
    //     [0] => 2
    //     [1] => 4
    //     [2] => a
    //     [3] => b
    //     [shape] => trapezoid
    //     [4] => 4
    // )
    $arr1 = array("color" => "red", 2, 4);
    $arr2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $newArr = array_merge($arr1, $arr2);
    print_r($newArr);

    echo "<br>";
    echo "------------------------------------------" . "<br>";
    echo "<br>";
    ?>
    <p>Q9</p>
    <?php 
    // Write a PHP function to change the following array's and convert all the strings to upper case. 
    // Sample Input:
    // $colors = array("red","blue", "white","yellow");
    // Expected Output :
    // Array
    // (
    //     RED
    //     BLUE
    //     WHITE
    //     YELLOW
    // )
    function UpperCase($array) {
        return array_map('strtoupper', $array);
    }
    $colors = array("red", "blue", "white", "yellow");
    $upperCaseColors = UpperCase($colors);
    print_r($upperCaseColors);
    
    echo "<br>";
    echo "------------------------------------------" . "<br>";
    echo "<br>";
    ?>
    <p>Q10</p>
    <?php 
    // 10.	Write a PHP function to change the following array's and convert all the strings to lower case. 
    // Sample Input:
    // $colors = array("RED","BLUE", "WHITE","YELLOW");
    // Expected Output :
    // Array
    // (
    //     red
    //     blue
    //     white
    //     yellow
    // )
    function Lowercase($array) {
        return array_map('strtolower', $array);
    }
    $colors = array("RED", "BLUE", "WHITE", "YELLOW");
    $lowercaseColors =  Lowercase($colors);
    print_r($lowercaseColors);

    echo "<br>";
    echo "------------------------------------------" . "<br>";
    echo "<br>";
    ?>
    <p>Q11</p>
    <?php 
    // 11.	 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 

    // Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248
    $divisibleNumbers = array();
    for ($number = 200; $number <= 250; $number++) {
        if ($number % 4 === 0) {
            $divisibleNumbers[] = $number;
        }
    }
    echo implode(',', $divisibleNumbers);

    echo "<br>";
    echo "------------------------------------------" . "<br>";
    echo "<br>";
    ?>
    <p>Q12</p>
    <?php 
    // Write a PHP script to get the shortest/longest string length from an array. 
    // Sample Input:
    //  $words =  array("abcd","abc","de","hjjj","g","wer")
    // Expected Output : 
    // The shortest array length is 1. The longest array length is 4.
    $a1 = array("abcd", "abc", "de", "hjjj", "g", "wer");
    $shortestLength = PHP_INT_MAX;
    $longestLength = 0;
    foreach ($a1 as $word) {
        $length = strlen($word);
        if ($length < $shortestLength) {
            $shortestLength = $length;
        }
        if ($length > $longestLength) {
            $longestLength = $length;
        }
    }
    echo "The shortest array length is $shortestLength. The longest array length is $longestLength.";

    echo "<br>";
    echo "------------------------------------------" . "<br>";
    echo "<br>";
    ?>
    <p>Q13</p>
    <?php 
    // Write a PHP script to generate unique random 10 numbers within a specific range. 

    // Sample Input: (11, 20)
    // Sample Output: 17 16 13 20 14 19 18 15 11 12
    function randomnumber($min, $max, $count) {

        $allNumbers = range($min, $max);
    
        shuffle($allNumbers);
    
       
        $randomNumbers = array_slice($allNumbers, 0, $count);
    
        return $randomNumbers;
    }
    
    // Sample input
    $minRange = 11;
    $maxRange = 20;
    $numberOfRandomNumbers = 10;
    
    // Generate unique random numbers
    $randomNumbers = randomnumber($minRange, $maxRange, $numberOfRandomNumbers);
    
    // Output the result
    echo implode(' ', $randomNumbers);
    
    echo "<br>";
    echo "------------------------------------------" . "<br>";
    echo "<br>";
    ?>
    <p>Q14</p>
    <?php 
    // Write a PHP script that returns the lowest integer in the array  that is not 0. 

    // Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
    // Sample Output:  2
  
    $array1 = array(2, 0, 10, 12, 6);

    $lowestInteger = null;

    foreach ($array1 as $num) {
      
        if ($num !== 0 && ($lowestInteger === null || $num < $lowestInteger)) {
            $lowestInteger = $num;
        }
    }

    
    echo $lowestInteger;

    echo "<br>";
    echo "------------------------------------------" . "<br>";
    echo "<br>";
    ?>
<p>Q</p>
    <?php

    echo "<br>" ;
    echo "-------------------------------------------------------------------". "<br>";

    ?>
</body>
</html>