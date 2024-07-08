<?php require '../template/header.php' ?>

<?php $prodi = get("SELECT * FROM prodi ORDER BY id_prodi DESC"); ?>

<div class="card shadow p-3">
    <h5>Prodi</h5>
</div>

<div class="card shadow p-3">

    <div class="mb-3">
        <a class="btn btn-primary" href="<?= $base_url; ?>admin/prodi/tambah.php" role="button">Tambah</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered w-100" id="data-table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Prodi</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Icon</th>
                    <th class="text-center">Urutan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php $i = 1 ?>
                <?php foreach ($prodi as $row) : ?>
                    <tr>
                        <td class="text-center"><?= $i++; ?></td>
                        <td><?= $row['prodi']; ?></td>
                        <td><?= $row['deskripsi']; ?></td>
                        <td class="text-center"> <i class="<?= $row['icon']; ?>"></i> </td>
                        <td class="text-center"><?= $row['urutan']; ?></td>
                        <td class="text-center text-nowrap">
                            <a class="btn btn-warning me-1" href="<?= $base_url; ?>admin/prodi/ubah.php?id=<?= $row['id_prodi']; ?>" role="button"><i class='bx bx-edit-alt'></i></a>
                            <a class="btn btn-danger button-delete" href="<?= $base_url; ?>admin/prodi/hapus.php?id=<?= $row['id_prodi']; ?>" role="button"><i class='bx bx-trash'></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>

</div>

<?php require '../template/footer.php' ?>