
    <?php require_once(__DIR__ . '/header.php'); ?>

    <main>
        <div id="liste-oeuvres">
            <?php foreach ($oeuvres as $oeuvre) : ?>

                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?php echo $oeuvre['id'] ?>">
                        <img src="<?php echo $oeuvre['image'] ?>" alt="Dodomu">
                        <h2><?php echo $oeuvre['titre'] ?></h2>
                        <p class="description"><?php echo $oeuvre['description_courte'] ?></p>
                    </a>
                </article>

            <?php endforeach; ?>
        </div>
    </main>
    <?php require_once(__DIR__ . '/footer.php'); ?>

