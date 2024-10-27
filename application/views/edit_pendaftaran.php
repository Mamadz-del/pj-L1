<h1>Edit Pendaftar</h1>

<form action="<?= base_url('Edit/updatePendaftaran/' . $tb_pendaftaran['idPendaftaran']); ?>" method="post">
    <select name="id_lomba" id="lomba">
        <option value="" disabled>Pilih Lomba</option>
        <?php foreach($tb_jns_lomba as $lomba) : ?>
            <option value="<?= $lomba['idLomba'] ?>" <?= (isset($tb_pendaftaran['idLomba']) && $tb_pendaftaran['idLomba'] == $lomba['idLomba']) ? 'selected' : ''; ?>>
                <?= $lomba['namaLomba'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="nama_pendaftar">Nama Pendaftar</label>
    <input value="<?= isset($tb_pendaftaran['namaPendaftar']) ? $tb_pendaftaran['namaPendaftar'] : ''; ?>" required
    name="nama_pendaftar" type="text">

    <label for="kelas">Kelas</label>
    <input value="<?= isset($tb_pendaftaran['kelas']) ? $tb_pendaftaran['kelas'] : ''; ?>" required
    name="kelas" type="text">

    <label for="no_hp">no_hp</label>
    <input value="<?= isset($tb_pendaftaran['noHp']) ? $tb_pendaftaran['noHp'] : ''; ?>" required
    name="no_hp" type="text">

    <button type="submit">Edit</button>
</form>