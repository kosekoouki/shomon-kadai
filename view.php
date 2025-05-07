<?php
require_once 'Fruit.php';
require_once 'FruitStatistics.php';

$peachPrices = [];
$strawberryPrices = [];

for ($i = 0; $i < 15; $i++) {
    $peachPrices[] = rand(200, 300);
    $strawberryPrices[] = rand(400, 500);
}

$peach = new Fruit("桃", $peachPrices);
$strawberry = new Fruit("イチゴ", $strawberryPrices);

$peachStats = new FruitStatistics($peach->price);
$strawberryStats = new FruitStatistics($strawberry->price);

echo "桃の最大値は".$peachStats->getMax()."<br>";
echo "イチゴの最大値は".$strawberryStats->getMax()."<br>";
echo "桃の最小値は".$peachStats->getMin()."<br>";
echo "イチゴの最小値は".$strawberryStats->getMin()."<br>";
echo "桃の平均値は".$peachStats->getAvg()."<br>";
echo "イチゴの平均値は".$strawberryStats->getAvg()."<br>";

