<?php require_once(__DIR__ . '/header.php'); ?>
<main>
    <?php
    if (isset($_GET['id']) && $_GET['id'] > 0 && $_GET['id'] < count($oeuvres)) {
        $oeuvre = $oeuvres[$_GET['id'] - 1];
    ?>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?php echo $oeuvre['image'] ?>" alt="Aashaaheen Baadal">
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo $oeuvre['titre'] ?></h1>
                <p class="description-complete"><?php echo $oeuvre['description_complete'] ?>
                </p>
            </div>
        </article>
    <?php } else {
        echo " aucune oeuvre trouve";
    }
    ?>
</main>
<?php require_once(__DIR__ . '/footer.php'); ?>