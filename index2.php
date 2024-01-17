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
            <?php
            for ($i = 0; $i < 15; $i++) {

                $image = $oeuvres[$i]['image'];
                $titre = $oeuvres[$i]['titre'];
                $desc = $oeuvres[$i]['description_courte'];
                $id = $oeuvres[$i]['id'];

                echo "
                    <article class=\"oeuvre\">
                        <a href=oeuvre.php?id=$id>
                            <img src=$image alt=\"Dodomu\">
                            <h2>$titre</h2>
                            <p class=\"description\">$desc</p>
                        </a>
                    </article>
                 ";
            }
            ?>
        </div>
    </main>
    <?php require_once(__DIR__ . '/footer.php'); ?>

</body>

</html>