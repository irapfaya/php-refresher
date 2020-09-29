<?php include('./includes/title.php'); ?>
<?php include('./includes/header.php');
$errors = [];
$missing = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // email processing script
    $to = 'arindomudiare@gmail.com'; // use your own email address
    $subject = 'PHP Demo Form Feedback';
    // list expected fields
    $expected = ['name', 'email', 'comments'];
    // set required fields
    $required = ['name', 'email', 'comments'];
    require './includes/processmail.php';
}
?>


<body>
    <?php require('./includes/nav.php'); ?>
    <div id="wrapper" class="container">

        <main>
            <h2 class="display-4 text-danger mt-4">CONTACT US</h2>
            <?php if ($missing || $errors) { ?>
                <p class="text-danger">Please fix the item(s) indicated.</p>
            <?php } ?>
            <p class="lead">Reach out to Us with the Form below</p>
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="<?= htmlentities($_SERVER['PHP_SELF']) ?>">
                        <p class="form-group">
                            <label for="name">Name:<?php if (in_array('name', $missing)) { ?>
                                <span class="text-danger">Please enter your name</span>
                            <?php } ?></label>
                            <input name="name" id="name" type="text" class="form-control" <?php if ($missing || $errors) {
    echo 'value="' . htmlentities($name) . '"';
} ?>>
                        </p>
                        <p class="form-group">
                            <label for="email">Email: <?php if (in_array('email', $missing)) { ?>
                                    <span class="text-danger">Please enter your email address</span>
                                <?php } ?></label>
                            <input name="email" id="email" type="text" class="form-control">
                        </p>
                        <p class="form-group">
                            <label for="comments">Comments: <?php if (in_array('comments', $missing)) { ?>
                                    <span class="text-danger">Please enter your comments</span>
                                <?php } ?></label>
                            <textarea name="comments" id="comments" class="form-control"></textarea>
                        </p>
                        <p class="form-group">
                            <input name="send" type="submit" value="Send message" class="btn btn-danger">
                        </p>
                    </form>
                    <pre>
                <!-- <?php if ($_POST) {
    print_r($_POST);
} ?> -->
                </pre>
                </div>
            </div>
        </main>
    </div>
    <?php include('./includes/footer.php'); ?>
</body>