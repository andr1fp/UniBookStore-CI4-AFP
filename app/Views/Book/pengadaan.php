<!-- File: App/Views/book/pengadaan.php -->

<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <h1 class="mb-4">Pengadaan Buku</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Sisa Stok</th>
                <th>Nama Penerbit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book) : ?>
                <tr>
                    <td><?= $book['nama_buku']; ?></td>
                    <td><?= $book['stok']; ?></td>
                    <td><?= $book['nama_penerbit']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Print Button -->
    <a href="<?= base_url('pengadaan/print'); ?>" class="btn btn-primary" target="_blank">Print Report</a>
</div>

<?= $this->endSection() ?>
