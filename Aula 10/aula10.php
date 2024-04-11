<?php
echo "<br>";
echo "#############################################";
echo "<br>";

$color = array ("red", "green", "blue", "yellow", "purple", "gray");

foreach ($color as $x) {
    echo "$x <br>";
}

echo "<br>";
echo "#############################################";
echo "<br>";

$members = array ("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach($members as $x => $y) {
    echo "$x: $y <br>";
}

echo "<br>";
echo "#############################################";
echo "<br>";

$color =  array ("red", "green", "blue", "yellow", "purple", "gray");

foreach ($color as $x) {
    if ($x == "blue")
    break;
echo "$x <br>";
}

echo "<br>";
echo "#############################################";
echo "<br>";

foreach ($color as $x) {
    if ($x == "blue")
    continue;
echo "$x <br>";
}


echo "<br>";
echo "#############################################";
echo "<br>";

class Car {
    public $color;
    public $model;
    public function _construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    $myCar new Car("red", "Volvo");

    foreach ($myCar as $x => $y) {
        echo "$x: $y <br>";
    }

?>