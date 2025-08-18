<?php

// 1. Area and Perimeter of a Rectangle

$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "1. Rectangle: <br>";
echo "Area = $area <br>";
echo "Perimeter = $perimeter <br><br>";



// 2. VAT Calculation

$amount = 1000;
$vat = $amount * 0.15;

echo "2. VAT Calculation: <br>";
echo "Amount = $amount, VAT (15%) = $vat <br><br>";



// 3. Odd or Even
$number = 15;

echo "3. Odd or Even: <br>";
if ($number % 2 == 0) {
    echo "$number is Even <br><br>";
} else {
    echo "$number is Odd <br><br>";
}



// 4. Largest Number Among Three

$a = 20; $b = 35; $c = 15;

echo "4. Largest Number: <br>";
if ($a >= $b && $a >= $c) {
    echo "Largest = $a <br><br>";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest = $b <br><br>";
} else {
    echo "Largest = $c <br><br>";
}



// 5. Print Odd Numbers 10-100

echo "5. Odd Numbers between 10-100: <br>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}
echo "<br><br>";



// 6. Search an Element in Array

$arr = array(5, 10, 15, 20, 25);
$search = 15;
$found = false;

echo "6. Search in Array: <br>";
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $search) {
        $found = true;
        echo "Element $search found at index $i <br><br>";
        break;
    }
}
if (!$found) {
    echo "Element $search not found <br><br>";
}



// 7. Print Shapes with Nested Loop

echo "7. Print Shapes:<br>";

// Shape 1: Stars
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";

// Shape 2: Numbers
$count = 1;
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $count++ . " ";
    }
    echo "<br>";
}

echo "<br>";

// Shape 3: Alphabets
$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char++ . " ";
    }
    echo "<br>";
}

echo "<br>";



// 8. 2D Array & Shapes

echo "8. 2D Array and Shapes: <br>";

$arr2D = array(
    array(1, 2, 3, 'A'),
    array(1, 2, 'B', 'C'),
    array(1, 'D', 'E', 'F')
);

// Printing array
for ($i = 0; $i < count($arr2D); $i++) {
    for ($j = 0; $j < count($arr2D[$i]); $j++) {
        echo $arr2D[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>";

// Shape (like before)
echo "Shapes from array: <br>";
echo "1<br12<br1<brA<brB C<brD E F<br>";

?>