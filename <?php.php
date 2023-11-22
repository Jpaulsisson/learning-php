<?php
echo 'Hello World!';

// Declaring variables
$my_name = "Paul Sisson";
$my_age = 36;
$my_fav_food = "banana" . " " . "pudding";

// variable to be reassigned
$count = "Count: ";
echo "\n$count";

// create a duplicate of $count so we don't have to delete it but can still use it
$count_tally =& $count;

// count + 1
$count_tally .= "l";

//  \n starts a new line
echo "\n1. hang out";
echo "\n2. hang out more";
echo "\n3. Learn to have \"fun\"";

// notice the values are the same
echo "\n$count";
echo "\n$count_tally";

// count + 1
$count_tally .= "l";

// string concatenation
echo "\nCode" . "cademy";

echo "\n\n CONCATENATED";

// more concat using variables
echo "\nMy name is:" . " " . $my_name;
echo "\nI am " . $my_age . " years old";
echo "\nMy favorite food is " . $my_fav_food;
echo "\n$count";

// count + 1
$count_tally .= "l";

echo "\n\n PARSED ";

// or parsing variables in line
echo "\nMy name is: $my_name";
echo "\nI am $my_age years old";
echo "\nMy favorite food is $my_fav_food";
echo "\n$count_tally";

// integers
$base_num = 25;

// math
echo "\nAdd: " . $base_num + 5;
echo "\nSubtract: " . $base_num - 5;
echo "\nMultiply: " . $base_num * 5;
echo "\nDivide: " . $base_num / 5;
echo "\nExponent: " . $base_num ** 5;
echo "\nModulo: " . $base_num % 5;

// assignment operators
echo "\nWith assignment operators:";
// // Addition
$base_num += 5;
echo "\n$base_num";
// // Subtraction
$base_num -= 5;
echo "\n$base_num";
// // Multiplication
$base_num *= 5;
echo "\n$base_num";
// // Division
$base_num /= 5;
echo "\n$base_num";
// // Exponential
$base_num **= 5;
echo "\n$base_num";
// // Modulo
$base_num %= 5;
echo "\n$base_num";

// variable maths
$this_num = 10;
$that_num = 5;
$added_nums = $this_num + $that_num;
$subtracted_nums = $this_num - $that_num;
$multi_nums = $this_num * $that_num;
$divided_nums = $this_num / $that_num;
$exponent_nums = $this_num ** $that_num;
$modulo_nums = $this_num % $that_num;

echo "\nAdded nums: $added_nums";
echo "\nSubtracted nums: $subtracted_nums";
echo "\nMulti nums: $multi_nums";
echo "\nDivided nums: $divided_nums";
echo "\nExponent nums: $exponent_nums";
echo "\nModulo nums: $modulo_nums";

// auto increment/decrement by 1
$that_num++;
echo "\n" . $that_num;

$that_num--;
echo "\n" . $that_num . "\n";

// Functions
//// no params
function sayHey() {
  echo "Hey";
}

//// calling
sayHey();

//// with params
function sayParam($param) {
  echo "\n$param";
}

sayParam("I'm the param!");

//// multiple params
function sayMultipleParams($param1, $param2) {
  echo "\n$param1 $param2";
}

sayMultipleParams("I'm the first param!", "I'm the second Param!");

$a = "a";
$b = "b";

//// using variables as params
sayMultipleParams($a, $b);

//// setting optional/default params
function sayDefaultOrCustom($default = "default") {
  echo "\n$default";
}

sayDefaultOrCustom();
sayDefaultOrCustom("custom");

// use variables without altering their original state
function increaseVarByTen($var) {
  return $var + 10;
}

$number10 = 10;

echo "\n" . $number10;
echo "\n" . increaseVarByTen($number10);
echo "\n" . $number10;

// block scope variables
function increaseVarByMystery($var) {
  $mystery = 13;
  return $var + $mystery;
}

// This works fine
echo "\n" . increaseVarByMystery($number10);

// This would throw an error because mystery is locked into the function scope
// echo "\n" . $mystery;

// Arrays
$balls = ['basket', 'base', 'FOOT', 2, 1.2];

// built in methods
//// get type
echo "\n" . gettype($balls);
echo "\n" . gettype($balls[2]);
echo "\n" . gettype($balls[3]);
echo "\n" . gettype($balls[4]);

echo "\n" . str_repeat($balls[1], 8);
echo "\n" . strtoupper($balls[1]);
echo "\n" . strtolower($balls[2]);

echo "\n" . round($balls[4]);

echo "\n" . rand(1, 10);

// conditionals
function whatRelation($num) {
  if ($num === 100) {
    print "identical twins";
  }
  elseif ($num >= 35) {
    print "parent and child or full siblings";
  }
  elseif ($num >= 14) {
    print "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
  }
  elseif ($num >= 6) {
    print "first cousins";
  }
  elseif ($num >= 3) {
    print "second cousins";
  }
  elseif ($num >= 1) {
    print "third cousins";
  }
  elseif ($num === 0) {
    print "not genetically related";
  }
}

whatRelation(12);
whatRelation(55);
whatRelation(100);
whatRelation(0);
whatRelation(29);

function agreeOrDisagree($str1, $str2) {
  return $str1 === $str2 ? "You agree!" : "You disagree!";
};

echo agreeOrDisagree("hi", "bye");
echo agreeOrDisagree("hi", "hi");





?>