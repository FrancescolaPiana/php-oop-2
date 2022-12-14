<?php


include __DIR__ . './Models/Cibo.php';
include __DIR__ . './Models/Giochi.php';
include __DIR__ . './Data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Test</title>
</head>

<body>
    <div class="main">
        <div class="min">
            <?php foreach ($prodotti as $prodotto) { ?>
            <div class="card">
                <div class="mmg">
                    <img src="<?php echo $prodotto->imgPath ?>" alt="">
                </div>
                <div class="text">
                    <h1>
                        <?php echo $prodotto->name ?>
                    </h1>
                    <h2>
                        <?php echo $prodotto->price ?>
                    </h2>
                    <a href="">
                        <?php echo $prodotto->category->name ?>
                    </a>
                    <a href="">
                        <?php echo get_class($prodotto); ?>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>