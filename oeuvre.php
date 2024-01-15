<?php
//echo $_GET['id'];
//var_dump($_GET['id']);
require_once(__DIR__ . '/oeuvres.php');
//var_dump($oeuvres[$_GET['id']]);
//var_dump( $oeuvres[1]);


?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>
    <?php require_once(__DIR__ . '/header.php'); ?>
    <main>
        <?php foreach ($oeuvres as $key => $value) : ?>
            <?php if ($value['id'] == $_GET['id']) : ?> 
                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <img src="<?php echo $value['image'] ?>" alt="Aashaaheen Baadal">
                    </div>
                    <div id="contenu-oeuvre">
                        <h1><?php echo $value['titre'] ?></h1>
                        <p class="description-complete"><?php echo $value['description_complete'] ?>
                        </p>
                    </div>
                </article>
           <?php endif; ?> 

        <?php endforeach; ?>
    </main>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>

</html>