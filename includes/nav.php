<nav class="navbar navbar-expand-sm bg-danger">
    <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
    <div class="container-fluid">
        <ul id="nav" class="navbar-nav">
            <li class="nav-item"><a class="nav-link text-white" href="index.php" <?php if ($currentPage == 'index.php') {
                                                                                        echo 'id="here"';
                                                                                    } ?>>Home</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="journal.php" <?php if ($currentPage == 'journal.php') {
                                                                                        echo 'id="here"';
                                                                                    } ?>>Journal</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="gallery.php" <?php if ($currentPage == 'gallery.php') {
                                                                                        echo 'id="here"';
                                                                                    } ?>>Gallery</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="contact_us.php" <?php if ($currentPage == 'contact_us.php') {
                                                                                            echo 'id="here"';
                                                                                        } ?>>Contact</a></li>
        </ul>
    </div>
</nav>