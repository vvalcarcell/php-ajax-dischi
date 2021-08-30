<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="container-fluid">
    <header>    
        <img src="./img/spotify-logo.png" alt="" />
    </header>
    
    <main>
        <?php
        
            require_once __DIR__ . "/database/database.php";

            foreach($database as $item) {
                echo "<div class=\"album-element\">
                            <img src=\"{$item[poster]}\"  />
                            <div class=\"title\">{$item[title]}</div>
                            <div class=\"info\">{$item[author]}</div>
                            <div class=\"info\">{$item[year]}</div>
                        </div>";
            };

        ?>
    </main>
    </div>


    


</body>
</html>