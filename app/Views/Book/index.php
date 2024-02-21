<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
        <h1 class="mb-4">UNIBOOKSTORE - All Books</h1>

        <!-- Search Form -->
        <form action="<?= base_url('search') ?>" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Nama Buku" name="search_query">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </div>
        </form>

        <!-- Book Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Kategori</th>
                    <th>Nama Buku</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Penerbit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book) : ?>
                    <tr>
                        <td><?= $book['id_buku']; ?></td>
                        <td><?= $book['kategori']; ?></td>
                        <td><?= $book['nama_buku']; ?></td>
                        <td><?= $book['harga']; ?></td>
                        <td><?= $book['stok']; ?></td>
                        <td><?= $book['nama']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?= $this->endSection() ?>


