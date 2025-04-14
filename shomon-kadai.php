<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>果物の価格比較</title>
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
            padding: 10px 15px;
            text-align: center;
        }
        th {
            background-color:#f3f3f3;
        }
        caption {
            font-size: 20px;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>    
</head>
<body>
    <?php
    
    $price_peach = [];
    $price_strawberry = [];
    
    for ($i = 0; $i < 15; $i++){
        $price_peach [] = rand (200 , 300);
        $price_strawberry[] = rand (400 , 500);}

        $max_price_peach = max($price_peach);
        $max_price_strawberry = max($price_strawberry);

        $min_price_peach = min($price_peach);
        $min_price_strawberry = min($price_strawberry);

        $avg_price_peach = round (array_sum($price_peach) / count($price_peach));
        $avg_price_strawberry = round (array_sum($price_strawberry) / count($price_strawberry));

        ?>
<table>
    <caption>果物の価格比較 (15個分) </caption>
    <thead>
        <tr>
            <th>果物</th>
            <th>桃</th>
            <th>イチゴ</th>
        </tr>
    </thead>
<tbody>
    <tr>
        <td>最大値</td>
        <td><?= $max_price_peach?> 円</td>
        <td><?= $max_price_strawberry ?>円</td>
    </tr>
    <tr>
        <td>最小値</td>
        <td><?= $min_price_peach?> 円</td>
        <td><?= $min_price_strawberry?> 円</td>
    </tr>
    <tr>
        <td>平均値</td>
        <td><?= $avg_price_peach?> 円</td>
        <td><?= $avg_price_strawberry?> 円</td>
    </tr>
</tbody>    
</table>
</body>
</html>