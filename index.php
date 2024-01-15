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
    <?php require_once(__DIR__ . '/oeuvres.php'); ?>

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
    
    <!-- il faut utiliser la crementation ++ dans le foreach -->
    <!-- étape 6 tester securiser dans la derniere etape 5 l'url -->
    <!-- savoir expliquer la defirence entre require et require_once la fonction include  -->
    <!-- la linge 14 require once des oeuvres.php il faut la metre dans le header.php -->
    <!-- dans l'etape 5 l'url il faut utilier get  -->

</body>


</html>