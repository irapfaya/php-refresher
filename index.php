<?php try {
    ob_start();
    include('./includes/title.php');
    include('./includes/header.php');
?>
<?php } catch (Exception $e) {
    header('Location: ./error.php');
} ?>


<body>
    <?php require('./includes/nav.php'); ?>
    <div id="wrapper" class="container">

        <main>
            <h2 class="display-4 text-danger mt-4">Creating Interactive Websites with PHP</h2>
            <p>One of the benefits of using PHP . . .</p>
            <?php if (isset($imageSize)) { ?>
                <figure>
                    <img src="<?= $selectedImage ?>" alt="Random Image" width="350" height="237" class="figure-img img-fluid rounded" <?= $imageSize[3] ?>>
                    <figcaption class="figure-caption"><?= $caption ?></figcaption>
                </figure>
            <?php } ?>
            <p class="lead">Dangbana nor dey take backward step!!</p>
        </main>

    </div>
    <?php include('./includes/footer.php'); ?>
</body>