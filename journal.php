<?php include('./includes/title.php'); ?>
<?php include('./includes/header.php'); ?>

<body>
    <?php require('./includes/nav.php'); ?>
    <div id="wrapper" class="container">

        <main>
            <h2 class="display-4 text-danger mt-4">JOURNAL PAGE</h2>
            <p>One of the benefits of using PHP . . .</p>
            <figure>
                <img src="<?= $selectedImage ?>" alt="Water basin at Ryoanji temple" width="350" height="237" class="figure-img img-fluid rounded">
                <figcaption class="figure-caption"><?= $caption ?></figcaption>
            </figure>
            <p>Ut enim ad minim veniam, quis nostrud . . .</p>
            <p>Eu fugiat nulla pariatur. Ut labore et dolore . . .</p>
            <p>Sed do eiusmod tempor incididunt ullamco . . .</p>
        </main>
    </div>
    <?php include('./includes/footer.php'); ?>
</body>