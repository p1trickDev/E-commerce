<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Practice</title>
    <link rel="icon" href="data:,">
</head>

<body>
    <?php
    $x = 5;
    $solve = $x + 5;
    $name = "John";
    $age = 25;
    echo $name . " " . $age . "<br>";
    echo $solve + 5 . "<br>";
    echo $x + 5 . "<br>";
    echo "Hello World!" . "<br>";
    ?>

    <?php
    // global keyword and variable scope
    $x = 5;
    $y = 10;

    function myTest()
    {
        global $x, $y;
        $y = $x + $y;
    }


    $num1 = 5;
    $num2 = 10;

    myTest();
    echo $y . "<br>";

    function myTest2()
    {
        $GLOBALS['z'] = $GLOBALS['num1'] + $GLOBALS['num2'];
    }

    myTest2();
    echo $z . "<br>";




    function arrayTest()
    {
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "<br>";
        echo count($cars) . "<br>";
    }

    arrayTest();


    function loopTest()
    {
        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $value) {
            echo $value . "<br>";
        }
    }

    loopTest();


    function staticTest()
    {
        static $x = 0;
        echo $x . "<br>";
        $x++;
    }

    staticTest();
    staticTest();
    staticTest();

    function parameterTest($fname, $lname)
    {
        echo $fname . " " . $lname . "<br>";
    }

    parameterTest("John", "Doe");

    function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";

    function addNumbers(int $a, int $b)
    {
        return $a + $b;
    }

    echo addNumbers(5, 10) . "<br>";

    function addFive(&$value)
    {
        $value += 5;
    }

    $num = 2;

    addFive($num);

    echo $num . "<br>";

    function setHeight(int $minheight = 50)
    {
        echo "The height is: $minheight <br>";
    }

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);

    function sum2(int $x, int $y)
    {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum2(5, 10) . "<br>";
    echo "7 + 13 = " . sum2(7, 13) . "<br>";



    function addNumbers2(float $a, float $b): float
    {
        return $a + $b;
    }

    echo addNumbers2(1.2, 5.2) . "<br>";

    function addNumbers3(float $a, float $b): int
    {
        return (int)($a + $b);
    }

    echo addNumbers3(1.2, 5.2) . "<br>";



    echo strlen("Hello World!") . "<br>";


    echo "I love PHP!" . "<br>";
    echo "I love PHP!" . "<br>";
    echo "I love PHP!" . "<br>";








    ?>




</body>

</html>
