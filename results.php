
<?php
    // Created by: Julien Lamoureux
    // Created on: May 2023
    // This file contains the JS functions for index.html, Unit5-02-PHP-ProductOfNumbers

    // initialize product to 0
    $product = 0;

    // initialize numbers to an empty string
    $numbers = "";

    // get first integer
    $firstInt = $_POST["first-int"];
    $int1 = intval($firstInt);
    $absFirstInt = abs($int1);

    // get second integer
    $secondInt = $_POST["second-int"];
    $int2 = intval($secondInt);
    $absSecondInt = abs($int2);

    // if the user enters nothing, tell them to enter two integers
if (($firstInt == "") || ($secondInt == "")) {
        echo "Please enter two integers.";
} else {
// use a for loop to calculate the product from the two integers
for ($counter = 0; $counter < $absSecondInt; $counter++) {
            $product += $absFirstInt;
}

    // if the firstInt is less than 0 and the secondInt is greater than 0, then make the product negative
if (($firstInt < 0) && ($secondInt > 0)) {
            $product = $product * -1;
} elseif (($secondInt < 0) && ($firstInt > 0)) {
  // otherwise, if firstInt is greater than 0 and secondInt is less than 0, then make the product negative
            $product = $product * -1;
}

    // redefine calculation statement
    $numbers = $firstInt . "*" . $secondInt . "=" . $product;

    // display the product
    echo $numbers;
