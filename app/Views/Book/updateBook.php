<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <h1 class="mb-4">Admin - Update Book</h1>

    <form action="/admin/updateBook/<?= $book['id_buku']; ?>" method="post">
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <select name="kategori" class="form-control" required>
                <option value="B" <?= ($book['kategori'] == 'B') ? 'selected' : ''; ?>>Bisnis</option>
                <option value="K" <?= ($book['kategori'] == 'K') ? 'selected' : ''; ?>>Keilmuan</option>
                <option value="N" <?= ($book['kategori'] == 'N') ? 'selected' : ''; ?>>Novel</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nama_buku">Nama Buku</label>
            <input type="text" name="nama_buku" class="form-control" value="<?= $book['nama_buku']; ?>" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" value="<?= $book['harga']; ?>" required>
        </div>

        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" name="stok" class="form-control" value="<?= $book['stok']; ?>" required>
        </div>

        <div class="form-group">
            <label for="id_penerbit">Nama Penerbit</label>
            <select name="id_penerbit" class="form-control" required>
                <?php foreach ($publishers as $publisher) : ?>
                    <option value="<?= $publisher['id_penerbit']; ?>" <?= ($book['id_penerbit'] == $publisher['id_penerbit']) ? 'selected' : ''; ?>><?= $publisher['nama']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
</div>

<?= $this->endSection() ?>
