
<h1>Edit Lomba: <?= $tb_jns_lomba['namaLomba'] ?></h1>

<form action="<?= base_url('Edit/updateLomba/' . $tb_jns_lomba['idLomba']) ?>" method="post">

        <label for="nama_lomba">Nama Lomba</label>
    <input type="text" id="nama_lomba" name="nama_lomba" value="<?= $tb_jns_lomba['namaLomba'] ?>"><br>

    <label for="penyelenggara">penyelenggara</label>
    <input type="text" id="penyelenggara" name="penyelenggara" value="<?= $tb_jns_lomba['penyelenggara'] ?>">

    <button type="submit">Edit</button>
    </label>
</form>