<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        echo "桃の最大値は: $max_price_peach 円<br>";
        echo "イチゴの最大値は: $max_price_strawberry 円<br>";
        echo "桃の最安値は: $min_price_peach 円<br>";
        echo "イチゴの最安値は: $min_price_strawberry 円<br>";
        echo "桃の平均値は: $avg_price_peach 円<br>";
        echo "イチゴの平均値は: $avg_price_strawberry 円<br>";
        ?>
</body>
</html>