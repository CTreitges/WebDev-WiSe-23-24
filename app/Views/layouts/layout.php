<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $title; ?> | Task Board </title>
    <link rel="icon" href="<?php echo base_url();?>Material/LogoIcon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url();?>Material/LogoIcon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url();?>Style.css">
    <link href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark mb-1 mt-1 ps-3">
            <a class="navbar-brand" href="<?php echo base_url();?>Startseite">
                <img src="<?php echo base_url();?>Material/Logo.svg" alt="Logo" width="150" class="d-inline-block align-text-top">
            </a>
            <div class=" vertical-line d-none d-lg-block mx-3"></div>
            <button class="navbar-toggler border-2 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo ($title == 'Startseite') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo base_url();?>Startseite">Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Boards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>Spalten">Spalten</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?= $this->renderSection('content') ?>
    <footer>
        <div class="container-fluid mb-3 mt-3 ps-3 d-flex flex-wrap justify-content-between">
            <span class="footer-text">
                © 2023 Meine Webseite
            </span>
            <span class="footer-text">
                <a class="footer-link" href="#">Impressum</a>
                <a class="footer-link ms-1" href="#">AGB</a>
                <a class="footer-link ms-1" href="#">Datenschutz</a>
            </span>
        </div>
    </footer>
    <script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/26d48bf35d.js" crossorigin="anonymous"></script>
</body>
</html>