<?php require 'header.php' ?>

<div class="page-title mb-5" data-aos="fade">
    <div class="container py-5">
        <h1>VISI DAN MISI</h1>
    </div>
</div>

<?php $profil = getWhere("SELECT * FROM profil WHERE id_profil = 1 "); ?>
<div class="container mb-5">
    <div class="card shadow p-3">
        <?= $profil['visimisi']; ?>
    </div>
</div>

<?php require 'footer.php' ?>