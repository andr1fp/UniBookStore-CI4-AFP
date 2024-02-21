<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <h1 class="mb-4">Admin - Add Publisher</h1>

    <form action="/admin/savePublisher" method="post">
        <!-- Add Publisher Form Fields -->
        <div class="form-group">
            <label for="nama">Nama Penerbit</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="kota">Kota</label>
            <input type="text" name="kota" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Publisher</button>
    </form>
</div>

<?= $this->endSection() ?>
