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
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>果物の価格統計</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            margin: 0 auto;
            width: 70%;
        }
        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: center;
        }
        caption {
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 10px;
        }
        th {
            background-color: #f3f3f3;
        }
    </style>
</head>
<body>

<table>
    <caption>果物の価格比較（15個分）</caption>
    <thead>
        <tr>
            <th>果物</th>
            <th><?= $peach->name ?></th>
            <th><?= $strawberry->name ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>最大値</td>
            <td><?= $peachStats->getMax() ?> 円</td>
            <td><?= $strawberryStats->getMax() ?> 円</td>
        </tr>
        <tr>
            <td>最小値</td>
            <td><?= $peachStats->getMin() ?> 円</td>
            <td><?= $strawberryStats->getMin() ?> 円</td>
        </tr>
        <tr>
            <td>平均値</td>
            <td><?= $peachStats->getAvg() ?> 円</td>
            <td><?= $strawberryStats->getAvg() ?> 円</td>
        </tr>
    </tbody>
</table>

</body>
</html>
