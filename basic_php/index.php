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

echo "<br/>";

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
 * Global scope means a variable that declared outside of any function or block (curly braces) it can be acceable from outside of any function.
 * 
 * When a variable declare inside a function, it can be access into that function block but it can't accessable from outside of the function.
 * But there is some way to make local variable accessable globaly.
 * 
 * by using `global` variable, we can make a global variable inside of a function
 * 
 * function myFunction() {
 *  global $x, $y;
 * $y = 10;
 * }
 * myFunction();
 * echo $y;
 * 
 */

function myFunction()
{
 global $x, $y;
 $x = 33;
 $y = 100;
}
myFunction();
echo "<br/>";
echo $y;
echo "<br/>";
echo $x;
// echo "<br/><pre>";
// var_dump($GLOBALS);
// echo "<br/></pre>";

/**
 * $GLOBALS is a array type variable that store all global variable as array, the index of the array are the name of the variables. and it can be used inside of a function
 * 
 */
$var = 10;
function anotherFunction()
{
 echo $GLOBALS['var'];
}
echo "<br/>";
anotherFunction();
echo "<br/>";

/**
 * STATIC VARIABLES
 * as all we know all local variables get destroyed when the function executed. but sometimes we need to store these local variables. in that situation. `static` keyword come to play. if we write static before declaring a variable, then the variable become static and don't get destroyed when the function executed.
 */

function staticFunction()
{
 static $staticVariable = 0; //declare a variable with static keyword
 echo ++$staticVariable . "->";
}

staticFunction();
staticFunction();
staticFunction();

/**
 * printing and output statements.
 * we can print php variables and other things like srings and numbers with echo and print statements.
 * echo and print are the basic printing statements. alternatively we can use echo() and print() too. all does the same thing. (almost)
 * there are more printing ways like var_dump() and print_r() and we will discuss about them later;
 * 
 * 
 * echo and print have some minor changes, that is echo can take multiple arguments, on the other hand print can take one arguments at the same time. example: 
 * 
 * echo "A Quick Brown ", "Fox Jumps Over ", "The Lazy Dog"; //this line will print:- A Quick Brown Fox Jumps Over The Lazy Dog
 * echo("A Quick Brown ", "Fox Jumps Over ", "The Lazy Dog"); //this will print the same
 * 
 * print "A Quick Brown", "Fox Jumps Over", "The Lazy Dog"; // this will produce an error
 * print("A Quick Brown", "Fox Jumps Over", "The Lazy Dog"); // this will also produce an error
 * 
 * that means echo concat all the parameter and display the output. where print can't take multiple parameter
 * 
 * the another difference between echo and print is echo doesn't return anything while print return 1 when execute successfully. and that's why print can be used as logical expression.
 * 
 * echo is faster then print.
 */

/**
 * String:- In general words, string is a bunch of texts that sorrounded by single or double quotations, we can simply store,print or doing other stuff. but in depth, String is a datatype that contains one or more characters one by one in an array.
 * in real life, we just put single or double quotation at the beginning and end of some texts and that's all. 
 * 
 * syntax:-
 * 
 * $name = "Mahbub Rashid Tonoy";
 * $country = 'Bangladesh';
 * 
 * echo $name; //this will print Mahbub Rashid Tonoy
 * 
 */


/**
 * Integer:- Integer is a numeric datatype. it have no decimal point. and a specified base (binary, hexadesimal etc)
 * 
 * $intNumber = 10;
 * 
 * to see check datatype of a variable, use var_dump() function.
 * 
 * var_dump($intNumber); //this will print:- int(10)
 * 
 */

/**
 * Float or Floating Point Number:- float is another numeric datatype that have a decimal point. in another word float is a fraction number.
 * 
 * $floatNumber = 34.55;
 * 
 */

/**
 * Boolean:- boolean is a conditional datatype. it either represents true or false. it mostly used into conditional statements.
 * $boolean_variable1 = true;
 * $boolean_variable2 = false;
 */

/**
 * Array is the set of data. it's a datatype that allow us to store multiple types of data into a single variable. not like other language like C or JAVA etc, we can store multiple types of data into a single array.
 */

/**
 * Object is one of the most advance topic of PHP.
 * To Understand Object, We Need To Understand Two core topic of it! and it's class and object.
 * class is a template of an object and object is an instance of class.
 */
?>
<br/>


<?php
$str = "Mahbub Rashid Tonoy";
echo strlen($str);
echo "<br/>";
echo str_word_count($str);

/**
 * now let's discuss some functions that allows us to do some interactive thing with string
 * 
 * strlen() :- this function takes string as one and only arguments and return it's length or we may say total characters into this string
 * str_word_count() :- as same as strlen() but return total words instead of total characters.
 * strrev() :- this function take string argument and return it as reverse.
 */

 echo "<br/>";

 echo strrev(">.<");

 /**
  * strpos() :- this function return two string as arguments, and try to search second string arguments from first one. if found then return the first character position of matched keywords 
  */
  $myName = "Mahbub Rashid Tonoy";
  echo "<br/>";
  echo strpos($myName, "Tonoy"); //return 14

  /**
   * str_replace() :- this function take three arguments, first one is query, second one is replace string, and last one is the final string where we can perform a search and replace operation.
   */
  $place = "I live in Dhaka";
  $replace = str_replace("Dhaka", "Chittagong", $place);

  echo "<br/>";
  echo $replace; // this will print `I live in Chittagong`.


 echo "<br/>";
 echo crypt('Mahbub Rashid Tonoy','st');

 echo "<br/>";
 $file = "test.txt";
 md5_file($file);
 // file_put_contents(md5_file($file),$file);
 echo "<br/>";

 echo PHP_INT_MAX;
 echo "<br/>";
 echo PHP_INT_MIN;
 echo "<br/>";
 echo PHP_INT_SIZE;
 echo "<br/>";
