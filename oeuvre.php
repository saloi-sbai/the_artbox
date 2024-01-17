
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
        <?php if (!isset($_GET['id'])) : ?>
            <h2 class="centered">id manquant</h2>
        <?php elseif (isset($_GET['id'])) : ?>
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

        <?php endif; ?>

    </main>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>

</html>