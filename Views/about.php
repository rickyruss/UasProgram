<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="<?= base_url('/saitama.jpg');?>">
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="introduce">
        <div class="row">
            <img src="pp.jpg" title="Ricky Rusandi" alt="Ricky Rusandi" class="image-circle" width="230"
            style="float: left; border: 2px solid black;">
            <h1>Hello!</h1>
            <p>Nama saya Ricky Rusandi. Saya adalah seorang mahasiswa dari <i>Universitas Pelita Bangsa</i> yang saat ini sedang
                mempelajari materi PHP Framework (Codeigniter) dalam mata kuliah <i>Pemrograman Web</i>.</p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>
