<?php include 'layout2/header.php'; ?>

    <!-- Konten Utama -->
    <div class="container mt-4">
        <h2 class="fw-semibold mb-3">Data Barang</h2>
        <hr>
        <a href="tambah-barang.php" class="btn btn-primary mb-1">Tambah</a>
        <!-- Tabel Data Barang -->
        <table class="table table-bordered table-striped align-middle">
            <thead>
                <tr>
                    <th scope="col" style="width: 5%;">No</th>
                    <th scope="col" style="width: 25%;">Nama</th>
                    <th scope="col" style="width: 20%;">Jumlah</th>
                    <th scope="col" style="width: 20%;">Harga</th>
                    <th scope="col" style="width: 15%;">Tanggal</th>
                    <th scope="col" style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data_barang as $barang) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $barang['nama']; ?></td>
                    <td><?= $barang['jumlah']; ?></td>
                    <td>Rp. <?= number_format($barang['harga'], 0, ',', '.'); ?></td>
                    <td><?= date("d/m/Y | H:i:s", strtotime($barang['tanggal'])); ?></td>
                    <td width="15%" class="text-center">
                        <a href="ubah-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn
                        btn-success">Ubah</a>
                        <a href="hapus-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

  <?php include 'layout2/footer.php'; ?>  