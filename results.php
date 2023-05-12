<?php
// Created by: Julien Lamoureux
// Created on: May 2023
// This file contains the JS functions for index.html, Unit5-02-PHP-ProductOfNumbers

  // intialize product to 0
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

  $variable = 0;

  // if the user enters nothing, tell them to enter two integers
  if (($firstInt=="") || ($secondInt=="")) {
    echo "Please enter two integers.";
  }

  // use a for loop to calculate the product from the two integers 
  else {
    for ($counter = 0; $counter< $absSecondInt; $counter++) {
      $product += $absFirstInt;
    }
  
      if (($firstInt < 0)&&($secondInt>0)) {
        $product = $product*-1;
      }
      else if (($secondInt < 0)&&($firstInt>0)) {
        $product = $product*-1;
        
      }
    
      $numbers = $firstInt."*".$secondInt."=".$product;
      echo $numbers;
  }
?>