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
        <div id="liste-oeuvres">
            <?php foreach ($oeuvres as $key => $value) : ?>

                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?php echo $value['id']?>">
                        <img src="<?php echo $value['image'] ?>" alt="Dodomu">
                        <h2><?php echo $value['titre'] ?></h2>
                        <p class="description"><?php echo $value['description_courte'] ?></p>
                    </a>
                </article>

            <?php endforeach; ?>

        </div>
    </main>
    <?php require_once(__DIR__ . '/footer.php'); ?>
    
</body>


</html>