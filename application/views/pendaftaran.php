<h1>Data Pendaftar</h1>

<a href="<?= base_url() ?>Tambah/pendaftaran">Tambah Data</a>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Lomba</th>
        <th>Nama Pendaftar</th>
        <th>Kelas</th>
        <th>No. Telp</th>
        <th>Tanggal Daftar</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>
    <?php $no = 1; foreach ($tb_pendaftaran as $pendaftaran) : ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $pendaftaran['namaLomba'] ?></td> <!-- Ganti $pendaftar menjadi $pendaftaran -->
        <td><?= $pendaftaran['namaPendaftar'] ?></td>
        <td><?= $pendaftaran['kelas'] ?></td>
        <td><?= $pendaftaran['noHp'] ?></td>
        <td><?= $pendaftaran['tglDaftar'] ?></td>
        <td><a href="<?= base_url() ?>Edit/editPendaftaran/<?= $pendaftaran['idPendaftaran'] ?>">Edit</a></td>
        <td><a href="<?= base_url() ?>Hapus/hapusPendaftaran/<?= $pendaftaran['idPendaftaran'] ?>">Hapus</a></td>
    </tr>
    <?php endforeach; ?>
</table>
