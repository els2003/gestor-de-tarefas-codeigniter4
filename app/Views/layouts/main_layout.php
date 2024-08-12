<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/Fontawesome/css/all.min.css') ?>">

    <!-- DataTables -->
    <?php if(!empty($datatables)) : ?>
        <link rel="stylesheet" href="<?= base_url('assets/datatables/datatables.min.css') ?>">
        <script src="<?= base_url('assets/datatables/jQuery-3.7.0/jquery-3.7.0.min.js') ?>"></script>
    <?php endif; ?>

</head>
<body>
    
    <!-- render top bar when logged in -->
    <?php if(session()->has('id')) : ?>
        <?= $this->include('layouts/top_bar') ?>
    <?php endif; ?>

    <!-- render section -->
    <?= $this->renderSection('content') ?>

    <!-- Bootstrap JS -->
    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>

    <!-- DataTables -->
    <?php if(!empty($datatables)) : ?>
        <script src="<?= base_url('assets/datatables/datatables.min.js') ?>"></script>
    <?php endif; ?>

</body>
</html>