<?php
//php syntax's are not case sensitive
echo "Hello World<br/>";
echo "Hello World<br/>";
echo "Hello World";

//but vairable names are case sensitive
$i = 5;
$I = 10;
//both are different.

// Note: Do not forget to add semicolons after every statements

// comments in php

// there are two types of single line comment

# With Hash
// With Two Forword Slash

// there are one more type of comment that used for multi line comment

/*
 this is multi line comment
*/

// also comments are used to prevent execution

$x = 10;

// $x = 10 + 33;

echo $x; // this will print 10. cause that line will not execute.


// php variables
$x = 10;
$y = 5.4;
$name = "Mahbub Rashid Tonoy";

/**
 * variables are like containers of data. it can store data, like integers, floating number, character, string, boolean while executing the program. (we will learn more about datatypes later)
 * php variables always start with $ sign
 * php variable name can not start with numbers (after $ sign)
 * php variable name only can contain Alpha-numeric characters (A-Z, a-z, 0-9, _);
 * variable names are case-sensitive, like $name and $Name are different variables
 */


/**
 * assigning values into variables.
 * we can assign variables using = operator (we will learn more about operators later)
 * example:-
 * 
 * $CGPA = 3.67;
 * 
 * Now $CGPA contains value 3.67;
 * 
 * reassigning values
 * after assign values into a variables, we can change/reassign as much as we need.
 * $CGPA = 3.67; //assigning values into variable
 * $CGPA = 3.88; //re-assign values into the same variable
 */

/**
 * also we can do some mathmatical operations into variables using mathmatical operators
 * example: - 
 * 
 * $a = 15;
 * $b = 13;
 * $total = $a + $b;
 * 
 * in that case, the value of $total is the summation of $a and $b;
 */

/**
 * php is loosely typed language
 * php doesn't need require to define datatypes. php automatically detect datatype of a variable.
 * but if we need to declare and strictly maintain the datatypes, we can use strict method that introduces in PHP version 7
 */

/**
 * PHP Scope
 * 
 * In general, Scope Means the accessibility of a declared variable.
 * 
 * PHP have 3 types of scope
 * 1. Local Scope
 * 2. Global Scope
 * 3. Static Scope
 * 
 * 
 */

 