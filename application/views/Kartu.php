
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.min.css">

    <title>Data Kartu Nama</title>
    
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Data Kartu Nama</span>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h3>Data Kartu Nama</h3>
                 <a href="<?= base_url('kartu/tambah/'); ?>" class="btn btn-primary mb-2">Tambah Data</a>
                <div class="table-responsive table-striped">
                    <table class="table">
                        <thead>
                            <?php $no = 1; ?>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Telp</th>
                                <th scope="col">Email</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kartu as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $m['nama']; ?></td>
                                    <td><?= $m['telp']; ?></td>
                                    <td><?= $m['email']; ?></td>
                                    <td><?= $m['alamat']; ?></td>
                                    <td><a href="<?= base_url('kartu/hapus/'); ?><?= $m['id']; ?>" 
                                    class="badge badge-danger pl-2 pr-2"
                                    onclick="return confirm('Yakin Anda akan menghapus data ?');">Hapus</a></td>
                                    <td><a href="<?= base_url('kartu/ubah/'); ?><?= $m['id']; ?>"
                                    class="badge badge-warning">Edit</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
</body>

</html>
