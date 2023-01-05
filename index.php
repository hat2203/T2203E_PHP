<?php
    $x = 20;

    $menu =[
            "Cafe cot dua",
            "Cafe sua",
            "Cafe den",
            "Bac siu",
            "Cappuchino",
            "Latte",
            "Mocha",
            "Caramel machiato"
    ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello world!</h1>

    <h2>So luong sinh vien: <?php echo $x+5;// cho nay co the viet code php ?></h2>
    <?php if ($x >= 20) :?>
        <h3>Lop dong</h3>
    <?php else: ?>
        <h3>Lop vang</h3>
    <?php endif ?>

    <h2>Danh sach do uong</h2>
    <ul>
        <?php foreach ($menu as $item): ?>
            <li><?php echo $item;?></li>
        <?php endforeach; ?>
    </ul>
    <?php include ("footer.php");?>
</body>
</html>
