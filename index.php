<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Dischi</title>
</head>
<body>
    <header>
        <div class="container">
            <img src="img/logo.png" alt="">
        </div>
    </header>

    <main>
        <div class="container">
            <div class="cards">

                <?php
                include __DIR__ . '/partials/database.php';
                
                foreach ($database as $album) {
                    echo '<div class="card">';
                    echo '<div class="cardImage">';
                    echo '<img src="'.$album["poster"].'" alt="">'.'</div>';
                    echo '<div class="cardInfo">';
                    echo '<h3>'.$album["title"].'</h3>';
                    echo '<p>'.$album["author"].'</p>';
                    echo '<h3>'.$album["year"].'</h3>';
                    echo '</div> </div>';
                }
                
                ?>

            </div>
        </div>
    </main>
</body>
</html>