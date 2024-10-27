<h1>Data Event</h1>
<a href="<?= base_url() ?>Tambah/event">Tambah Data</a>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Lomba</th>
        <th>Penyelenggara</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($tb_jns_lomba as $key => $event) : ?>
    <tr>
        <td><?= $key + 1 ?></td>
        <td><?= $event['namaLomba'] ?></td>
        <td><?= $event['penyelenggara'] ?></td>
        <td><a href="<?= base_url() ?>Edit/editLomba/<?= $event['idLomba'] ?>">Edit</td>
        <td><a href="<?= base_url() ?>Hapus/hapusEvent/<?= $event['idLomba'] ?>">Hapus</a></td>
    </tr>
    <?php endforeach;?>
</table>