<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
    <link rel="shortcut icon" href="<?= base_url('/saitama.jpg');?>">
</head>
<body>
    <div id="container">
    <header>
        <img src="<?= base_url('/saitama.jpg');?>" title="saitama Logo" alt="saitama Logo" width="75"
        style="float: left; margin-right:10px;">
        <h1>Iuran Kas Gang Anggrek</h1>
    </header>
    <navbar>
        <a href="<?= base_url('/warga');?>" class="active">Dashboard</a>
        <a href="<?= base_url('/iuran');?>">Iuran</a>
        <a href="<?= base_url('/contact');?>">Kontak</a>
        <a href="<?= base_url('/admin/warga');?>">Admin</a>
        <a href="<?= base_url('/admin/kas');?>">Laporan</a>
    </navbar>
    <section id="wrapper">
        <section id="main">
