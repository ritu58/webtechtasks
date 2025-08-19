<?php
//1
$length = 15;
$width = 5;

$rectangle = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Rectangle= $rectangle <br>";
echo "Perimeter = $perimeter <br><br>";

//2
$amount = 1git000;
$vat = $amount * 0.15;

echo "VAT Calculation: <br>";
echo "Amount = $amount, VAT (15%) = $vat <br><br>";


//3
$number = 15;
echo "Odd or Even: <br>";
if ($number % 2 == 0) {
    echo "$number is Even <br><br>";
} else {
    echo "$number is Odd <br><br>";
}


// 4
$a = 20; $b = 35; $c = 15;
echo "Largest Number: <br>";
if ($a >= $b && $a >= $c) {
    echo "Largest = $a <br><br>";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest = $b <br><br>";
} else {
    echo "Largest = $c <br><br>";
}


// 5. 

echo "Odd Numbers between 10-100: <br>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}
echo "<br><br>";



// 6.
$arr = array(5, 10, 15, 20, 25);
$search = 15;
$found = false;

echo " Search in Array: <br>";
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



// 7

echo "Print Shapes:<br>";

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



// 8. 

echo " 2D Array and Shapes: <br>";

$arr2D = array(
    array(1, 2, 3, 'A'),
    array(1, 2, 'B', 'C'),
    array(1, 'D', 'E', 'F')
);

for ($i = 0; $i < count($arr2D); $i++) {
    for ($j = 0; $j < count($arr2D[$i]); $j++) {
        echo $arr2D[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>";

// Shape 
echo "Shapes from array: <br>";
echo "1<br>12<br>1<br>A<br>B C<br>D E F<br>";
