<!-- app/Views/admin/index.php -->

<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <h1 class="mb-4">Admin - Manage Books and Publishers</h1>

    <!-- Add Book Button -->
    <a href="<?= base_url('admin/addBook'); ?>" class="btn btn-primary mb-3">Add Book</a>
    
    <!-- Book Table -->
    <h2>Books</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Kategori</th>
                <th>Nama Buku</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Penerbit</th>
                <th>Action</th>
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
                    <td>
                        <a href="<?= base_url('/admin/updateBook/' . $book['id_buku']); ?>">Edit</a>
                        <a href="#" onclick="confirmDelete('<?= $book['id_buku']; ?>')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Publisher Table -->
    <br/>
    <h2>Publishers</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID Penerbit</th>
                <th>Nama Penerbit</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($publishers as $publisher) : ?>
                <tr>
                    <td><?= $publisher['id_penerbit']; ?></td>
                    <td><?= $publisher['nama']; ?></td>
                    <td><?= $publisher['alamat']; ?></td>
                    <td><?= $publisher['kota']; ?></td>
                    <td><?= $publisher['telepon']; ?></td>
                    <td>
                        <a href="<?= base_url('/admin/editPublisher/' . $publisher['id_penerbit']); ?>">Edit</a>
                        <a href="#" onclick="$('#deletePublisherModal<?= $publisher['id_penerbit']; ?>').modal('show');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Delete Book Modal -->
<?php foreach ($books as $book) : ?>
    <div class="modal fade" id="deleteModal<?= $book['id_buku']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?= $book['id_buku']; ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel<?= $book['id_buku']; ?>">Delete Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete the book "<?= $book['nama_buku']; ?>"?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="#" onclick="confirmDelete('<?= $book['id_buku']; ?>')" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- JavaScript for SweetAlert -->
<script src="/assets/js/unpkg.com_sweetalert@2.1.2_dist_sweetalert.min.js"></script>

<script>
    function confirmDelete(bookId) {
        swal({
                title: "Apakah Anda yakin?",
                text: "Setelah dihapus, data akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = "/admin/deleteBook/" + bookId;
                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>

<?= $this->endSection() ?>
